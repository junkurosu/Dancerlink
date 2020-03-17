<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use \App\Category;
use \App\Thread;
use \App\Meta;
use \App\Comment;
use Exception;

use App\Http\Controllers\Controller;
use Goodby\CSV\Import\Standard\Lexer;
use Goodby\CSV\Import\Standard\Interpreter;
use Goodby\CSV\Import\Standard\LexerConfig;

class CsvController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * csv 登録用の根幹プログラム　クラス名を指定してここに投げる
     * @param  Request $request [CSVを受け取ったリクエストデータ]
     * @param  [class]  $class   [操作するクラス名]
     * @return [response]           [リダイレクトで戻る]
     */
    public function csvRegister(Request $request,$class){

        $data = $request->data_file;
        $config = new LexerConfig();
        $config->setDelimiter(",");
        $interpreter = new Interpreter();
        $lineNumber = 0;
        $column_name = [];
        $class = "\App\\".$class;
        $interpreter->addObserver(function(array $columns)  use (&$lineNumber,&$column_name,$class) {
            $lineNumber += 1;
            if($lineNumber === 1){
                foreach($columns as $value){
                    $column_name[] = $value;
                }
            }else{
                $input_data = [];
                foreach($column_name as $index => $key){
                    $input_data[$key] = is_null($columns[$index]) ? "" : $columns[$index];
                }

                if($input_data['id'] != "" && $class::find($input_data['id'])){
                    // save
                    $class::findOrFail($input_data['id'])->fill($input_data)->save();
                }else{
                    // create
                    $title = $input_data['title'];
                    if(!$class::where('title',$title)->first()){
                        $model = $class::create($input_data);
                    }
                }
            }
        });
        $lexer = new Lexer($config);
        $lexer->parse($data, $interpreter);
        return back();
    }

    public function csvFileOutput($class){
        $stream = fopen('php://temp','w');
        switch ($class) {
            case 'Category':
            $keys = [
                'id','text','title','content'
            ];
            break;

            case 'Tag':
            $keys = [
                'id','text','title','content'
            ];
            break;
            

            case 'Dream':
            $keys = [
                'id','title','content','category_id'
            ];
            break;
            
            default:
            $keys = [];
            break;
        }

        fputcsv($stream,$keys);
        $class = "\App\\".$class;

        foreach($class::all() as $model)
        {   
            $array = [];
            foreach ($keys as $index => $key) {
                $array[] = $model->$key;
            }
            fputcsv($stream,$array);
        }

        rewind($stream);
        $csv = mb_convert_encoding(str_replace(PHP_EOL, "\r\n", stream_get_contents($stream)), 'SJIS', 'UTF-8');
        $filename = "$class.csv";
        //header
        $headers = array(
            'Content-Type' => 'text/csv',
            'Content-Disposition' => 'attachment; filename="' . $filename . '"'
        );
        return \Response::make($csv, 200, $headers);
    }

    public function categoryCsvPost(Request $request){
        return $this->csvRegister($request,'Category');
    }
    public function tagCsvPost(Request $request){
        return $this->csvRegister($request,'Tag');
    }
    public function dreamCsvPost(Request $request){
        return $this->csvRegister($request,'Dream');
    }

    public function categoryCsvFile(){
        return $this->csvFileOutput('Category');
    }
    public function tagCsvFile(){
        return $this->csvFileOutput('Tag');
    }
    public function dreamCsvFile(){
        return $this->csvFileOutput('Dream');
    }


     public function csvPrefRegister(Request $request){
        $data = $request->data_file;
        $config = new LexerConfig();
        $config->setDelimiter(",");
        $interpreter = new Interpreter();
        $interpreter->addObserver(function(array $columns){
            /*
            $columns[0] = code
            $columns[1] = pref_name
            */
            if($columns[0] && $columns[0] != "コード"){
                try {
                    \App\Prefecture::create([
                    'code' => $columns[0],
                    'pref_name' => $columns[1],
                    'city_name' => $columns[2],
                    'city_sub_name' => $columns[3],
                    'lat' => $columns[4],
                    'lng' => $columns[5],
                    ]);
                } catch (Exception $e) {
                    
                }
            }
        });
        $lexer = new Lexer($config);
        $lexer->parse($data, $interpreter);
        return back();
    }



}

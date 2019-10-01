<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Category;
use App\Thread;
use App\Meta;
use App\Comment;

use Session;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');

    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.home');
    }

    public function category(){
        return view('admin.category');
    }
    public function categoryPost(Request $request){
        $array = ['name','description','affiliate_text','affiliate_url','ranking','image_url'];
        foreach($array as $key){
            $request[$key] = (isset($request[$key]) && $request[$key] != "") ? $request[$key] : "";
        }
        $category = Category::create($request->all());
        Session::flash('message', 'カテゴリーを作成しました。'); 
        return redirect()->back();
    }
    public function categoryEdit($id){
        return view('admin.categoryedit',[
            'category' => Category::findOrFail($id)
        ]);
    }
    /**
     * request要素にcmdがある。[category]の時は、カテゴリーの更新。[meta]の時はメタ情報の更新。
     * @param  int  $id      [category id]
     * @param  Request $request [request情報]
     * @return [back]           [session情報を加えること]
     */
    public function categoryUpdate($id,Request $request){
        $cmd = $request->cmd;
        $category_id = $id;
        if($cmd == 'category'){
            $category = Category::findOrFail($id)->fill($request->all())->save();
            Session::flash('message', 'カテゴリーを更新しました。');
        }elseif($cmd == "meta"){
         $meta_ids = $request->meta_id;
         $meta_keys = $request->meta_key;
         $meta_values = $request->meta_value;
         $meta_priorities = $request->meta_priority;
         foreach ($meta_ids as $index => $meta_id) {
             if($meta_id != 0){
                Meta::findOrFail($meta_id)->fill([
                    'meta_key' => $meta_keys[$index],
                    'meta_value' => $meta_values[$index],
                    'priority' => $meta_priorities[$index],
                ])->save();
            }else{
                if($meta_keys[$index] != "" && $meta_values[$index] != "" && $meta_priorities[$index] != ""){
                    Meta::create([
                        'category_id' => $category_id,
                        'meta_key' => $meta_keys[$index],
                        'meta_value' => $meta_values[$index],
                        'priority' => $meta_priorities[$index],
                    ]);
                }
            }
        }
        Session::flash('message', 'メタ情報を更新しました。'); 

    }
    return back();
}
public function __trim($str){
    if(is_null($str)){
        return '';
    }
    $str = trim($str);
    $str = preg_replace('/[\r\t]/', '', $str);
    $str = preg_replace('/\s(?=\s)/', '', $str);
    return $str;
}

}

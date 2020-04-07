<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Studio;
use App\Prefecture;

class CodeCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'code';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'studiosにcodeをつける';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        
        $prefectures=Prefecture::get();
        

            foreach($prefectures as $prefecture){
                $code=$prefecture->code;
                $pref=$prefecture->pref_name;
                $city=$prefecture->city_name;
                $subcity=$prefecture->city_sub_name;
                $address=$pref.$city.$subcity;

                $text = preg_replace('/( |　|,|、)/', ',', $address);
                $keywords = explode(',',$text);

                foreach ($keywords as $key => $value) {
                    $studios = Studio::where('id','>','0')->where('code',null)->where('address','like',"%{$value}%")->get();


                    if(count($studios) > 0){

                        foreach($studios as $studio){
                            $id=$studio->id;
                            Studio::where('id',$id)->update([
                            'code'=>$code,
                            ]);
                        }
                    }
                } 
            }
    }

}

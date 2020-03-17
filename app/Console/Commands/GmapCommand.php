<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Memo;

class GmapCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'GmapRegister';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '住所を緯度経度に変える';

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
         $memos = Memo::where('lat',null)->get();
            mb_language("Japanese");//文字コードの設定
            mb_internal_encoding("UTF-8");

            foreach ($memos as $memo) {
            $id=$memo->id;
            $address = $memo->address;
            $myKey = "AIzaSyDsDfT3bOMmKfwz3y2FyggU8-8hcg-Oh4s";


            $address = urlencode($address);

            $url = "https://maps.googleapis.com/maps/api/geocode/json?address=" . $address . "+CA&key=" . $myKey ;
            sleep(2);

            $contents= file_get_contents($url);
            $jsonData = json_decode($contents,true);

            if(count($jsonData["results"]) > 0){

                $lat = $jsonData["results"][0]["geometry"]["location"]["lat"];
                $lng = $jsonData["results"][0]["geometry"]["location"]["lng"];

                Memo::where('id',$id)->update([
                'lat'=>$lat,
                'lng'=>$lng,
                ]);
            }else{
                Memo::where('id',$id)->delete();
            }
        }


            
        
    }
}

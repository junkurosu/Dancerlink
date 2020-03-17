<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Studio;
use App\Memo;

class GmapsController extends Controller
{
    /**
    * Google Map 画面表示機能
    */
    public function view(Request $request)
    {
        $address = $request->address;
        return view('gmaps.view',[
        	'address'=> $address
        ]);
    }

public function pref(Request $request)
    {
        return view('gmaps.pref');
    }

    public function search(Request $request)
    {
     $lat=$request->lat;
     $lng=$request->lng;
    	
      $latlng=$lat.','.$lng;


    	
    	$studios = Studio::get();
    	return view('gmaps.search',[
    		'studios'=>$studios,
    		'latlng'=>$latlng,
    	]);

    }

    

    public function studios(){
        return view('gmaps.item',[
            'items' => Studio::orderBy('updated_at','desc')->paginate(50)
        ]);
    }

public function registerGet()
    {
    	 $message='ご協力よろしくお願いします';

        return view('gmaps.studioRegister',compact('message'));
    }

 protected function create(Request $request)
    {
        // return false;
        
        try{
        	Memo::create([
            'name' =>$request->name,
            'address' => $request->address,
            'url' => $request->url,
        ]);
        	$message='登録できました。管理者が確認の後にサイトに反映されます。';
        }catch(\Exception $e){


        	$message='登録ができませんでした。既に登録されているスタジオは登録できません。';
        }
        
            return view('gmaps.studioRegister',compact('message'));
    }


    


    



}

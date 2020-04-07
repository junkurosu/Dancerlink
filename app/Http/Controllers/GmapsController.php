<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Studio;
use App\Memo;
use App\Prefecture;

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


    	
    	$studios = Studio::whereNotNull('code')->get();
    	return view('gmaps.search',[
    		'studios'=>$studios,
    		'latlng'=>$latlng,
    	]);

    }

    public function pref2(Request $request)
    {
        return view('gmaps.pref2');
    }

    public function address(Request $request)
    {
        
        $code=$request->code;


        return redirect()->route('studios',[$code]);

    
    }

    public function studios($code){

        $item=Prefecture::where('code',$code)->first();

        $pref=$item->pref_name;
        $city=$item->city_name;
        $subcity=$item->city_sub_name;

        $address=$pref.$city.$subcity;

        $text = preg_replace('/( |　|,|、)/', ',', $address);
        $keywords = explode(',',$text);

        $studios = Studio::where('id','>','0');
        foreach ($keywords as $key => $value) {
            $studios = $studios->where('address','like',"%{$value}%");
        }
        $studios = $studios->paginate(30);

        

        return view('gmaps.item',[
            'code'=>$code,
            'address' => $address,
            'studios' => $studios
        ]);
    }

    public function details($code,$id){
        $Prefecture =Prefecture::where('code',$code)->first();

        $pref=$Prefecture->pref_name;
        $city=$Prefecture->city_name;
        $subcity=$Prefecture->city_sub_name;

        $address=$pref.$city.$subcity;

        $item =Studio::where('id',$id)->first();

        
        
        return view('gmaps.studioDetails',[
            'code'=>$code,
            'address' => $address,
            'item' => $item
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

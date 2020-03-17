<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Prefecture;

class PrefController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.pref');
    }

    public function fetchPrefs(Request $request){
        $pref = $request->pref;
        $city = $request->city;
        $subcity = $request->subcity;
        $lat = 0;
        $lng = 0;

        $prefs = array_unique(Prefecture::query()->pluck('pref_name')->toArray());
        if($pref){
            $cities = array_unique(Prefecture::where('pref_name',$pref)->pluck('city_name')->toArray());
        }else{
            $cities = [];
        }

        if($city){
            $subs = Prefecture::where('pref_name',$pref)->where('city_name',$city);
            $subcities = $subs->pluck('city_sub_name')->toArray();
            $subcities = array_unique($subcities);
            if($subs->count() == 1){
                $p = $subs->firstOrFail();
                $lat = $p->lat;
                $lng = $p->lng;
            }else{
                if($subcity && $subs->where('city_sub_name',$subcity)->count() == 1){
                        $p = $subs->where('city_sub_name',$subcity)->firstOrFail();
                        $lat = $p->lat;
                        $lng = $p->lng;
                }
            }
        }else{
            $subcities = [];
        }

        
        return response()->json([
        'prefs' => $prefs,
        'cities' => $cities,
        'subcities' => $subcities,
        'lat' => $lat,
        'lng' => $lng,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

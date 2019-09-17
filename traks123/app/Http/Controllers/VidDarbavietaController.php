<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Vid_Atalgojums_Darbavieta;
use Illuminate\Http\Request;

class VidDarbavietaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $darbavieta = DB::table('darbavieta')->pluck('uznemums','id');
        
        return view('viddarbavieta', ['darbavieta' => $darbavieta]);
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
        $id=$request->input('uznemums');

        $viddarbavieta = DB::table('vid_atalgojums_darbavieta')->
        join('atalgojums', 'vid_atalgojums_darbavieta.atalgojums_id', '=', 'atalgojums.id')->
        join('darbavieta', function($join) use ($request)
        {
            $join->on('vid_atalgojums_darbavieta.uznemums_id', '=', 'darbavieta.id')
                 ->where('darbavieta.id', '=', $request->input('uznemums'));
        })
        ->
        select('darbavieta.uznemums',DB::raw('round(AVG(atalgojums.alga),0) as alga'))->
        groupBy('darbavieta.uznemums')->
        get();


        return view('show_viddarbavieta')->with('viddarbavieta', $viddarbavieta);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Vid_Atalgojums_Darbavieta  $vid_Atalgojums_Darbavieta
     * @return \Illuminate\Http\Response
     */
    public function show(Vid_Atalgojums_Darbavieta $vid_Atalgojums_Darbavieta)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Vid_Atalgojums_Darbavieta  $vid_Atalgojums_Darbavieta
     * @return \Illuminate\Http\Response
     */
    public function edit(Vid_Atalgojums_Darbavieta $vid_Atalgojums_Darbavieta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Vid_Atalgojums_Darbavieta  $vid_Atalgojums_Darbavieta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vid_Atalgojums_Darbavieta $vid_Atalgojums_Darbavieta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Vid_Atalgojums_Darbavieta  $vid_Atalgojums_Darbavieta
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vid_Atalgojums_Darbavieta $vid_Atalgojums_Darbavieta)
    {
        //
    }
}

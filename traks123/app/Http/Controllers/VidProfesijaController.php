<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Vid_Atalgojums_Profesija;
use Illuminate\Http\Request;

class VidProfesijaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profesija = DB::table('profesija')->pluck('nosaukums','id');
        
        return view('vidprofesija', ['profesija' => $profesija]);
        
        
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
        $id=$request->input('nosaukums');

        $vidprofesija = DB::table('vid_atalgojums_profesija')->
        join('atalgojums', 'vid_atalgojums_profesija.atalgojums_id', '=', 'atalgojums.id')->
        join('profesija', function($join) use ($request)
        {
            $join->on('vid_atalgojums_profesija.profesija_id', '=', 'profesija.id')
                 ->where('profesija.id', '=', $request->input('nosaukums'));
        })
        ->
        select('profesija.nosaukums',DB::raw('round(AVG(atalgojums.alga),0) as alga'))->
        groupBy('profesija.nosaukums')->
        get();


        return view('show_vidprofesija')->with('vidprofesija', $vidprofesija);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Vid_Atalgojums_Profesija  $vid_Atalgojums_Profesija
     * @return \Illuminate\Http\Response
     */
    public function show(Vid_Atalgojums_Profesija $vid_Atalgojums_Profesija)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Vid_Atalgojums_Profesija  $vid_Atalgojums_Profesija
     * @return \Illuminate\Http\Response
     */
    public function edit(Vid_Atalgojums_Profesija $vid_Atalgojums_Profesija)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Vid_Atalgojums_Profesija  $vid_Atalgojums_Profesija
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vid_Atalgojums_Profesija $vid_Atalgojums_Profesija)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Vid_Atalgojums_Profesija  $vid_Atalgojums_Profesija
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vid_Atalgojums_Profesija $vid_Atalgojums_Profesija)
    {
        //
    }
}

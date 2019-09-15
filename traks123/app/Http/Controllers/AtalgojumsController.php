<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Atalgojums;
use App\Vid_Atalgojums_Darbavieta;
use App\Vid_Atalgojums_Profesija;

use Illuminate\Http\Request;

class AtalgojumsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return view('atalgojums');
        //$atalgojums = DB::table('atalgojums')->pluck('alga');
        $profesija = DB::table('profesija')->pluck('nosaukums','id');
        $darbavieta = DB::table('darbavieta')->pluck('uznemums','id');
        //$items = Items::pluck('name', 'id');

        return view('atalgojums', ['profesija' => $profesija], ['darbavieta' => $darbavieta]);
        
        
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
        $this->validate($request, [
            'nosaukums' => 'required',
            'uznemums' => 'required',
            'alga' => 'required'
        ]);
        // add to atalgojums       
        $atalgojums = new Atalgojums;
        $atalgojums->lietotajs_id = '1';
        $atalgojums->alga = $request->input('alga');
        $atalgojums->profesija_id = $request->input('nosaukums');
        $atalgojums->uznemums_id = $request->input('uznemums');
        $atalgojums->save();

        $viddarbavieta = new Vid_Atalgojums_Darbavieta;
        $viddarbavieta->uznemums_id = $request->input('uznemums');
        $viddarbavieta->alga = $request->input('alga');
        $viddarbavieta->save();

        $vidprofesija = new Vid_Atalgojums_Profesija;
        $vidprofesija->profesija_id = $request->input('uznemums');
        $vidprofesija->alga = $request->input('alga');
        $vidprofesija->save();
        
        
        
        return redirect('/atalgojums');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Atalgojums  $atalgojums
     * @return \Illuminate\Http\Response
     */
    public function show(Atalgojums $atalgojums)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Atalgojums  $atalgojums
     * @return \Illuminate\Http\Response
     */
    public function edit(Atalgojums $atalgojums)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Atalgojums  $atalgojums
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Atalgojums $atalgojums)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Atalgojums  $atalgojums
     * @return \Illuminate\Http\Response
     */
    public function destroy(Atalgojums $atalgojums)
    {
        //
    }
}

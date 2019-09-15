<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Atalgojums;
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
        $atalgojums->nosaukums = $request->input('nosaukums');
        $atalgojums->uznemums = $request->input('uznemums');
        $atalgojums->alga = $request->input('alga');
        
        
        
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

<?php

namespace App\Http\Controllers;

use App\Profesija;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProfesijaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('profesija');
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
        $this->validate($request, [
            'nosaukums' => 'required',
        ]);
    
        $profesija = new Profesija;
        $profesija->nosaukums = $request->input('nosaukums');
        $profesija->save();

        return view('profesija');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Profesija  $profesija
     * @return \Illuminate\Http\Response
     */
    public function show(Profesija $profesija)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Profesija  $profesija
     * @return \Illuminate\Http\Response
     */
    public function edit(Profesija $profesija)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Profesija  $profesija
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Profesija $profesija)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Profesija  $profesija
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profesija $profesija)
    {
        //
    }
}

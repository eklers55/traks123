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
        
        $atalgojums = DB::table('atalgojums')->pluck('alga');
        //$items = Items::pluck('name', 'id');

        return view('atalgojums', ['atalgojums' => $atalgojums]);
        
        
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

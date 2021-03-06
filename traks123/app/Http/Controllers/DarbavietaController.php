<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Darbavieta;
use Illuminate\Http\Request;

class DarbavietaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('darbavieta');
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
            'uznemums' => 'required',
            'adrese' => 'required'
        ]);

        //add darba vieta
        $darbavieta = new Darbavieta;
        $darbavieta->uznemums = $request->input('uznemums');
        $darbavieta->adrese = $request->input('adrese');
        $darbavieta->save();
        return redirect()->back()->withErrors('Veiksmīgi pievienots!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Darbavieta  $darbavieta
     * @return \Illuminate\Http\Response
     */
    public function show(Darbavieta $darbavieta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Darbavieta  $darbavieta
     * @return \Illuminate\Http\Response
     */
    public function edit(Darbavieta $darbavieta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Darbavieta  $darbavieta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Darbavieta $darbavieta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Darbavieta  $darbavieta
     * @return \Illuminate\Http\Response
     */
    public function destroy(Darbavieta $darbavieta)
    {
        /*$delete_darbavieta = DB::table('darbavieta')->where('id',$darbavieta_db)->delete();
        $delete_darbavieta = DB::table('atalgojums')->where('uznemums_id',$darbavieta_db)->delete();
        return redirect()->back()->withErrors('Veiksmīgi izdzēsts!');*/
    }
}

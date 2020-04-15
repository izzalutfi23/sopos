<?php

namespace App\Http\Controllers;

use App\Penjualanmodel;
use Illuminate\Http\Request;

class Penjualancontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin/penjualan');
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
     * @param  \App\Penjualanmodel  $penjualanmodel
     * @return \Illuminate\Http\Response
     */
    public function show(Penjualanmodel $penjualanmodel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Penjualanmodel  $penjualanmodel
     * @return \Illuminate\Http\Response
     */
    public function edit(Penjualanmodel $penjualanmodel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Penjualanmodel  $penjualanmodel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Penjualanmodel $penjualanmodel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Penjualanmodel  $penjualanmodel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Penjualanmodel $penjualanmodel)
    {
        //
    }
}

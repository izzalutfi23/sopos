<?php

namespace App\Http\Controllers;

use App\Stockinmodel;
use Illuminate\Http\Request;

class Stockincontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin/stockin');
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
     * @param  \App\Stockinmodel  $stockinmodel
     * @return \Illuminate\Http\Response
     */
    public function show(Stockinmodel $stockinmodel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Stockinmodel  $stockinmodel
     * @return \Illuminate\Http\Response
     */
    public function edit(Stockinmodel $stockinmodel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Stockinmodel  $stockinmodel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Stockinmodel $stockinmodel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Stockinmodel  $stockinmodel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Stockinmodel $stockinmodel)
    {
        //
    }
}

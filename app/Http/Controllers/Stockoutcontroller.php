<?php

namespace App\Http\Controllers;

use App\Stockoutmodel;
use Illuminate\Http\Request;

class Stockoutcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin/stockout');
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
     * @param  \App\Stockoutmodel  $stockoutmodel
     * @return \Illuminate\Http\Response
     */
    public function show(Stockoutmodel $stockoutmodel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Stockoutmodel  $stockoutmodel
     * @return \Illuminate\Http\Response
     */
    public function edit(Stockoutmodel $stockoutmodel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Stockoutmodel  $stockoutmodel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Stockoutmodel $stockoutmodel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Stockoutmodel  $stockoutmodel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Stockoutmodel $stockoutmodel)
    {
        //
    }
}

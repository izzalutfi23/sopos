<?php

namespace App\Http\Controllers;

use App\Unitmodel;
use Illuminate\Http\Request;

class Unitcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin/unit');
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
     * @param  \App\Unitmodel  $unitmodel
     * @return \Illuminate\Http\Response
     */
    public function show(Unitmodel $unitmodel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Unitmodel  $unitmodel
     * @return \Illuminate\Http\Response
     */
    public function edit(Unitmodel $unitmodel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Unitmodel  $unitmodel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Unitmodel $unitmodel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Unitmodel  $unitmodel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Unitmodel $unitmodel)
    {
        //
    }
}

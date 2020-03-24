<?php

namespace App\Http\Controllers;

use App\Itemmodel;
use Illuminate\Http\Request;

class Itemcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin/item');
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
     * @param  \App\Itemmodel  $itemmodel
     * @return \Illuminate\Http\Response
     */
    public function show(Itemmodel $itemmodel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Itemmodel  $itemmodel
     * @return \Illuminate\Http\Response
     */
    public function edit(Itemmodel $itemmodel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Itemmodel  $itemmodel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Itemmodel $itemmodel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Itemmodel  $itemmodel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Itemmodel $itemmodel)
    {
        //
    }
}

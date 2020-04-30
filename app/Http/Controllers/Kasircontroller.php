<?php

namespace App\Http\Controllers;

use App\Kasirmodel;
use App\Itemmodel;
use Illuminate\Http\Request;

class Kasircontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $item = Itemmodel::all();
        $data = array(
            'item' => $item
        );
        return view('kasir/sales', $data);
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
     * @param  \App\Kasirmodel  $kasirmodel
     * @return \Illuminate\Http\Response
     */
    public function show(Kasirmodel $kasirmodel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Kasirmodel  $kasirmodel
     * @return \Illuminate\Http\Response
     */
    public function edit(Kasirmodel $kasirmodel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Kasirmodel  $kasirmodel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kasirmodel $kasirmodel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Kasirmodel  $kasirmodel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kasirmodel $kasirmodel)
    {
        //
    }
}

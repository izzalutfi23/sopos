<?php

namespace App\Http\Controllers;

use App\Kategorimodel;
use Illuminate\Http\Request;

class Kategoricontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin/kategori');
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
     * @param  \App\Kategorimodel  $kategorimodel
     * @return \Illuminate\Http\Response
     */
    public function show(Kategorimodel $kategorimodel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Kategorimodel  $kategorimodel
     * @return \Illuminate\Http\Response
     */
    public function edit(Kategorimodel $kategorimodel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Kategorimodel  $kategorimodel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kategorimodel $kategorimodel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Kategorimodel  $kategorimodel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kategorimodel $kategorimodel)
    {
        //
    }
}

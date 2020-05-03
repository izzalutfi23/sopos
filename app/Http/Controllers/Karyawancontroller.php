<?php

namespace App\Http\Controllers;

use App\Karyawanmodel;
use Illuminate\Http\Request;

class Karyawancontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin/karyawan');
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
     * @param  \App\Karyawanmodel  $karyawanmodel
     * @return \Illuminate\Http\Response
     */
    public function show(Karyawanmodel $karyawanmodel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Karyawanmodel  $karyawanmodel
     * @return \Illuminate\Http\Response
     */
    public function edit(Karyawanmodel $karyawanmodel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Karyawanmodel  $karyawanmodel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Karyawanmodel $karyawanmodel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Karyawanmodel  $karyawanmodel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Karyawanmodel $karyawanmodel)
    {
        //
    }
}

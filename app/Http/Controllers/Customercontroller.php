<?php

namespace App\Http\Controllers;

use App\Customermodel;
use Illuminate\Http\Request;

class Customercontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin/customer');
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
     * @param  \App\Customermodel  $customermodel
     * @return \Illuminate\Http\Response
     */
    public function show(Customermodel $customermodel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Customermodel  $customermodel
     * @return \Illuminate\Http\Response
     */
    public function edit(Customermodel $customermodel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Customermodel  $customermodel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customermodel $customermodel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Customermodel  $customermodel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customermodel $customermodel)
    {
        //
    }
}

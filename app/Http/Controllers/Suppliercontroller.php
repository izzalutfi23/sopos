<?php

namespace App\Http\Controllers;

use App\Suppliermodel;
use Illuminate\Http\Request;

class Suppliercontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $supplier = Suppliermodel::all();
        $data['supplier'] = $supplier;

        return view('admin/supplier', $data);
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
        Suppliermodel::create($request->all());

        return redirect('/dashboard/supplier')->with('status', '1 Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Suppliermodel  $suppliermodel
     * @return \Illuminate\Http\Response
     */
    public function show(Suppliermodel $suppliermodel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Suppliermodel  $suppliermodel
     * @return \Illuminate\Http\Response
     */
    public function edit(Suppliermodel $suppliermodel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Suppliermodel  $suppliermodel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Suppliermodel $suppliermodel)
    {
        Suppliermodel::where('id', $suppliermodel->id)->update([
            'nama_suplier' => $request->nama_suplier,
            'no_hp' => $request->no_hp,
            'alamat' => $request->alamat,
            'deskripsi' => $request->deskripsi
        ]);

        return redirect('/dashboard/supplier')->with('status', '1 Data berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Suppliermodel  $suppliermodel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Suppliermodel $suppliermodel)
    {
        Suppliermodel::destroy('id', $suppliermodel->id);

        return redirect('/dashboard/supplier');
    }
}

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
        $unit = Unitmodel::all();
        $data['unit'] = $unit;

        return view('admin/unit', $data);
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
        Unitmodel::create($request->all());

        return redirect('/dashboard/unit')->with('status', '1 Data berhasil ditambahkan');
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
        Unitmodel::where('id', $unitmodel->id)->update([
            'nama_unit' => $request->nama_unit
        ]);

        return redirect('/dashboard/unit')->with('status', '1 Data berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Unitmodel  $unitmodel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Unitmodel $unitmodel)
    {
        Unitmodel::destroy('id', $unitmodel->id);

        return redirect('/dashboard/unit')->with('hapus', '1 Data unit berhasil dihapus');
    }
}

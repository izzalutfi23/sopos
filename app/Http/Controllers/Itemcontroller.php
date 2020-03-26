<?php

namespace App\Http\Controllers;

use App\Itemmodel;
use App\Kategorimodel;
use App\Unitmodel;
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
        $item = Itemmodel::all();
        $kategori = Kategorimodel::all();
        $unit = Unitmodel::all();

        $data = array(
            'item' => $item,
            'kategori' => $kategori,
            'unit' => $unit
        );
        return view('admin/item', $data);
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
        $request->request->add(['stok' => 0]);
        Itemmodel::create($request->all());

        return redirect('/dashboard/item')->with('status', '1 Data berhasil ditambahkan');
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
        Itemmodel::where('id', $itemmodel->id)->update([
            'id_kategori' => $request->id_kategori,
            'id_unit' => $request->id_unit,
            'kode_produk' => $request->kode_produk,
            'nama_produk' => $request->nama_produk,
            'harga' => $request->harga,
            'diskon' => $request->diskon
        ]);

        return redirect('/dashboard/item')->with('status', '1 Data berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Itemmodel  $itemmodel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Itemmodel $itemmodel)
    {
        Itemmodel::destroy('id', $itemmodel->id);

        return redirect('/dashboard/item')->with('hapus', '1 Data item berhasil dihapus');
    }
}

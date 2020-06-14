<?php

namespace App\Http\Controllers;

use App\Stockoutmodel;
use App\Itemmodel;
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
        $stockout = Stockoutmodel::all();
        $item = Itemmodel::all();
        $data = array(
            'stockout' => $stockout,
            'item' => $item
        );
        return view('admin/stockout', $data);
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
        Stockoutmodel::create([
            'id_produk' => $request->id_produk,
            'qty' => $request->qty,
            'detail' => $request->detail
        ]);

        Itemmodel::where('id', $request->id_produk)->decrement('stok', $request->qty);

        return redirect('/dashboard/stockout')->with('status', '1 Data berhasil ditambahkan');
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
        Itemmodel::where('id', $stockoutmodel->id_produk)->increment('stok', $stockoutmodel->qty);
        Stockoutmodel::destroy('id', $stockoutmodel->id);

        return redirect('/dashboard/stockout')->with('hapus', '1 Data item berhasil dihapus');
    }
}

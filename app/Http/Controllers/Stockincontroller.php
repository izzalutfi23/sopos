<?php

namespace App\Http\Controllers;

use App\Stockinmodel;
use App\Itemmodel;
use App\Suppliermodel;
use Illuminate\Http\Request;

class Stockincontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stockin = Stockinmodel::all();
        $supplier = Suppliermodel::all();
        $item = Itemmodel::all();
        $data = array(
            'stockin' => $stockin,
            'item' => $item,
            'supplier' => $supplier
        );
        return view('admin/stockin', $data);
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
        $request->validate([
            'nama_produk'=>'required'
        ]);

        if($request->hasFile('foto')){
            $request->file('foto')->move('foto/', $request->file('foto')->getClientOriginalName());
            $nama_file = $request->file('foto')->getClientOriginalName();
            Stockinmodel::create([
                'id_produk' => $request->id_produk,
                'id_supplier' => $request->id_supplier,
                'qty' => $request->qty,
                'foto' => $nama_file
            ]);
        }
        else{
            Stockinmodel::create([
                'id_produk' => $request->id_produk,
                'id_supplier' => $request->id_supplier,
                'qty' => $request->qty
            ]);
        }

        Itemmodel::where('id', $request->id_produk)->increment('stok', $request->qty);

        return redirect('/dashboard/stockin')->with('status', '1 Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Stockinmodel  $stockinmodel
     * @return \Illuminate\Http\Response
     */
    public function show(Stockinmodel $stockinmodel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Stockinmodel  $stockinmodel
     * @return \Illuminate\Http\Response
     */
    public function edit(Stockinmodel $stockinmodel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Stockinmodel  $stockinmodel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Stockinmodel $stockinmodel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Stockinmodel  $stockinmodel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Stockinmodel $stockinmodel)
    {
        // Menghapus jumlah stok barang ketika data stockin dihapus
        Itemmodel::where('id', $stockinmodel->id_produk)->decrement('stok', $stockinmodel->qty);
        
        Stockinmodel::destroy('id', $stockinmodel->id);

        return redirect('/dashboard/stockin')->with('hapus', '1 Data item berhasil dihapus');
    }
}

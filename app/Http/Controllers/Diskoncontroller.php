<?php

namespace App\Http\Controllers;

use App\Diskonmodel;
use App\Itemmodel;
use Illuminate\Http\Request;

class Diskoncontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $item = Itemmodel::all();
        $diskon = Diskonmodel::all();
        $data = array(
            'item' => $item,
            'diskon' => $diskon
        );
        return view('admin/diskon', $data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_produk'=>'required'
        ]);

        $diskon = Diskonmodel::where('id_produk', $request->id_produk)->get();
        $count = $diskon->count();

        if($count>0){
            return redirect('/dashboard/diskon')->with('ada', 'Diskon produk sudah ada');
        }
        else{
            Diskonmodel::create($request->all());
            return redirect('/dashboard/diskon')->with('status', '1 Data berhasil ditambahkan');
        }
    }

    public function destroy(Diskonmodel $diskonmodel)
    {
        Diskonmodel::destroy('id', $diskonmodel->id);

        return redirect('/dashboard/diskon')->with('hapus', '1 Data item berhasil dihapus');
    }
}

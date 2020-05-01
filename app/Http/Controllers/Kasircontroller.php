<?php

namespace App\Http\Controllers;

use App\Kasirmodel;
use App\Itemmodel;
use App\Customermodel;
use App\Cartmodel;

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
        $id = Kasirmodel::latest('id')->first();
        $custom = Customermodel::select('nama_customer')->get();
        $cart = Cartmodel::where('id_karyawan', auth()->user()->karyawan->id)->get();
        $data = array(
            'item' => $item,
            'id'=>$id->id+1,
            'custom' => $custom,
            'cart' => $cart
        );
        return view('kasir/sales', $data);
    }

    public function addcart(Request $produk){
        $cart = Cartmodel::where('id_produk', $produk->id_produk)->get();
        $tcart = $cart->count();

        if($tcart > 0){
            Cartmodel::where('id_produk', $produk->id_produk)->increment('qty', $produk->qty);
            Itemmodel::where('id', $produk->id_produk)->decrement('stok', $produk->qty);
        }
        else{
            Cartmodel::create(['id_produk' => $produk->id_produk, 'id_karyawan' => $produk->id_karyawan, 'qty' => $produk->qty]);
            Itemmodel::where('id', $produk->id_produk)->decrement('stok', $produk->qty);
        }

        return redirect('/kasir');
        
    }

    public function updatecart(Request $request, Cartmodel $cartmodel){
        Itemmodel::where('id', $cartmodel->id_produk)->increment('stok', $cartmodel->qty);
        Cartmodel::where('id', $cartmodel->id)->update([
            'qty' => $request->qty
        ]);
        Itemmodel::where('id', $cartmodel->id_produk)->decrement('stok', $request->qty);

        return redirect('/kasir');
    }

    public function delcart(Cartmodel $cartmodel){
        Itemmodel::where('id', $cartmodel->id_produk)->increment('stok', $cartmodel->qty);
        Cartmodel::destroy('id', $cartmodel->id);

        return redirect('/kasir');
    }

}

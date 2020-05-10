<?php

namespace App\Http\Controllers;

use App\Kasirmodel;
use App\Itemmodel;
use App\Customermodel;
use App\Cartmodel;
use App\Cabangtokomodel;

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
        $toko = Cabangtokomodel::select('nama_toko', 'alamat')->where('id', auth()->user()->karyawan->id_cabang)->get();
        $subtotal = 0;
        $total = 0;
        foreach($cart as $c){
            $subtotal = $c->produk->harga*$c->qty;
            $total = $total+$subtotal;
        }
        if(empty($id->id)){
            $trx = 1;
        }
        else{
            $trx = $id->id+1;
        }
        $data = array(
            'item' => $item,
            'id'=> $trx,
            'custom' => $custom,
            'cart' => $cart,
            'total' => $total,
            'toko' => $toko[0]
        );
        return view('kasir/sales', $data);
    }

    public function addcart(Request $produk){
        $cart = Cartmodel::where('id_produk', $produk->id_produk)->where('id_karyawan', $produk->id_karyawan)->get();
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
        $item = Itemmodel::find($cartmodel->id_produk);
        
        $stok = $item->stok+$request->stok;

        if($stok>=$request->qty){
            Itemmodel::where('id', $cartmodel->id_produk)->increment('stok', $cartmodel->qty);
            Cartmodel::where('id', $cartmodel->id)->update([
                'qty' => $request->qty
            ]);
            Itemmodel::where('id', $cartmodel->id_produk)->decrement('stok', $request->qty);

            return redirect('/kasir');
        }
        else{
            return redirect('/kasir')->with('warn', 'Stok tidak mencukupi');
        }
    }

    public function delcart(Cartmodel $cartmodel){
        Itemmodel::where('id', $cartmodel->id_produk)->increment('stok', $cartmodel->qty);
        Cartmodel::destroy('id', $cartmodel->id);

        return redirect('/kasir');
    }

    public function resetcart(){
        $idkaryawan = request()->segment(3);
        
        $cart = Cartmodel::where('id_karyawan', $idkaryawan)->get();

        foreach($cart as $c){
            Itemmodel::where('id', $c->id_produk)->increment('stok', $c->qty);
        }

        Cartmodel::where('id_karyawan', $idkaryawan)->delete();

        return redirect('/kasir');
    }

    public function transaksi(Request $request){

        $cart = Cartmodel::with(['produk' => function ($query) {
            $query->select(['id', 'nama_produk', 'harga']);
        }])
        ->where('id_karyawan', $request->id_karyawan)
        ->get();

        $i=0;
        foreach($cart as $j){
            $json = json_decode($j->produk);
            $test[$i]['nama_produk'] = $json->nama_produk;
            $test[$i]['harga'] = $json->harga;
            $test[$i]['qty'] = $j->qty;
            $i++;

        }
        $hasiljson = json_encode($test);

        // return $hasiljson;

        return redirect('/kasir')->with('notif', 'Transaksi Berhasil');
    }

    public function print(){
        return view('kasir/print');
    }

}

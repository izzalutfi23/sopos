<?php

namespace App\Http\Controllers;

use App\Penjualanmodel;
use App\Cabangtokomodel;

use Illuminate\Http\Request;

class Penjualancontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cabang = Cabangtokomodel::select('id', 'nama_toko')->get();
        $data = array(
            'cabang' => $cabang
        );
        return view('admin/pilihcabang', $data);
    }

    public function penjualan(){
        $idcabang = request()->segment(3);
        $penjualan = Penjualanmodel::where('id_cabang', $idcabang)->get();

        $data = array(
            'penjualan' => $penjualan
        );
        
        return view('admin/penjualan');   
    }

    public function destroy(Penjualanmodel $penjualanmodel)
    {
        //
    }
}

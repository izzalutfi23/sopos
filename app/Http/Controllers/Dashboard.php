<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Penjualanmodel;
use App\Cabangtokomodel;
use App\Customermodel;
use App\Karyawan;
Use DB;

class Dashboard extends Controller
{
    // , DB::raw("date_format(created_at, '%Y-%m-%d') as created_at ")
    public function index(){
        $data = DB::table('penjualan')->select(DB::raw("DATE(created_at) as created_at"), DB::raw('sum(total_akhir) as total_akhir'))
                ->groupBy(DB::raw("DATE(created_at)"))
                ->get();
        // dd($data);
        $total_customer = Customermodel::count();
        $last_update_customer = Customermodel::where('updated_at', Customermodel::max('updated_at'))->orderBy('updated_at','desc')->get('updated_at')->first();

        $total_karyawan = Karyawan::count();
        $last_update_karyawan = Karyawan::where('updated_at', Karyawan::max('updated_at'))->orderBy('updated_at','desc')->get('updated_at')->first();

        $total_cabangtoko = Cabangtokomodel::count();
        $last_update_cabangtoko = Cabangtokomodel::where('updated_at', Cabangtokomodel::max('updated_at'))->orderBy('updated_at','desc')->get('updated_at')->first();

        $pemasukan = Penjualanmodel::sum('total_akhir');
        $last_update_penjualan = Penjualanmodel::where('updated_at', Penjualanmodel::max('updated_at'))->orderBy('updated_at','desc')->get('updated_at')->first();
        $total_pemasukan = "Rp" . number_format($pemasukan,2,',','.');
        // dd($last_update_customer);
    	return view('admin/dashboard', compact('data', 'total_pemasukan','total_karyawan','total_cabangtoko', 'total_customer', 'last_update_customer', 'last_update_karyawan', 'last_update_cabangtoko', 'last_update_penjualan'));
    }
}

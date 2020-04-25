<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Karyawan;
use App\Customermodel;
use App\Itemmodel;
use DB;

class Kasir extends Controller
{
    public function index(){
        $customer = Customermodel::all();
        $product = Itemmodel::all();
    	return view('kasir/sales', compact('customer', 'product'));
    }

    public function process()
    {
        $a = 0;
        if(a == 0){
            $params = array("success" => true);
        }else{
            $params = array("success" => false);
        }
        echo json_encode($params);
    }
}

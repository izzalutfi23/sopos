<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Kasir extends Controller
{
    public function index(){
    	return view('kasir/sales');
    }
}

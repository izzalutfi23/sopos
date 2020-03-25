<?php

namespace App\Http\Controllers;

use App\Customermodel;
use Illuminate\Http\Request;

class Customercontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customer = Customermodel::all();
        $data['customer'] = $customer;

        return view('admin/customer', $data);
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
        Customermodel::create($request->all());

        return redirect('/dashboard/customer')->with('status', '1 Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Customermodel  $customermodel
     * @return \Illuminate\Http\Response
     */
    public function show(Customermodel $customermodel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Customermodel  $customermodel
     * @return \Illuminate\Http\Response
     */
    public function edit(Customermodel $customermodel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Customermodel  $customermodel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customermodel $customermodel)
    {
        Customermodel::where('id', $customermodel->id)->update([
            'nama_customer' => $request->nama_customer,
            'j_kel' => $request->j_kel,
            'no_hp' => $request->no_hp,
            'alamat' => $request->alamat
        ]);

        return redirect('/dashboard/customer')->with('status', '1 Data berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Customermodel  $customermodel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customermodel $customermodel)
    {
        Customermodel::destroy('id', $customermodel->id);

        return redirect('/dashboard/customer')->with('hapus', '1 Data customer berhasil dihapus');
    }
}

<?php

namespace App\Http\Controllers;

use App\Cabangtokomodel;
use Illuminate\Http\Request;

class Cabangtokocontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cabangtoko = Cabangtokomodel::all();
        $data['cabangtoko'] = $cabangtoko;

        return view('admin/cabangtoko', $data);
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
        Cabangtokomodel::create($request->all());

        return redirect('/dashboard/cabangtoko')->with('status', '1 Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cabangtokomodel $cabangtokomodel)
    {
        Cabangtokomodel::where('id', $cabangtokomodel->id)->update([
            'nama_toko' => $request->nama_toko,
            'alamat' => $request->alamat
        ]);

        return redirect('/dashboard/cabangtoko')->with('status', '1 Data berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cabangtokomodel $cabangtokomodel)
    {
        Cabangtokomodel::destroy('id', $cabangtokomodel->id);

        return redirect('/dashboard/cabangtoko')->with('hapus', '1 Data kategori berhasil dihapus');
    }
}

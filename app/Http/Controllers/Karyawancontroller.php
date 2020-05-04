<?php

namespace App\Http\Controllers;

use App\Karyawanmodel;
use App\User;
use App\Cabangtokomodel;
use Illuminate\Http\Request;

class Karyawancontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Karyawanmodel::all();
        $cabangtoko = Cabangtokomodel::select('id', 'nama_toko')->get();
        $data = array(
            'karyawan' => $user,
            'cabang' => $cabangtoko
        );
        return view('admin/karyawan', $data);
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
        if($request->hasFile('foto')){
            $request->file('foto')->move('foto/user', $request->file('foto')->getClientOriginalName());
            $nama_file = $request->file('foto')->getClientOriginalName();

            // Insert tabel user
            $user = new User;
            $user->role = $request->role;
            $user->status = $request->status;
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = bcrypt($request->password);
            $user->save();

            // Insert tabel karyawan
            Karyawanmodel::create([
                'id_user' => $user->id,
                'id_cabang' => $request->id_cabang,
                'nama_karyawan' => $request->nama_karyawan,
                'j_kel' => $request->j_kel,
                'no_hp' => $request->no_hp,
                'alamat' => $request->alamat,
                'foto' => $nama_file
            ]);
        }
        else{
            // Insert tabel karyawan tanpa foto
            Karyawanmodel::create([
                'id_user' => $user->id,
                'id_cabang' => $request->id_cabang,
                'nama_karyawan' => $request->nama_karyawan,
                'j_kel' => $request->j_kel,
                'no_hp' => $request->no_hp,
                'alamat' => $request->alamat
            ]);
        }

        return redirect('/dashboard/karyawan')->with('status', '1 Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Karyawanmodel  $karyawanmodel
     * @return \Illuminate\Http\Response
     */
    public function show(Karyawanmodel $karyawanmodel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Karyawanmodel  $karyawanmodel
     * @return \Illuminate\Http\Response
     */
    public function edit(Karyawanmodel $karyawanmodel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Karyawanmodel  $karyawanmodel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Karyawanmodel $karyawanmodel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Karyawanmodel  $karyawanmodel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Karyawanmodel $karyawanmodel)
    {
        //
    }
}

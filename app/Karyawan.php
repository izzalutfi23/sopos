<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    protected $table = 'karyawan';
    protected $fillable = ['id_user', 'id_cabang', 'nama_karyawan', 'j_kel', 'no_hp', 'alamat'];
}

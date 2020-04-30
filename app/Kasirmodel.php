<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kasirmodel extends Model
{
    protected $table = 'penjualan';
    protected $fillable = ['id', 'id_customer', 'id_cabang', 'id_karyawan', 'faktur', 'total', 'diskon', 'total_akhir'];
}

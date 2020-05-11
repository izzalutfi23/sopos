<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kasirmodel extends Model
{
    protected $table = 'penjualan';
    protected $fillable = ['id', 'id_cabang', 'id_karyawan', 'customer', 'faktur', 'total', 'diskon', 'total_akhir', 'bayar', 'kembalian', 'note', 'item'];
}

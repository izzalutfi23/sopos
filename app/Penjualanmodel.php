<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penjualanmodel extends Model
{
    protected $table = 'penjualan';
    protected $fillable = ['id_customer', 'id_cabang', 'id_karyawan', 'faktur', 'total', 'diskon', 'total_akhir'];
    protected $primaryKey = 'id';

    public function cabang(){
    	return $this->belongsTo('App\Kategorimodel', 'id_kategori', 'id');
    }
}

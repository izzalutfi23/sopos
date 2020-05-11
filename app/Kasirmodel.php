<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kasirmodel extends Model
{
    protected $table = 'penjualan';
    protected $fillable = ['id', 'id_cabang', 'id_karyawan', 'customer', 'faktur', 'total', 'diskon', 'total_akhir', 'bayar', 'kembalian', 'note', 'item'];
    protected $primaryKey = 'id';

    public function cabang(){
    	return $this->belongsTo('App\Cabangtokomodel', 'id_cabang', 'id');
    }

    public function karyawan(){
    	return $this->belongsTo('App\Karyawanmodel', 'id_karyawan', 'id');
    }

    public function tgl()
    {
    	\Carbon\Carbon::setLocale('id');
    	return \Carbon\Carbon::parse($this->attributes['created_at'])
    	->format('d/m/Y H:i:s');
    }
}

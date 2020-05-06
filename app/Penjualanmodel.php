<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penjualanmodel extends Model
{
    protected $table = 'penjualan';
    protected $fillable = ['id_customer', 'id_cabang', 'id_karyawan', 'faktur', 'total', 'diskon', 'total_akhir'];
    protected $primaryKey = 'id';

    public function cabang(){
    	return $this->belongsTo('App\Cabangtokomodel', 'id_cabang', 'id');
    }

    public function customer(){
    	return $this->belongsTo('App\Customermodel', 'id_customer', 'id');
    }

    public function karyawan(){
    	return $this->belongsTo('App\Karyawanmodel', 'id_karyawan', 'id');
    }

    public function tgl()
    {
    	\Carbon\Carbon::setLocale('id');
    	return \Carbon\Carbon::parse($this->attributes['created_at'])
    	->format('d M Y');
    }
}

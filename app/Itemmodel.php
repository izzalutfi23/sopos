<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Itemmodel extends Model
{
    protected $table = 'produk';
    protected $fillable = ['id_kategori', 'id_unit', 'kode_produk', 'nama_produk', 'harga', 'stok', 'diskon'];
    protected $primaryKey = 'id';

    public function kategori(){
    	return $this->belongsTo('App\Kategorimodel', 'id_kategori', 'id');
    }

    public function unit(){
    	return $this->belongsTo('App\Unitmodel', 'id_unit', 'id');
    }
}

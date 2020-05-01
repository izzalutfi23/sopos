<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cartmodel extends Model
{
    protected $table = "Cart";
    protected $fillable = ['id_produk', 'id_karyawan', 'qty'];
    protected $primaryKey = 'id';

    public function produk(){
    	return $this->belongsTo('App\Itemmodel', 'id_produk', 'id');
    }
    
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stockoutmodel extends Model
{
    protected $table = 'stockout';
    protected $fillable = ['id_produk', 'qty', 'detail'];
    protected $primaryKey = 'id';
    
    public function produk(){
    	return $this->belongsTo('App\Itemmodel', 'id_produk', 'id');
    }

    public function tgl()
    {
    	\Carbon\Carbon::setLocale('id');
    	return \Carbon\Carbon::parse($this->attributes['created_at'])
    	->format('d M Y');
    }
}

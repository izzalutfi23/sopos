<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stockinmodel extends Model
{
    protected $table = 'stokin';
    protected $fillable = ['id_produk', 'id_supplier', 'qty', 'foto'];
    protected $primaryKey = 'id';

    public function produk(){
    	return $this->belongsTo('App\Itemmodel', 'id_produk', 'id');
    }

    public function supplier(){
    	return $this->belongsTo('App\Suppliermodel', 'id_supplier', 'id');
    }

    public function tgl()
    {
    	\Carbon\Carbon::setLocale('id');
    	return \Carbon\Carbon::parse($this->attributes['created_at'])
    	->format('d M Y');
    }

    public function upd()
    {
    	return \Carbon\Carbon::parse($this->attributes['updated_at'])
    	->diffForHumans();
    }
}

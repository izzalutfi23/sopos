<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Suppliermodel extends Model
{
    protected $table = 'supplier';
    protected $fillable = ['nama_suplier', 'no_hp', 'alamat', 'deskripsi'];

    public function tgl()
    {
    	\Carbon\Carbon::setLocale('id');
    	return \Carbon\Carbon::parse($this->attributes['created_at'])
    	->format('Y-m-d');
    }

    public function upd()
    {
    	return \Carbon\Carbon::parse($this->attributes['updated_at'])
    	->diffForHumans();
    }
}

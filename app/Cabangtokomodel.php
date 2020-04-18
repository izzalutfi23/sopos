<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cabangtokomodel extends Model
{
    protected $table = 'cabang_toko';
    protected $fillable = ['nama_toko', 'alamat'];
    protected $primaryKey = 'id';

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

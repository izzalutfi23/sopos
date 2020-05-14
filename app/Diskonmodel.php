<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Diskonmodel extends Model
{
    protected $table = 'diskon';
    protected $fillable = ['id_produk', 'minimal', 'jml_diskon'];
    protected $primaryKey = 'id';

    public function produk(){
        return $this->belongsTo('App\Itemmodel', 'id_produk', 'id');
    }
}

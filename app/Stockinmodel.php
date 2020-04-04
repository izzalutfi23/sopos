<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stockinmodel extends Model
{
    protected $table = 'stokin';
    protected $fillable = ['id_produk', 'id_supplier', 'qty', 'foto'];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Suppliermodel extends Model
{
    protected $table = 'supplier';
    protected $fillable = ['nama_suplier', 'no_hp', 'alamat', 'deskripsi'];
}

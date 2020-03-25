<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategorimodel extends Model
{
    protected $table = 'kategori';
    protected $fillable = ['nama_kategori'];
}

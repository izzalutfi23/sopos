<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unitmodel extends Model
{
    protected $table = 'unit';
    protected $fillable = ['nama_unit'];
}

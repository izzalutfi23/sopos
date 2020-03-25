<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customermodel extends Model
{
    protected $table = 'customer';
    protected $fillable = ['nama_customer', 'j_kel', 'no_hp', 'alamat'];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Karyawanmodel extends Model
{
    protected $table = 'karyawan';
    protected $fillable = ['id_user', 'id_cabang', 'nama_karyawan', 'j_kel', 'no_hp', 'alamat', 'foto'];
    protected $promaryKey = 'id';

    public function pengguna(){
        return $this->belongsTo('App\User', 'id_user', 'id');
    }
    
    public function cabang(){
    	return $this->belongsTo('App\Cabangtokomodel', 'id_cabang', 'id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absensi extends Model
{
	protected $table = 'absen';
	protected $guarded = ['id','created_at', 'updated_at'];

	public function Karyawan(){
		return $this->belongsTo(Karyawan::class,'uid','uid');
	}

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absensi extends Model
{
    use HasFactory;
    protected $fillable = ['tanggal', 'pegawai_id'];
    public $timestamps = false;

    public function pegawai() {
        return $this->belongsTo(Pegawai::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'usia',
        'email',
        'pendidikan',
        'phone',
        'daftar_diklat_id',
        'ijazah',
        'kartu_keluarga',
        'ktp',
        'foto_3x3',
    ];

    public function diklat()
    {
        return $this->belongsTo(Diklat::class, 'daftar_diklat_id','id');
    }
}

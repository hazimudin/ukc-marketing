<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nasabah extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'no_hp',
        'titipan',
        'desa',
        'koordinat',
        'keterangan',
        'kelompok',
        'foto_selfy',
        'foto_ktp',
        'foto_rumah',
        'rating',
        'resort',
        'user_id',
    ];
}

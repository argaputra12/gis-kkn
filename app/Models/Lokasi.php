<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lokasi extends Model
{
    use HasFactory;

    protected $table = 'lokasis';

    protected $fillable = [
        'perangkat_desa_id',
        'alamat',
        'rt',
        'rw',
        'latitude',
        'longitude',
        'created_at',
        'updated_at'
    ];
}
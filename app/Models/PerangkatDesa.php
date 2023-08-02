<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PerangkatDesa extends Model
{
    use HasFactory;

    protected $table = 'perangkat_desas';

    protected $fillable = [
        'nama',
        'jabatan',
        'nip',
        'nomor_telepon',
        'foto',
        'status',
        'created_at',
        'updated_at'
    ];

    public function lokasi()
    {
        return $this->hasOne(Lokasi::class, 'perangkat_desa_id', 'id');
    }
}
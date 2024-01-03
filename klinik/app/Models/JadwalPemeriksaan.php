<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JadwalPemeriksaan extends Model
{
    use HasFactory;
    protected $table = 'jadwal_pemeriksaans';

    protected $primarykey = 'jadwal_pemeriksaan_id';

    protected $fillable = [
        'dokter_id',
        'pasien_id',
        'hari',
        'waktu',
        'status',
        
    ];
}

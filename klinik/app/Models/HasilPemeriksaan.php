<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HasilPemeriksaan extends Model
{
    use HasFactory;
    protected $table = 'hasil_pemeriksaans';

    protected $primarykey = 'hasil_pemeriksaan_id';

    protected $fillable = [
        'dokter_id',
        'pasien_id',
        'jenis_pemeriksaan',
        'diagnosa',
        'obat',
        
    ];
}

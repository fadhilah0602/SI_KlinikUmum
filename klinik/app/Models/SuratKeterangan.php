<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuratKeterangan extends Model
{
    use HasFactory;
    protected $table = 'surat_keterangans';

    protected $primarykey = 'surat_keterangan_id';

    protected $fillable = [
        'dokter_id',
        'pasien_id',
        'nama_klinik',
        'keterangan',
        'hari',
        'waktu',
        
    ];
}

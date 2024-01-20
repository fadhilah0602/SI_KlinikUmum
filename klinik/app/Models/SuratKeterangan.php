<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuratKeterangan extends Model
{
    use HasFactory;
    protected $table = 'surat_keterangans';

    protected $primaryKey = 'surat_keterangan_id';

    protected $fillable = [
        'dokter_id',
        'pasien_id',
        'nama_klinik',
        'keterangan',
        'waktu1',
        'waktu2',

    ];
    public function dokter()
    {
        return $this->belongsTo(Dokter::class, 'dokter_id');
    }
    public function pasien()
    {
        return $this->belongsTo(Pasien::class, 'pasien_id');
    }
}

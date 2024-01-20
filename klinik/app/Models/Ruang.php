<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ruang extends Model
{
    use HasFactory;
    protected $table = 'ruangs';

    protected $primaryKey = 'ruang_id';

    protected $fillable = [
        'dokter_id',
        'nama_ruangan',
        'jenis_ruangan',

    ];

    public function dokter()
    {
        return $this->belongsTo(Dokter::class, 'dokter_id');
    }
}

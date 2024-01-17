<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    use HasFactory;
    protected $table = 'dokters';

    protected $primaryKey = 'dokter_id';

    protected $fillable = [
        'user_id',
        'nip',
        'name',
        'tempat_lahir',
        'tgl_lahir',
        'gender',
        'alamat',
        'no_telp',
        'spesialis'

    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function ruang()
    {
        return $this->hasOne(Ruang::class);
    }
}

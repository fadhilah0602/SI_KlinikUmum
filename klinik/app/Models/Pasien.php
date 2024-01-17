<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory;
    protected $table = 'pasiens';

    protected $primaryKey = 'pasien_id';

    protected $fillable = [
        'user_id',
        'name',
        'tempat_lahir',
        'tgl_lahir',
        'gender',
        'alamat',
        'no_telp'

    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

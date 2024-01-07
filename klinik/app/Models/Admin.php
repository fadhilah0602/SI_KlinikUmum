<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;
    protected $table = 'admins';

    protected $primarykey = 'admin_id';

    protected $fillable = [
        'user_id',
        'name'
        
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

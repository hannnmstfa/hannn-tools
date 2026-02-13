<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QrGenerator extends Model
{
    protected $fillable = [
        'users_id',
        'token',
        'nama_qr',
        'path_qr',
    ];
}

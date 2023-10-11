<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QR_generate extends Model
{
    use HasFactory;
    protected $fillable = [
        'admin_id',
        'status_id'
    ];
    
}

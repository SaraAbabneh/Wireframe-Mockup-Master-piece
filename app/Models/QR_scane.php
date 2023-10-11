<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QR_scane extends Model
{
    use HasFactory;
    protected $fillable = [
        'qr_generate_id',
        'student_id'
    ];
    
}

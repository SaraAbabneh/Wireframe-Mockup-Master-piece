<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Source extends Model
{
    use HasFactory;
    protected $fillable = [
        'admin_id',
        'type_id',
        'title',
        'source_1',
        'source_2'
    ];
    
}

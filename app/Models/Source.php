<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Technology;

class Source extends Model
{
    use HasFactory;
    protected $fillable = [
        'admin_id',
        'technology_id',
        'title',
        'source_1',
        'source_2'
    ];


    public function source()
    {
        return $this->belongsTo(Technology::class, 'technology_id', 'id');
    }
    
}

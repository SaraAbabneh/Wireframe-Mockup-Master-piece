<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Source;

class Technology extends Model
{
    use HasFactory;
    protected $fillable = [
        'Technology',
        'start_at',
        'end_at',
    ];

    public function Technology()
{
    return $this->hasMany(Source::class, 'technology_id', 'id');
}

}



<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cohort extends Model
{
    protected $fillable = [
        'number',
        'start_date',
        'end_date',
        'unmber_students',
        'unmber_full_stack',
        'unmber_front_end',
        'unmber_back_end',
        'unmber_employment'
    ];

    public function students()
    {
        return $this->hasMany(Student::class);
    }
}

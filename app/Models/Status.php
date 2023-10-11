<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;
    protected $fillable = [
        'status'
    ];
    protected $table = 'statuses';

    public function attendanceForms()
    {
        return $this->hasMany(AttendanceForm::class, 'status_id', 'id');
    }
}

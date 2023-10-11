<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance_form extends Model
{
    use HasFactory;
    protected $fillable = [
        'status_id',
        'student_id',
        'request_date',
        'file',
        'comment'
    ];
    protected $table = 'attendance_forms';

    public function student()
    {
        return $this->belongsTo(Student::class, 'student_id', 'id');
    }

    public function status()
    {
        return $this->belongsTo(Status::class, 'status_id', 'id');
    }
    
}

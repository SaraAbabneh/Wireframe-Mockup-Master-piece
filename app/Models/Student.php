<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Student extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $guard = 'Student';
    protected $fillable = [
        'First_name',
        'Last_name',
        'Email',
        'Password',
        'Major',
        'Gender',
        'linkedin',
        'github',
        'img',
        'cohort_id',
        'Date_of_birth',
        'status',
    ];

    protected $table = 'students';

    public function attendanceForms()
    {
        return $this->hasMany(AttendanceForm::class, 'student_id', 'id');
    }

    public function studentTasks()
    {
        return $this->hasMany(StudentTask::class, 'cohort_id', 'id');
    }
    public function studentcohort()
    {
        return $this->belongsTo(Cohort::class, 'student_id', 'number');
    }
    
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student_task extends Model
{
    use HasFactory;
    protected $fillable = [
        'student_id',
        'task_id'
    ];

    protected $table = 'student_tasks';

    public function student()
    {
        return $this->belongsTo(Student::class, 'student_id', 'id');
    }

    public function task()
    {
        return $this->belongsTo(Task::class, 'task_id', 'id');
    }
    
}

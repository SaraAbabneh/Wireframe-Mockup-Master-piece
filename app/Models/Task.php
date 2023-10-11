<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    protected $fillable = [
        'admin_id',
        'type_id',
        'title',
        'description'
    ];

    protected $table = 'tasks';

    public function studentTasks()
    {
        return $this->hasMany(StudentTask::class, 'task_id', 'id');
    }

    public function answerTasks()
    {
        return $this->hasMany(AnswerTask::class, 'task_id', 'id');
    }
    
}

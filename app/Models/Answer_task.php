<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer_task extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'task_id',
        'status',
        'file',
        'comment'
    ];
    protected $table = 'answer_tasks';

    public function admin()
    {
        return $this->belongsTo(Admin::class, 'user_id', 'id');
    }

    public function task()
    {
        return $this->belongsTo(Task::class, 'task_id', 'id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;
    protected $fillable = [
        'First_name',
        'Last_name',
        'email',
        'password',
        'phone',
        'gender',
        'date_of_birth',
        'linkedin',
        'img',
        'role'
    ];
    public function answerTasks()
    {
        return $this->hasMany(AnswerTask::class, 'user_id', 'id');
    }
    
}

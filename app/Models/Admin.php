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
        'Email',
        'password',
        'Phone',
        'Gender',
        'Date_of_birth',
        'linkedin',
        'img',
        'Role',

    ];
    protected $table = 'admins';

    public function answerTasks()
    {
        return $this->hasMany(AnswerTask::class, 'user_id', 'id');
    }
}
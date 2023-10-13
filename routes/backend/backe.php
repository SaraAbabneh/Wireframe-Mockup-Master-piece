<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CohortController;
use App\Http\Controllers\AnswerTaskController;
use App\Http\Controllers\SourceController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\TechnologyController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\AdminController;



Route::resource('/dash/cohorts', CohortController::class);
Route::resource('/dash/answer-tasks', AnswerTaskController::class);
Route::resource('/dash/sources', SourceController::class);
Route::resource('/dash/types', TypeController::class);
Route::resource('/dash/tasks', TaskController::class);
Route::resource('/dash/Technology', TechnologyController::class);
Route::resource('/dash/Report', ReportController::class);
Route::resource('/dash/students', StudentController::class);
Route::resource('/dash/admins', AdminController::class);





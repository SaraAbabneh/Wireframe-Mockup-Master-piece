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
use App\Http\Controllers\LogAdminController;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::resource('/dash/cohorts', CohortController::class);
// Route::resource('/dash/answer-tasks', AnswerTaskController::class);
// Route::resource('/dash/sources', SourceController::class);
// Route::resource('/dash/types', TypeController::class);
// Route::resource('/dash/tasks', TaskController::class);
// Route::resource('/dash/Technology', TechnologyController::class);
// Route::resource('/dash/Report', ReportController::class);
// Route::resource('/dash/students', StudentController::class);
// Route::resource('/dash/admins', AdminController::class);



Route::match(['get', 'post'], 'admin-login', [LogAdminController::class, 'login'])->name('admin-login-page');
Route::match(['get', 'post'], 'admin-check', [LogAdminController::class, 'check'])->name('admin-check');


Route::prefix('Admin')->middleware('Admin')->group(function () {


    Route::match(['get', 'post'], 'admin-dashboard', [LogAdminController::class, 'dashboard'])->name('admin-dashboard');
    Route::match(['get', 'post'], 'admin-logout', [LogAdminController::class, 'logout'])->name('admin-logout');

    Route::resource('/dash/cohorts', CohortController::class)->names(['index' => 'cohorts.index']);
    Route::resource('/dash/cohorts', CohortController::class)->names(['sidebar' => 'cohorts.sidebar']);

    Route::resource('/dash/answer-tasks', AnswerTaskController::class)->names(['index' => 'answer.index']);

    Route::resource('/dash/sources', SourceController::class)->names(['index' => 'sources.index']);
    Route::resource('/dash/sources', SourceController::class)->names(['sidebar' => 'sources.sidebar']);

    Route::resource('/dash/types', TypeController::class)->names(['index' => 'types.index']);

    Route::resource('/dash/tasks', TaskController::class)->names(['index' => 'tasks.index']);
    Route::resource('/dash/tasks', TaskController::class)->names(['sidebar' => 'tasks.sidebar']);

    Route::resource('/dash/Technology', TechnologyController::class)->names(['index' => 'Technology.index']);

    Route::resource('/dash/Report', ReportController::class)->names(['index' => 'Report.index']);

    Route::resource('/dash/students', StudentController::class)->names(['index' => 'students.index']);
    Route::resource('/dash/students', StudentController::class)->names(['sidebar' => 'students.sidebar']);

    Route::resource('/dash/admins', AdminController::class)->names(['index' => 'admins.index']);



});



require __DIR__ . '/auth.php';
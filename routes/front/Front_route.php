<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ContactController;


Route::get('/', [PagesController::class, 'index'])->name('index');
Route::get('/About', [PagesController::class, 'about'])->name('about');
Route::get('Cohort/{id}', [PagesController::class, 'Cohort'])->name('Cohort');
Route::get('Portfolio', [PagesController::class, 'Portfolio'])->name('Portfolio');
Route::get('Contact/{email}', [PagesController::class, 'ContactEmail'])->name('Contact.email');
Route::get('Our graduate', [PagesController::class, 'Ourgraduate'])->name('Ourgraduate');
Route::get('Team', [PagesController::class, 'Team'])->name('Team');
Route::get('error', function () {
    return view('front.error');
})->name('error');



Route::get('/contact-us', [ContactController::class, 'showContact'])->name('show.contact');
Route::post('/contact-us', [ContactController::class, 'sendContact'])->name('contact.us.store');
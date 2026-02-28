<?php

use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Features;
use App\Http\Controllers\StudentController; // <-- 1. IMPORT THE CONTROL

Route::inertia('/', 'welcome', [
   'canRegister' => Features::enabled(Features::registration()),
   ]) ->name('home');
      Route::get('/api/student', [StudentController::class, 'getJson']);
      Route::get('/student', [StudentController::class, 'index']);

      Route::middleware(['auth', 'verified'])->group(function () {
         Route::inertia('dashboard', 'dashboard')->name('dashboard');
    });
    
    //require __DIR__.'/settings.php';





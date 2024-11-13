<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ChildController;
use App\Http\Controllers\GuardianController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;

use Inertia\Inertia;

Route::get('/children', [ChildController::class, 'show']);
Route::put('/children', [ChildController::class, 'update']);
Route::post('/children', [ChildController::class, 'store']);

Route::get('/guardian', [GuardianController::class, 'show']);
Route::put('/guardian', [GuardianController::class, 'update']);
Route::post('/guardian', [GuardianController::class, 'store']);

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

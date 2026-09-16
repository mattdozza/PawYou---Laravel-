<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Guest pages
Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/services', [PageController::class, 'services'])->name('services');
Route::get('/pets', [PageController::class, 'pets'])->name('pets.index');
Route::get('/pets/{id}', [PageController::class, 'petShow'])->name('pets.show');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::post('/contact', [PageController::class, 'contactSubmit'])->name('contact.submit');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Authenticated-only pages (beyond Breeze's default dashboard/profile)
    Route::get('/my-pets', [AccountController::class, 'myPets'])->name('account.pets');
    Route::get('/my-appointments', [AccountController::class, 'appointments'])->name('account.appointments');
    Route::get('/favorites', [AccountController::class, 'favorites'])->name('account.favorites');
});

require __DIR__.'/auth.php';

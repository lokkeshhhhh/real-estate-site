<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\InquiryController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/portfolio', [PageController::class, 'portfolio'])->name('portfolio');
Route::get('/process', [PageController::class, 'process'])->name('process');
Route::get('/legalities', [PageController::class, 'legalities'])->name('legalities');
Route::get('/locations', [PageController::class, 'locations'])->name('locations');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');

// Inquiry form submission
Route::post('/inquire', [InquiryController::class, 'store'])
    ->middleware(['throttle:5,10'])
    ->name('inquire.store');

// Dashboard (protected)
Route::middleware(['auth'])->prefix('dashboard')->group(function () {
    Route::get('/thisisnestorasdashboardwhichisnotintednedtdobedesclosed', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/inquiries/{id}', [DashboardController::class, 'show'])->name('dashboard.inquiry.show');
    Route::delete('/inquiries/{id}', [DashboardController::class, 'destroy'])->name('dashboard.inquiry.destroy');
    Route::patch('/inquiries/{id}/status', [DashboardController::class, 'updateStatus'])->name('dashboard.inquiry.status');
});

require __DIR__.'/auth.php';

<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WirausahaController;
use App\Http\Controllers\PekerjaanController;
use App\Http\Controllers\LanjutStudiController;
use App\Http\Controllers\ManageStudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', [LandingController::class, 'index'])->name('home');
Route::get('/statistik-detail', [LandingController::class, 'detailStatistik'])->name('statistik-detail');
Route::get('/api/statistics', [LandingController::class, 'getStatistics'])->name('api.statistics'); 
// Route::get('/statistik-detail/api', [LandingController::class, 'getStatistics'])->name('statistik-detail');

// In routes/web.php or routes/api.php (depending on how you want to set up the route)
// or Route::get('/api/statistics', [LandingController::class, 'getStatistics']);


// Breeze Routing
// Route::get('/dashboard', function () {
//     return view('user.dashboard_user');
// })->middleware(['auth', 'verified'])->name('user.dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/user/dashboard', [UserController::class, 'index'])->name('user.dashboard');
    Route::get('/user/forms', [UserController::class, 'forms'])->name('user.forms');
    Route::get('/user/transcript', [UserController::class, 'transcript'])->name('user.transcript');

    Route::resource('wirausaha', WirausahaController::class);
    Route::resource('pekerjaan', PekerjaanController::class);
    Route::resource('lanjut_studi', LanjutStudiController::class);

    
    Route::get('/admin/dashboard',[AdminController::class,'index'])->name('admin.dashboard');
    // Route::get('/admin/dashboard',[AdminController::class,'index'])->name('admin.dashboard');
    Route::get('/admin/forms', [AdminController::class, 'viewForm'])->name('admin.form');
    // Route::get('/')


    Route::get('/admin/students', [ManageStudentController::class, 'index'])->name('admin.student');
    Route::get('/admin/students/{id}', [ManageStudentController::class, 'show'])->name('admin.student.show');

});

require __DIR__.'/auth.php';


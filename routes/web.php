<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ExperienciaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\EducacionController;
use App\Http\Controllers\Admin\HabilidadController;



Route::get('/', [HomeController::class, 'index']);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {

    Route::resource(
        'admin/experiencias',
        ExperienciaController::class
    );

    Route::resource(
        'admin/educaciones',
        EducacionController::class
    );

    Route::resource(
        'admin/habilidades',
        HabilidadController::class
        
    );

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
});

require __DIR__.'/auth.php';

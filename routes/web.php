<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\http\Controllers\MainController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [MainController :: class, 'index'])
    -> name('project.index');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // PROJECT
    Route::get('/project/create', [MainController :: class, 'create'])
        ->name('project.create');
    Route::post('/project', [MainController :: class, 'store'])
        ->name('project.store');
    Route :: delete('/project/{id}', [MainController :: class, 'destroy'])
        -> name('project.delete');
    Route::get('/project/{id}/edit', [MainController :: class, 'edit'])
        ->name('project.edit');
    Route :: put('/project/{id}/edit', [MainController :: class, 'update'])
        -> name('project.update');

});



Route :: get('/project/{id}', [MainController :: class, 'show'])
    -> name('project.show');

require __DIR__.'/auth.php';

<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Activities;

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

Route::get('/', function () {
    return view('auth/login');
});

Route::get('/dashboard', [Activities::class, 'view'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/activities/{id}/update',[Activities::class, 'mark'])->name('activities.mark'); //update product
Route::get('/activities/create',[Activities::class, 'create'])->name('activities.create'); //open create product form
Route::post('/store', [Activities::class, 'store'])->name('activities.store');
Route::get('/activities/{activity}/remove',[Activities::class, 'remove'])->name('activities.remove'); //update product


require __DIR__.'/auth.php';

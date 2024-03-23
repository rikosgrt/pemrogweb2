<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DosenController;
use Illuminate\Support\Facades\Route;
use App\Models\Dosen;

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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::controller(App\Http\controllers\DosenController::class)->group(function () {

    Route::get('/dosen', 'index');
    Route::get('/add-dosen', 'create');
    Route::post('/add-dosen', 'store');
    Route::get('/edit-dosen/{dosen_id}', 'edit');
    Route::put('/update-dosen/{dosen_id}', 'update');
    Route::delete('/delete-dosen/{dosen_id}', 'destroy');





});

<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware(['auth', 'admin'])->group(function(){
    Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index']);
    Route::patch('/admin', [App\Http\Controllers\AdminController::class, 'update']);
    Route::delete('/admin', [App\Http\Controllers\AdminController::class, 'destroy']);
});

Route::middleware(['auth', 'registered'])->group(function(){
    Route::get('/register/edit', [App\Http\Controllers\RegisterController::class, 'edit']);
    Route::patch('/register/edit', [App\Http\Controllers\RegisterController::class, 'update']);
});

Route::middleware(['auth'])->group(function(){
    Route::get('/', [App\Http\Controllers\MainController::class, 'index']);
    Route::get('/logout', [\App\Http\Controllers\MainController::class, 'logout']);

    Route::get('/profile', [App\Http\Controllers\UsersController::class, 'show']);
    Route::get('/profile/edit', [App\Http\Controllers\UsersController::class, 'edit']);
    Route::patch('/profile/edit', [App\Http\Controllers\UsersController::class, 'update']);

    Route::get('/pets', [App\Http\Controllers\AnimalsController::class, 'index']);
    Route::get('/pets/create', [App\Http\Controllers\AnimalsController::class, 'create']);
    Route::post('/pets/create', [App\Http\Controllers\AnimalsController::class, 'store']);
    Route::get('/pets/{id}', [App\Http\Controllers\AnimalsController::class, 'show']);

    Route::get('/sitters', [App\Http\Controllers\SittersController::class, 'index']);
    Route::get('/sitters/{id}', [App\Http\Controllers\SittersController::class, 'show']);

    Route::get('/requests', [App\Http\Controllers\RequestsController::class, 'index']);
    Route::patch('/requests', [App\Http\Controllers\RequestsController::class, 'update']);
    Route::delete('/requests', [App\Http\Controllers\RequestsController::class, 'destroy']);
    Route::post('/requests/create', [App\Http\Controllers\RequestsController::class, 'store']);
    Route::get('/requests/{id}/create', [App\Http\Controllers\RequestsController::class, 'create']);

    Route::post('/reviews/create', [App\Http\Controllers\ReviewsController::class, 'store']);
    Route::get('/reviews/{id}/create', [App\Http\Controllers\ReviewsController::class, 'create']);

    Route::post('/images/create', [App\Http\Controllers\ImagesController::class, 'store']);
    Route::delete('/images', [App\Http\Controllers\ImagesController::class, 'destroy']);
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

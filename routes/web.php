<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PetController;

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

Route::get('/', [PetController::class, 'index'])->name('pets.index'); // Home page
Route::get('/pets/create', [PetController::class, 'create'])->name('pets.create'); // Form for creating an object
Route::post('/pets', [PetController::class, 'store'])->name('pets.store'); // Saving a new object
Route::get('/pets/{id}', [PetController::class, 'show'])->name('pets.show'); // Displaying an object
Route::get('/pets/{id}/edit', [PetController::class, 'edit'])->name('pets.edit'); // Edit form
Route::put('/pets/{id}', [PetController::class, 'update'])->name('pets.update'); // Updating an object
Route::delete('/pets/{id}', [PetController::class, 'destroy'])->name('pets.destroy'); // Deleting an object

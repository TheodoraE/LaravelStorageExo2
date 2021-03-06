<?php

use App\Http\Controllers\AnimalController;
use App\Http\Controllers\ImageController;
use App\Models\Animal;
use App\Models\Image;
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

// Animals
Route::get('/', function () {
    $animals = Animal::all();
    return view('welcome', compact('animals'));
});

Route::get('/animals-download/{id}', [AnimalController::class, 'download']);
Route::resource('animals', AnimalController::class);

// Images
Route::resource('images', ImageController::class);
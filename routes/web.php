<?php

use App\Http\Controllers\ImageController;
use App\Models\CropImage;
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

Route::get('/', function () {
    return view('welcome');
});

// Compress

Route::get('/resize-image', [ImageController::class, 'resizeImage']);
Route::post('/resize-image', [ImageController::class, 'resizeImageSubmit'])->name('image.resize');


<?php

use App\Http\Controllers\CamiriWikiController;
use App\Http\Controllers\CategoryServiceController;
use App\Http\Controllers\TourismPlace;
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
    return view('inicio');
});

Route::resource('/info-camiri', CamiriWikiController::class)->names('info-camiri');

Route::resource('/categorias-servicios', CategoryServiceController::class)->names('categorias-servicios');

Route::resource('/Tags', TagController::class)->names('Tags');

Route::resource('/categorias-turismo', CategoryTourismController::class)->names('categorias-turismo');

Route::resource('/atractivos-turisticos', TourismPlace::class)->names('atractivos-turisticos');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

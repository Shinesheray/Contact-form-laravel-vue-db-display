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

Route::get('/', function () {
    return view('welcome');
});

// api route to get contact details in DB table contacts
// include functionality to create and delete conacts from the DB
Route::get('/contacts', [ContactController::class, 'index']);
Route::prefix('/contact')->group(function () {
        Route::post('/store', [ContactController::class, 'store']);
        Route::delete('/{id}', [ContactController::class, 'destroy']);
    }
);
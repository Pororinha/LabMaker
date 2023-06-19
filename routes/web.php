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

use App\Http\Controllers\EventController;

Route::get('/', [EventController::class, 'index']);
Route::get('/Events/Create', [EventController::class, 'Create'])->middleware('auth');
Route::get('/Events/{id}', [EventController::class, 'Show']);
Route::post('/events', [EventController::class, 'store']);
Route::delete('/Events/{id}', [EventController::class, 'destroy'])->middleware('auth');
Route::get('/Events/edit/{id}', [EventController::class, 'edit'])->middleware('auth');
Route::put('/Events/update/{id}', [EventController::class, 'update'])->middleware('auth');

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/dashboard',[EventController::class,'dashboard'])->middleware('auth');

<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


// GET route
Route::get('/hello', function () {
	return '"Hello there! - Obi Wan Kenobi"';
});


// POST route
Route::post('/create', function () {
	return 'Create your dream into reality with goals...';
});

// PUT route
Route::put('/update/{id}', function ($id) {
	return "Resource with ID $id updated!";
});

// PATCH route
Route::patch('/modify/{id}', function ($id) {
	return "Resource with ID $id modified!";
});

// DELETE route
Route::delete('/delete/{id}', function ($id) {
	return "Resource with ID $id deleted!";
});
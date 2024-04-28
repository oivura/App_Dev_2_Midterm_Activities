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

use App\Http\Middleware\TokenCheckerMiddleware;

// GET route
Route::get('/get', function () {
	return response()->json(['message' => 'GET request handled.']);
})->middleware(TokenCheckerMiddleware::class);

// POST route
Route::post('/post', function () {
	return response()->json(['message' => 'POST request handled.']);
})->middleware(TokenCheckerMiddleware::class);

// PUT route
Route::put('/put', function () {
	return response()->json(['message' => 'PUT request handled.']);
})->middleware(TokenCheckerMiddleware::class);

// PATCH route
Route::patch('/patch', function () {
	return response()->json(['message' => 'PATCH request handled']);
})->middleware(TokenCheckerMiddleware::class);


// DELETE route
Route::delete('/delete', function () {
	return respone()->json(['message' => 'delete request handled. ']);
})->middleware(TokenCheckerMiddleware::class);


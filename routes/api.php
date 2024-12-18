<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BooksController;


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/books', [BooksController::class, 'store']);
Route::get('/test', function () {
    return '伺服器運作正常';
});

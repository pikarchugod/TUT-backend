<?php
//require_once __DIR__ . '/api.php';

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BooksController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/books', [BooksController::class, 'index']);
// 取得特定 ID 的書籍
Route::get('/books/{id}', [BooksController::class, 'show']);

// 新增書籍
Route::post('/books', [BooksController::class, 'store']);

// 更新特定 ID 的書籍
Route::put('/books/{id}', [BooksController::class, 'update']);

// 刪除特定 ID 的書籍
Route::delete('/books/{id}', [BooksController::class, 'destroy']);
Route::post('/books', [BooksController::class, 'store']);

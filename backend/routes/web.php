<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;


// 一覧表示
Route::get('/', [BookController::class, 'index'])->name('books.index');
// Route::get('/', 'BookController@index')->name('books.index');

// 新規作成処理
Route::post('/', [BookController::class, 'create']);

// 詳細表示
Route::get('/books/{id}', [BookController::class, 'detail'])->name('books.detail');

// 更新処理
Route::post('/books/update', [BookController::class, 'update'])->name('books.update');

// 新規作成画面
Route::get('/books/create', [BookController::class, 'create'])->name('books.create');
// Route::get('/books/create', [BookController::class, 'create']);

// 削除処理
Route::post('/books/{id}/delete', [BookController::class, 'delete'])->name('books.delete');

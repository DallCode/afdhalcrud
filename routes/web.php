<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\AddBookController;
use App\Http\Controllers\EditBookController;

Route::get('/', function () {

    return view('index');
});

Route::get('home', [IndexController::class, 'index'])->name('home');

Route::get('addbook', [AddBookController::class, 'index'])->name('addbook.index');
Route::post('/addbook', [AddBookController::class, 'store'])->name('addbook.store');

Route::get('editbook', [EditBookController::class, 'index'])->name('editbook.index');
Route::put('/book/update/{id}', [EditBookController::class, 'update'])->name('book.update');
Route::delete('/book/{book}', [EditBookController::class, 'destroy'])->name('editbook.destroy');

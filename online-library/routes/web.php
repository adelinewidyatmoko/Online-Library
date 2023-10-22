<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\UserController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|

*/




// Route::get('/profile', [UserController::class,'index']);
Route::get('/books' ,[BookController::class,'indexs'])->name('book.index'); //ohhh jadi apa bedanya /book sama book.index itu ook.index route antar file gitu buakan ke web kalau mau pake di web pake yg /books.

//deklrasiin route CRUD di book controller methodnya 
Route::get('/books/create',[BookController::class, 'create'])->name('book.create');
Route::post('/book/store',[BookController::class, 'store'])->name('book.store');
Route::get('/books/{id}',[BookController:: class,'show'])->name('book.show');
/*setelah sudah dr controller pasang command untuk ngeview , harus ada route dulu contoh nya kayak diatas */
//Route::get('/books',[BookController::class,'indexs']);
//part using eloguent 
Route::get('/eloquent',[BookController::class, 'indexs']);

//show route belum .
Route::get('/books/{id}/edit',[BookController::class, 'edit'])->name('book.edit');
Route::put('/books/{book}',[BookController::class, 'update'])->name('book.update');
Route::delete('/books/{book}',[BookController::class, 'destroy'])->name('book.destroy');




<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\LandingController;
use App\Models\Book;
use Illuminate\Support\Facades\Route;

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
Route::get('/', LandingController::class)->name('landing');

Route::resource('books', BookController::class);

Route::get('/books.show/{book:isbn}', function (Book $book){
    return $book;
});

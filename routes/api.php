
<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controllerBook;

Route::get('/books', [controllerBook::class, 'index']);
Route::get('/books/{book}', [controllerBook::class, 'show']);
Route::post('/books', [controllerBook::class, 'store']);


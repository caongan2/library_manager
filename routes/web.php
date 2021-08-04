<?php

use App\Http\Controllers\Bookcontroller;
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

Route::get('/', function () {
    return view('welcome');
});
Route::prefix('book')->group(function (){

    Route::get('/list', [Bookcontroller::class, 'index'])->name('book.list');
    Route::get('/add', [Bookcontroller::class, 'create'])->name('book.add');
    Route::post('/create', [Bookcontroller::class, 'store'])->name('book.create');

});

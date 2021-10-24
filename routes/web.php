<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController ; 
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

Route::resource('book', BookController::class);
Route::middleware(['auth'])->group(function () {
    Route::get('fou' ,'App\Http\Controllers\TestController@fou') ; 
    Route::get('rou' ,'App\Http\Controllers\TestController@rou') ;    
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

<?php
use App\Http\Middleware\CheckAge;

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


Route::get('/check', function () {
    return redirect('adultes');
})->middleware(CheckAge::class);

Route::get('/enfants', function(){
    return view('enfants');
});

Route::get('/adultes', function () {
    return view('adultes');
});
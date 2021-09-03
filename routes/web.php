<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\AdminController;
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
Route::get('/table', function () {
    return view('table');
});
Route::get('/master', function () {
    return view('master');
});
Route::get('/maps', function () {
    return view('maps');
});
Route::get('/new', function () {
    return view('new');
});
// Route::get('/master','AdminController@master');
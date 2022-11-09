<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExampleController;

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

Route::get('examplecreate',[ExampleController::class,'create']);
Route::get('examples',[ExampleController::class,'show']);
Route::get('example_delete/{id}',[ExampleController::class,'destroy']);
Route::post('example_submit',[ExampleController::class,'store']);
Route::post('example_update/{id}',[ExampleController::class,'update'])->name('example.update'); // named routes
Route::get('example_edit/{id}',[ExampleController::class,'edit']);


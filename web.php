<?php

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

Route::get('/test', function () {
    return view('test');
    
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user/{id}', function (Request $request, $id) {
    return 'User '.$id;
});

Route::get('/test3', function () {
     return 'welcome test vvvvv';
});
<!DOCTYPE html>



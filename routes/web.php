<?php

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

use Illuminate\Support\Str;

Route::get('/', function () {

    // dd(Str::partNumber('12345678899'));

    return Response::errorJson('A huge error occurred! BOOM!');

    return view('welcome');
});

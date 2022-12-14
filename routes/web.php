<?php

use Illuminate\Support\Facades\Route;
use LDAP\Result;

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
    return '<h1>welcome</h1>';
});

Route::get('/calcs', function () {
    return '<h1>計算アプリ</h1>';
});

Route::get('/calcs/{num1}/{operator}/{num2}', [App\Http\Controllers\calcs::class, 'calcs']);

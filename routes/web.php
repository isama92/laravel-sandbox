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

Route::get('/', function () {
    return view('welcome');
});

Route::get('benchmark', function() {
    \Illuminate\Support\Benchmark::dd([function() {
        for($i = 0; $i < 1000000; $i++) {
            echo $i * 2;
        }
    }, function() {
        foreach(range(0, 999999) as $i) {
            echo $i * 2;
        }
    }]);
});

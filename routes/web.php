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
    return view('home');
});

Route::get('/demo/{path}', function($demoName){
    $selectDemo = resource_path("demos/$demoName.html");
    $demoContent = file_get_contents($selectDemo);
    return view("demo", [
        'insert' => $demoContent
    ]);
});
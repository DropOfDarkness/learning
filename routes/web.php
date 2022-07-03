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

Route::get('/', function () { //on get request for 'URL/' return the home view
    return view('home');
});

Route::get('/demo/{path}', function($demoName){ //on request for "URL/demo/####", start function and pass "####" through as "$demoName"
    $selectDemo = resource_path("demos/$demoName.html"); //create variable "$selectDemo" and set it to "resources/demos/'####'.html"
    $demoContent = file_get_contents($selectDemo); //create variable "$demoContent" and gets the content of the file "resources/demos/'####'.html"
    return view("demo", [ //return the demo view to the browser and passes the "$demoContent" variable through as "insert"
        'insert' => $demoContent
    ]);
});
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
   return 1;
});

Route::get('/test', function () {
    $users = [
        ['id' => 1, 'name' => 'ahmed'],
        ['id' => 2, 'name' => 'mohamed'],
    ];
    return view('test',[
        'users' => $users,
        'greeting' => 'Hello this is some var from web.php',
    ]);
});

Route::get('/hello', function(){
    
});

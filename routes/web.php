<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use Laravel\Socialite\Facades\Socialite;

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

Route::get('/posts',[PostController::class, 'index'])->name('posts.index')->middleware(['auth']);
Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create')->middleware(['auth', 'myAdmingGate']);
Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show')->middleware(['auth']);
Route::post('/posts',[PostController::class, 'store'])->name('posts.store')->middleware(['auth']);
Route::get('/hello', function(){
    
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/auth/redirect', function () {
   return Socialite::driver('github')->redirect();
})->name('github.login');

Route::get('/auth/callback', function () {

   $user = Socialite::driver('github')->user();

   //write some logic to log me in my system
dd($user);
   // $user->token
});


Route::get('get-all-github-issues',function(){
   //some logic to make request to GET /issues on github using the token
});

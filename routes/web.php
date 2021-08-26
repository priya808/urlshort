<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\urlController;
use App\Http\Controllers\UsersAuth;

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

Route::get('/urlshort', function () {
    return view('urlshort');
});

// Route::get('/short', function()
// {
// 	return view('urlshort');
// });
// Route::post('/short', 'urlController@index')->name('generate.shorten.link.post');


// Route::get('/short', 'urlController@index');

// Route::post('/short', 'urlController@store')->name('generate.shorten.link.post');
   
// Route::get('{code}', 'urlController@shortenLink')->name('shorten.link');



Route::get('/test', 'App\Http\Controllers\UsersAuth@index');



Route::get('/register',function(){
	return view('register');
});


Route::get('/index',function(){
	return view('index');
});




// Route::get('/users', [UserController::class, 'index']);
// or
// Route::get('/users', 'App\Http\Controllers\UserController@index');




Route::get('/short',function()
	{
		return view('urlshort'); 
	});
Route::post('/short',[urlController::class,'short']);
Route::get('/short/{link}',[urlController::class,'shortlink']);

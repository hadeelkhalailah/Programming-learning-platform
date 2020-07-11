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


Route::get('/post','c_post@showpost');
Route::get('/addpost','c_post@addpost');
Route::post('/insertpost','c_post@insertpost');
Route::get('/editpost/{id}','c_post@editpost');
Route::post('/updatepost/{id}','c_post@updatepost');
Route::post('/addcomment/{id}','c_comment@addcomment');
Route::get('/comments/{id}','c_comment@showcomment');
Route::get('/deletepost/{id}','c_post@deletepost');




Route::get('/logout', function () {
    Auth::logout();
    return redirect('/post');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/profile', function(){
    return view('profile');
});
Route::get('/projects' , function(){
    return view("projects.index");
});
Route::get('/projects/{id}', function($id){
    return view("projects.show",compact('id'));
   // return $id;
});
Route::get('/news/{slug}', function($slug){
    return view('news.show', compact('slug'));
});
Route::get('/news/bitcoin-news', function(){
    return view('news.bitcoin-news');
});

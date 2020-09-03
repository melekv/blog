<?php

use Illuminate\Support\Facades\Route;
use App\Posts;

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

Route::get('/', 'PostController@index')->name('/home');

Route::get('/post/new', 'PostController@create')->middleware('auth');

Route::get('/post/{id}', 'PostController@show');

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/contact', function () {
    return view('pages.contact');
});

Route::post('post/create', 'PostController@store');

Auth::routes(['register' => false]);

Route::get('/logout', function() {
    Auth::logout();
    return redirect('/');
});

Route::get('/admin', function() {
    $posts = Posts::all();
    return view('pages.admin', ['posts' => $posts]);
})->middleware('auth');

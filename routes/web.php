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

Route::get('/', function () {
  $forum = App\Forum::orderBy('id','desc')->paginate(10);
    return view('welcome')->withForum($forum);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', 'ContactController@index');

Route::get('/profile', 'ProfileController@profile');

Route::resource('/forum','ForumController');

Route::resource('/tags','TagController');


Route::resource('/comment','CommentController');

Route::post('comment/create/{forum}','CommentController@createComment')->name('createComment.store');

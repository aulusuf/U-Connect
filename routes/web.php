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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', function () {
    return view('index.welcome');
});

Route::group(['middleware' => 'auth'], function(){
    Route::get('/home', 'HomeController@index')->name('home');

    Route::get('/timeline', 'TimelineController@index')->name('timeline');

    Route::get('/profile/{id}', 'ProfileController@index')->name('profile');
    
    Route::post('/picture', 'ProfileController@changePic')->name('changePic');
    Route::post('/cover', 'ProfileController@changeCov')->name('changeCov');

    Route::post('/new-post', 'PostController@store')->name('store.post');
    Route::get('/update-post', 'PostController@update')->name('update.post');
    Route::post('/delete-post', 'PostController@delete')->name('delete.post');

    Route::post('/{id}/new-comment','CommentController@store')->name('store.comment');
    Route::post('/{id}/edit-comment','CommentController@edit')->name('edit.comment');
    Route::post('/{id}/update-comment','CommentController@update')->name('update.comment');
    Route::delete('/delete-comment/{id}','CommentController@delete')->name('delete.comment');

    Route::get('/searchFriend','FriendshipController@searchFriend')->name('searchFriend');

    Route::get('/{id}/follow','FriendshipController@follow')->name('follow');
    Route::get('/{id}/unfollow','FriendshipController@unfollow')->name('unfollow');

});

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
    
    Route::post('/changepic', 'ProfileController@changePic')->name('changePic');
    Route::post('/changecov', 'ProfileController@changeCov')->name('changeCov');

    Route::post('/post', 'PostController@makePost')->name('makePost');

    Route::get('/searchFriend','FriendshipController@searchFriend')->name('searchFriend');
    // Route::get('/addFriend/{id}','FriendshipController@sendReqFriend')->name('addFriend');
    Route::get('/request','FriendshipController@request_waiting')->name('reqWaiting');
    Route::get('/accept/{id}','FriendshipController@acceptFriend')->name('acceptFriend');

    Route::get('/follow/{id}','FriendshipController@follow')->name('follow_request');
    Route::get('/unfollow/{id}','FriendshipController@unfollow')->name('unfollow_request');

    Route::post('/{id}/comment','CommentController@makeComment')->name('makeComment');

    // new route
    // Route::get('/{id}', 'ProfileController@index')->name('profile');
    // Route::get('/{requested_id}/add', 'ProfileController@add')->name('addFriend');
    // Route::get('/{friendship_id}/cancel', 'ProfileController@cancel')->name('cancelAddFriend');


});

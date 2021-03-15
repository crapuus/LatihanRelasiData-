<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Topic;


Route::get('/', function (Request $request) {
    return view('welcome');
    // $topic = new Topic;
    // $topic->title = 'topik keempat';
    // $topic->user()->associate($request->user());

    // $topic->save();

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/topics', 'TopicController@index');
Route::get('/topics/{topic}', 'TopicController@show')->name('topics.show');
Route::get('/user/topics', 'UserTopicController@index')->name('user.topics');


Route::get('/user', 'UserController@index')->name('user.index');
Route::get('/user/{id}/topic', 'UserController@show')->name('user.show');











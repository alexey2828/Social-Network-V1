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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/main', function () {
    return view('main');
});
Route::get('/main', 'PostController@PostOutput');

Route::get('user/{id}', 'UserController@UserShow')->name('user_show');

Route::get('/create/post', function () {
    return view('create-post');
});

Route::post('/create/post/submit', 'PostController@UploadPost')->name('post-form');

Route::get('/upload/post', ['as' => 'upload_post', 'uses' => 'PostController@GetFormPost']);
Route::post('/upload/post/submit',['as' => 'upload_posts','uses' => 'PostController@UploadPostMain']);

Route::get('/upload/comment', ['as' => 'upload_comments', 'uses' => 'CommentsController@GetFormComment']);
Route::post('/upload/comment/submit',['as' => 'upload_comment','uses' => 'CommentsController@UploadComment']);

Route::get('post/{post_id}', 'PostController@Show')->name('posts_show');

Route::get('/settings', function () {
    return view('settings');
});

Route::get('/upload/avatar', ['as' => 'upload_avatar', 'uses' => 'SettingsController@getFormAvatr']);
Route::post('/upload/avatar/submit',['as' => 'upload_avatars','uses' => 'SettingsController@uploadAvatar']);

Route::get('/upload/header',['as' => 'upload_form_header', 'uses' => 'SettingsController@GetFormHeader']);
Route::post('/upload/header/submit',['as' => 'upload_file_header','uses' => 'SettingsController@UploadHeader']);

Route::get('/upload/likes',['as' => '/uplikes', 'uses' => 'SettingsController@GetFormlike']);
Route::post('/upload/like',['as' => '/uplike','uses' => 'PostController@like']);


Route::get('ajax-form', 'HomeController@ajax_form');

Route::post('ajax', 'HomeController@ajax');

Route::get('/ajax-form', function () {
	$posts = DB::table('posts')->get()->reverse()
		->take(5);
    return view('ajax-form', compact('posts'));
});

Route::get('ajaxtest', 'HomeController@ajaxtest2');

Route::get('/contentajaxtest', function () {
    return view('contentajaxtest');
});
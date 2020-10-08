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


Auth::routes();

Route::get('/', 'HomeController@home')->name('home');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/portfolio', 'HomeController@portfolio')->name('portfolio');
Route::get('/team', 'HomeController@team')->name('team');
Route::get('/about', 'HomeController@about')->name('about');
Route::get('/blog', 'HomeController@blog')->name('blog');
Route::get('/contact', 'HomeController@contact')->name('contact');
Route::get('/post/{post}', 'PostController@show')->name('post_show');

Route::get('/webinar', 'HomeController@webinar')->name('webinar');
Route::post('/payment', 'PaymentController@Payment')->name('payment');
Route::get('/verify', 'PaymentController@verify')->name('verify');



Route::group(['prefix' => 'admin','middleware' => 'auth'], function () {
    Route::Post('/upload','UploadController@upload')->name('upload');
    Route::get('/', 'AdminController@index');
});

Route::group(['prefix' => 'admin/post','middleware' => 'auth'], function () {
    Route::get('/', 'PostController@index')->name('post_index');
    Route::get('/table', 'PostController@table')->name('post_table');
    Route::get('/create', 'PostController@create')->name('post_create');
    Route::get('/destroy{post}', 'PostController@destroy')->name('post_destroy');
    Route::get('/edit{post}', 'PostController@edit')->name('post_edit');
    Route::post('/store', 'PostController@store')->name('post_store');
    Route::post('/update{post}', 'PostController@update')->name('post_update');
});
Route::group(['prefix' => 'admin/category','middleware' => 'auth'], function () {
    Route::get('/', 'CategoryController@index')->name('category_index');
    Route::get('/table', 'CategoryController@table')->name('category_table');
    Route::get('/create', 'CategoryController@create')->name('category_create');
    Route::get('/destroy{category}', 'CategoryController@destroy')->name('category_destroy');
    Route::get('/edit{category}', 'CategoryController@edit')->name('category_edit');
    Route::get('/store', 'CategoryController@store')->name('category_store');
    Route::get('/update', 'CategoryController@update')->name('category_update');
});
Route::group(['prefix' => 'admin/work','middleware' => 'auth'], function () {
    Route::get('/', 'WorkController@index')->name('work_index');
    Route::get('/table', 'WorkController@table')->name('work_table');
    Route::get('/create', 'WorkController@create')->name('work_create');
    Route::get('/destroy{work}', 'WorkController@destroy')->name('work_destroy');
    Route::get('/edit{work}', 'WorkController@edit')->name('work_edit');
    Route::get('/store', 'WorkController@store')->name('work_store');
    Route::get('/update{work}', 'WorkController@update')->name('work_update');
});
Route::group(['prefix' => 'admin/team','middleware' => 'auth'], function () {
    Route::get('/', 'TeammateController@index')->name('team_index');
    Route::get('/table', 'TeammateController@table')->name('team_table');
    Route::get('/create', 'TeammateController@create')->name('team_create');
    Route::get('/destroy{teammate}', 'TeammateController@destroy')->name('team_destroy');
    Route::get('/edit{teammate}', 'TeammateController@edit')->name('team_edit');
    Route::get('/store', 'TeammateController@store')->name('team_store');
    Route::get('/update{teammate}', 'TeammateController@update')->name('team_update');
});
Route::group(['prefix' => 'admin/contact','middleware' => 'auth'], function () {
    Route::get('/', 'ContactController@index')->name('contact_index');
    Route::get('/update', 'ContactController@update')->name('contact_update');
});
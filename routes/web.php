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
    return view('roocket');
})->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::group(['prefix'=>'users','namespace'=>'users'], function()
{
    Route::get('/','Userscontrollers@index')->name('admin.users');
    Route::post('store', 'UsersControllers@store')->name('admin.users.store');
    Route::get('create', 'UsersControllers@create')->name('admin.users.create');
    Route::get('delete/{user_id}', 'UsersControllers@destroy')->name('admin.users.delete');
    Route::get('edit/{user_id}', 'UsersControllers@edit')->name('admin.users.edit');
    Route::post('update/{user_id}', 'UsersControllers@update')->name('admin.users.update');
});
Route::group(['prefix' => 'posts'], function () {

    Route::get('/', 'PostsController@index')->name('admin.posts');
    Route::get('create', 'PostsController@create')->name('admin.posts.create');
    Route::post('store', 'PostsController@store')->name('admin.posts.store');
    Route::get('delete/{post_id}', 'PostsController@delete')->name('admin.posts.delete');
    Route::get('edit/{post_id}', 'PostsController@edit')->name('admin.posts.edit');
    Route::post('update/{post_id}', 'PostsController@update')->name('admin.posts.update');

});
Route::group(['prefix' => 'categories'], function () {

    Route::get('/', 'CategoriesController@index')->name('admin.categories');
    Route::get('create', 'CategoriesController@create')->name('admin.categories.create');
    Route::post('store', 'CategoriesController@store')->name('admin.categories.store');
    Route::get('delete/{category_id}', 'CategoriesController@delete')->name('admin.categories.delete');
    Route::get('edit/{category_id}', 'CategoriesController@edit')->name('admin.categories.edit');
    Route::post('update/{category_id}', 'CategoriesController@update')->name('admin.categories.update');

});

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

Route::resource('posts', 'PostsController');

Route::resource('gallery', 'GalleryController');

Route::get('/', 'PagesController@index');

// Routing to the about page
Route::get('/about', 'PagesController@about');

// Routing to the contact page
Route::get('/contact', 'PagesController@contact');

Route::get('/blog', 'PagesController@blog');
Route::get('/blog/{id}', 'PagesController@read');

Route::get('/album/{id}', 'PagesController@albumShow');

Route::get('/photos/{id}', 'PagesController@photoShow');

Route::get('logout', 'Auth\LoginController@logout');

Route::get('/admin', 'PostsController@index');
//Route::post('/blogCreate2','AdminController@BlogPost');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/mail', 'MailController@send');

Route::get('/album', 'AlbumController@showAlbum');
Route::post('/albumCreate', 'AlbumController@createAlbum');
Route::get('/albumIndex', 'AlbumController@albumIndex');
Route::get('/albums/{id}', 'AlbumController@show');
Route::delete('/album/delete/{id}', 'AlbumController@destroy');

Route::get('/photos/create/{id}', 'PhotoController@create');
Route::post('/photos/store', 'PhotoController@store');
Route::get('/photo/{id}', 'PhotoController@show');
Route::delete('/photo/{id}', 'PhotoController@destroy');


// press release route
Route::resource('press', 'PressReleaseController')->except("show");

// use App\User;

// Route::get('new-user', function () {
//     return User::create([
//         'name' => 'testuser',
//         'email' => 'user@test.com',
//         'password' => Hash::make('testuser'),
//     ]);
// });
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


Route::get('/', 'HomeController@index')->name('home');
Route::get('/category', 'HomeController@categoryArchive')->name('category.archive');
Route::get('/category/{id}', 'HomeController@categoryPost')->name('category.post');

Route::post('/search', 'HomeController@search')->name('search.archive');

Route::get('/thread', 'HomeController@threadArchive')->name('thread.archive');
Route::get('/thread/create','HomeController@threadCreate')->name('thread.create');
Route::post('/thread/create','HomeController@threadCreatePost');

Route::get('/thread/{id}', 'HomeController@threadPost')->name('thread.post');
Route::post('/thread/{id}/comment', 'HomeController@threadPostComment')->name('thread.post.comment');

Route::post('/comment/spam', 'HomeController@commentSpam')->name('comment.spam');

Route::get('/link', 'HomeController@linkPage')->name('link');
Route::get('/jump', 'HomeController@jump')->name('jump');
Route::view('/company','company')->name('company');
Route::view('/policy','policy')->name('policy');
Route::view('/privacy','privacy')->name('privacy');
Route::view('/tokusho','tokusho')->name('tokusho');
Route::get('/sitemap.xml','SitemapController@index');

/*
admin
 */

Route::get('/admin','AdminController@index')->name('admin');
Route::get('/admin/category','AdminController@category')->name('admin.category');
Route::post('/admin/category','AdminController@categoryPost');
Route::get('/admin/category/{id}','AdminController@categoryEdit')->name('admin.category.edit');
Route::post('/admin/category/{id}','AdminController@categoryUpdate');
Route::post('/admin/category','AdminController@categoryPost');

Route::get('/admin/spam','AdminController@spam')->name('admin.spam');

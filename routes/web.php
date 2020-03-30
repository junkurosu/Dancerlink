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
Route::get('/auth/login', 'HomeController@getAuth');
Route::post('/auth/login', 'HomeController@postAuth')->name('login');
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
Route::get('/contact','HomeController@contactGet');
Route::post('/contact','HomeController@contactPost')->name('contact');
Route::post('/confirm','HomeController@confirm')->name('confirm');
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
Route::get('/admin/contact','AdminController@contactGet');
Route::post('/admin/contact','AdminController@contactDelete')->name('admin.contact');
Route::get('/admin/spam','AdminController@spam')->name('admin.spam');
Route::get('/admin/preftest','AdminController@preftest')->name('admin.preftest');
Route::group(['prefix' => 'admin','as' => 'admin.'], function(){
	Route::resource('prefs','PrefController');
});

Route::post('/admin/prefs/csvregist','CsvController@csvPrefRegister')->name('admin.prefs.csvregist');

/*
map
 */

Route::post('/map','GmapsController@view');
Route::get('/pref','GmapsController@pref')->name('studio.pref');
Route::get('/mapsearch','GmapsController@pref');
Route::post('/mapsearch','GmapsController@search')->name('mapsearch');
Route::get('/studio','GmapsController@studios')->name('studio.archive');
Route::get('/studio/{id}','GmapsController@details')->name('studioDetails');
Route::get('/studioRegister','GmapsController@registerGet')->name('studioRegister');
Route::post('/studioRegister','GmapsController@create')->name('studioCreate');

/*
admin map
 */

Route::get('/register','AdminController@registerGet')->name('admin.register');
Route::post('/register','AdminController@create')->name('register');
Route::get('/studioEdit','AdminController@studiosEdit')->name('admin.studios');
Route::post('/studioEdit','AdminController@studioEditing')->name('studioEdit');
Route::post('/studioEdited','AdminController@studioEdited')->name('studioEdited');
Route::post('/studioDelete','AdminController@studioDelete')->name('studioDelete');
Route::get('/permission','AdminController@permissionGet')->name('admin.permission');
Route::post('/permission','AdminController@permissionPost')->name('permission');
Route::post('/Notpermission','AdminController@Notpermission')->name('Notpermission');

/*
test
 */
Route::get('/test','HomeController@Test');

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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', 'IndexController@index')->name('index');
Route::get('/uslugi', 'IndexController@uslugi')->name('uslugi');
Route::get('/uslugi/{slug}', 'IndexController@uslugislug')->name('uslugislug');
Route::get('/prokat', 'IndexController@prokat')->name('prokat');
Route::get('/prokat/{slug}', 'IndexController@prokatslug')->name('prokatslug');
Route::get('/works', 'IndexController@works')->name('myworks');
Route::get('/works/{slug}', 'IndexController@worksslug')->name('myworksslug');
Route::get('/material', 'IndexController@material')->name('material');
Route::get('/material/{slug}', 'IndexController@materialSlug')->name('materialslug');
Route::get('/post', 'IndexController@post')->name('post');
Route::get('/post/{slug}', 'IndexController@postSlug')->name('postslug');
Route::get('/contact', 'IndexController@contact')->name('contact');
Route::get('/privacy-policy', 'IndexController@privacy')->name('privacy');
Route::get('/sitemapweb', 'IndexController@sitemapweb')->name('sitemapweb');
Route::get('/sitemap.xml', 'IndexController@sitemap')->name('sitemap');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

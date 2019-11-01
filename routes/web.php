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

Route::group(['middleware' => ['web'], 'prefix' => ''], function()
{
	Route::get('/', 'HomeController@index')->name('home.index');
	Route::get('/contact', 'OtherController@contact')->name('other.contact');
	Route::get('/about', 'OtherController@about')->name('other.about');
	Route::get('/privacy-policy', 'OtherController@privacyPolicy')->name('other.privacy-policy');
	Route::get('/payment-policy', 'OtherController@paymentPolicy')->name('other.payment-policy');
	Route::get('/transport-policy', 'OtherController@transportPolicy')->name('other.transport-policy');
	Route::get('/sale-off', 'SaleController@saleOff')->name('sale.sale-off');
	Route::group(['prefix' => 'news'], function() {
		Route::get('/', 'NewsController@index')->name('news.index');
		Route::get('/{slug}', 'NewsController@detail')->name('news.detail');
	});
	Route::group(['prefix' => 'cart'], function() {
		Route::get('/', 'CartController@index')->name('cart.index');
		Route::get('/{slug}', 'CartController@detail')->name('cart.detail');
	});
	Route::group(['prefix' => 'product'], function() {
		Route::get('/', 'ProductController@index')->name('product.index');
		Route::get('/{slug}', 'ProductController@detail')->name('product.detail');
	});
	Route::group(['prefix' => 'user'], function() {
		Route::get('/', 'UserController@login')->name('user.login');
		Route::get('/{slug}', 'UserController@info')->name('user.info');
	});
    Route::group(['prefix' => 'report'], function () {
        Route::get('/', 'ReportController@index')->name('report.index');
        Route::get('/filter', 'ReportController@filterContent')->name('report.filter.content');
    });
});
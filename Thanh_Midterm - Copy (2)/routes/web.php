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

// Crub Sản phẩm
Route::group(['prefix' => '/'], function () {
	// List products
	Route::get('list', [
		'as' 	=> 'getListProd',
		'uses' 	=> 'ProductsController@getListProd'
	]);

	// Delete products
	Route::get('delete/{id}', [
		'as' 	=> 'getDeleteProd',
		'uses' 	=> 'ProductsController@getDeleteProd'
	]);

	// Add products
	Route::get('addProd', [
		'as' 	=> 'getAddProd',
		'uses' 	=> 'ProductsController@getAddProd'
	]);

	Route::post('addProd', [
		'as' 	=> 'postAddProd',
		'uses' 	=> 'ProductsController@postAddProd'
	]);

	// Edit products
	Route::get('edit/{id}', [
		'as' 	=> 'getEditProd',
		'uses' 	=> 'ProductsController@getEditProd'
	]);

	Route::post('edit/{id}', [
		'as' 	=> 'postEditProd',
		'uses' 	=> 'ProductsController@postEditProd'
	]);
});

Route::get('home', [
		'as' 	=> 'getListProdHome',
		'uses' 	=> 'ProductsController@getListProdHome'
	]);


Route::get('sendmail','PhpmailerController@index');
Route::post('sendmail','PhpmailerController@sendEmail');


Route::get('getData','PageWEbController@getData');



Route::get('',function(){
	$crawler = Goutte::request('GET','http:dantri.com.vn/');
	$scrawler->filter('a.font6')->each(function($node){
		echo $node->text()."</br>";
	});
});






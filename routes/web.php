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
/////////////////////////////////////////////////////////////////////////////////////////////////
Route::get('/', function () {
    return redirect('/ar');
    });

 
   
/////////////////////////////////////////////////////////////////////////////////////////////////

 Route::group([ 'prefix' => 'en'], function ()
{
 	   // App::setLocale('en');

Route::get('/', 'HomeController@index');
Route::get('/Doctors/{id}', 'HomeController@Doctors');
 Route::get('/Departments/{id}', 'ProductController@show');
Route::get('/singel_cat/{id}', 'HomeController@singel_cat');
Route::get('/news', 'HomeController@news');
 Route::get('/singel_news/{id}', 'HomeController@singel_news');
 Route::get('/image', 'HomeController@image');
 Route::get('/video', 'HomeController@video');
Route::get('/services/{id}', 'HomeController@singel_services');
   Route::post('/orders', 'HomeController@orders')->name('orders');
Route::get('/About', 'HomeController@About');
Route::get('/Contact', 'HomeController@Contact');
	});


	/////////////////////////////////////////////////////////////////////////////////////////////////

	 Route::group([ 'prefix' => 'ar'], function ()
{
	
	  // App::setLocale('ar');
 
Route::get('/', 'HomeController@index');
Route::get('/Doctors/{id}', 'HomeController@Doctors');
 Route::get('/Departments/{id}', 'ProductController@show');
Route::get('/singel_cat/{id}', 'HomeController@singel_cat');
Route::get('/news', 'HomeController@news');
 Route::get('/singel_news/{id}', 'HomeController@singel_news');
 Route::get('/image', 'HomeController@image');
 Route::get('/video', 'HomeController@video');
Route::get('/services/{id}', 'HomeController@singel_services');
   Route::post('/orders', 'HomeController@orders')->name('orders');
Route::get('/About', 'HomeController@About');
Route::get('/Contact', 'HomeController@Contact');
 	});
	
	
 /////////////////////////////////////////////////////////////////////////////////////////////////

Auth::routes();
 
/////////////////////////////////////////////////////////////////////////////////////////////////

/*
|--------------------------------------------------------------------------
|                   admin              admin 
|--------------------------------------------------------------------------
*/

Route::group(['middleware' => 'auth', 'prefix' => 'admin'], function ()
{

 Route::get('ajax_del_products/{id}/{Product_id}', 'ProductsController@ajax_del_products');
 	Route::resource('/', 'servicesController');

	Route::resource('services', 'servicesController');
 Route::resource('servicesArs', 'services_arController'); 
 Route::resource('products', 'ProductsController');
Route::resource('categoriesProducts', 'Categories_ProductsController');
Route::resource('siteStings', 'siteStingsController');
Route::resource('sliders', 'sliderController');
Route::resource('types', 'typesController');
 Route::resource('nEWS', 'NEWSController');
Route::resource('clients', 'clientsController');
Route::resource('orders', 'orderController');
Route::resource('projectsCats', 'projects_catController');
Route::resource('requests', 'requestController');
Route::resource('videos', 'videoController');
Route::resource('images', 'imageController');
Route::resource('openinghours', 'openinghoursController');
});

/////////////////////////////////////////////////////////////////////////////////////////////////








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
//frontend route

Route::get('/', 'HomeController@index');

//show by product

Route::get('/product_by_category/{category_id}','HomeController@product_by_category');

Route::get('/product_by_manufacture/{manufacture_id}','HomeController@product_by_manufacture');
Route::get('/view_product/{product_id}','HomeController@product_details');


//backend route
Route::get('/logout','SuperAdminController@logout');
Route::get('/backend', 'AdminController@index');
Route::get('/dashboard','SuperAdminController@index');
Route::post('/admin-dashboard','AdminController@dashboard');

//category related

Route::get('/add-category','CategoryController@index');
Route::get('/all-category','CategoryController@all_category');
Route::post('/save-category','CategoryController@save_category');
Route::get('/inactive_category/{category_id}','CategoryController@inactive_category');
Route::get('/active_category/{category_id}','CategoryController@active_category');
Route::get('/edit_category/{category_id}','CategoryController@edit_category');
Route::post('/update_category/{category_id}','CategoryController@update_category');
Route::get('/delete_category/{category_id}','CategoryController@delete_category');


//manufacture
Route::get('/all-manufacture','ManufactureController@all_manufacture');
Route::get('/add-manufacture','ManufactureController@index');
Route::post('/save-manufacture','ManufactureController@save_manufacture');

Route::get('/inactive_manufacture/{manufacture_id}','ManufactureController@inactive_manufacture');
Route::get('/active_manufacture/{manufacture_id}','ManufactureController@active_manufacture');
Route::get('/edit_manufacture/{manufacture_id}','ManufactureController@edit_manufacture');
Route::post('/update_manufacture/{manufacture_id}','ManufactureController@update_manufacture');
Route::get('/delete_manufacture/{manufacture_id}','ManufactureController@delete_manufacture');



//products

Route::get('/add-product','ProductController@index');
Route::post('/save-product','ProductController@save_product');
Route::get('/all-product','ProductController@all_product');
Route::get('/inactive_product/{product_id}','ProductController@inactive_product');
Route::get('/active_product/{product_id}','ProductController@active_product');
Route::get('/delete_product/{product_id}','ProductController@delete_product');

//sliders

Route::get('/add-slider','SliderController@add_slider');
Route::get('/all-slider','SliderController@all_slider');
Route::post('/save-slider','SliderController@save_slider');
Route::get('/delete_slider/{slider_id}','SliderController@delete_slider');
Route::get('/inactive_slider/{slider_id}','SliderController@inactive_slider');
Route::get('/active_slider/{slider_id}','SliderController@active_slider');



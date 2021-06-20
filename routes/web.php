<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'HomeController@index');
Route::get('/about', 'HomeController@about');
Route::get('/Pricing', 'HomeController@Pricing');
Route::get('/Contact', 'HomeController@Contact');

Route::get('/model_video', 'HomeController@model_video');


/*============================backend route Here=========================================*/

Route::get('/backend', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/admin', 'Admin\Admincontroller@index')->name('admin');
/*===================================Slider route here ====================================*/

Route::get('/Slider', 'Admin\SliderController@create')->name('/slideradd');
Route::post('/Slider/store', 'Admin\SliderController@store')->name('slider.store');
Route::get('/Slider/All', 'Admin\SliderController@index')->name('/sliderall');
Route::get('/eidt/slider/{id}', 'Admin\SliderController@eidt');
Route::post('slider/update/{id}', 'Admin\SliderController@update');
Route::get('/slider/active/{id}', 'Admin\SliderController@active');
Route::get('/slider/unactive/{id}', 'Admin\SliderController@unactive');
Route::get('/delete/slider/{id}', 'Admin\SliderController@destroy');


/*===================================service route here =====================================*/

Route::get('/Service', 'Admin\ServiceController@create')->name('/Service.add');
Route::post('/Service/store', 'Admin\ServiceController@store')->name('Service.store');
Route::get('/Service/All', 'Admin\ServiceController@index')->name('/Serviceall');
Route::get('/eidt/Service/{id}', 'Admin\ServiceController@eidt');
Route::post('Service/update/{id}', 'Admin\ServiceController@update');
Route::get('/Service/active/{id}', 'Admin\ServiceController@active');
Route::get('/Service/unactive/{id}', 'Admin\ServiceController@unactive');
Route::get('/delete/Service/{id}', 'Admin\ServiceController@destroy');

/*===================================Category route here =====================================*/

Route::get('/Category', 'Admin\CategoryController@create')->name('/Category.add');
Route::post('/Category/store', 'Admin\CategoryController@store')->name('Category.store');
Route::get('/Category/All', 'Admin\CategoryController@index')->name('/Categoryall');
Route::get('/eidt/Category/{id}', 'Admin\CategoryController@eidt');
Route::post('Category/update/{id}', 'Admin\CategoryController@update');
Route::get('/Category/active/{id}', 'Admin\CategoryController@active');
Route::get('/Category/unactive/{id}', 'Admin\CategoryController@unactive');
Route::get('/delete/Category/{id}', 'Admin\CategoryController@destroy');


/*===================================Category route here =====================================*/

Route::get('/Gallery', 'Admin\GalleryController@create')->name('/Gallery.add');
Route::post('/Gallery/store', 'Admin\GalleryController@store')->name('Gallery.store');
Route::get('/Gallery/All', 'Admin\GalleryController@index')->name('/Galleryall');
Route::get('/eidt/Gallery/{id}', 'Admin\GalleryController@eidt');
Route::post('Gallery/update/{id}', 'Admin\GalleryController@update');
Route::get('/Gallery/active/{id}', 'Admin\GalleryController@active');
Route::get('/Gallery/unactive/{id}', 'Admin\GalleryController@unactive');
Route::get('/delete/Gallery/{id}', 'Admin\GalleryController@destroy');



/*================================Team Members route here ==================================*/

Route::get('/Team', 'Admin\TeamController@create')->name('/Team.add');
Route::post('/Team/store', 'Admin\TeamController@store')->name('Team.store');
Route::get('/Team/All', 'Admin\TeamController@index')->name('/Teamall');
Route::get('/eidt/Team/{id}', 'Admin\TeamController@eidt');
Route::post('Team/update/{id}', 'Admin\TeamController@update');
Route::get('/Team/active/{id}', 'Admin\TeamController@active');
Route::get('/Team/unactive/{id}', 'Admin\TeamController@unactive');
Route::get('/delete/Team/{id}', 'Admin\TeamController@destroy');

Route::get('/Team/Cmember/{id}', 'Admin\TeamController@Cmember');
Route::get('/Team/member/{id}', 'Admin\TeamController@member');
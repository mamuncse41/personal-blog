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

/*Route::get('/', function () {
    return view('welcome');
});*/
/*--------------FrontEnd-------------------------------------------*/
Route::get('/','WellcomeController@index');
Route::get('/about-page','WellcomeController@about');
Route::get('/portfolio-page','WellcomeController@portfolio');
Route::get('/login-page','WellcomeController@login');
Route::get('/register-page','WellcomeController@register');
Route::get('/contact-page','WellcomeController@contact');
/*---------------------------Admin------------------------------------*/
Route::get('/admin_login','DashboardController@index');
Route::post('/admin-check','DashboardController@login');
Route::get('/admin/signup','DashboardController@signup');
Route::get('/dashboard','SuperAdminController@dashboard');
Route::get('/logout','SuperAdminController@logout');
/*-------------------------Catagory-------------*/
Route::get('/catagory','CatagoryController@catagory');
Route::post('/add-catagory','CatagoryController@StoreCatagory');
Route::get('/manage-catagory','CatagoryController@ManageCatagory');
Route::get('/published-catagory/{id}','CatagoryController@PublishedCatagory');
Route::get('/unpublished-catagory/{id}','CatagoryController@UnpublishedCatagory');
Route::get('/delete-catagory/{id}','CatagoryController@DeleteCatagory');
Route::get('/update-catagory/{id}','CatagoryController@UpdateCatagory');
Route::post('/Edit-catagory','CatagoryController@editCatagory');

/*-------------------------Catagory-------------*/
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

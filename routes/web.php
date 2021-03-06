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
    return view('pages.index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('dashboard', 'BrandController@index');
Route::get('api/brands/{id}', 'BrandController@show');
//MORE INFORMATION VIEW
Route::get('/brand/1', function(){
    return view('pages.information');
}); 
Route::get('/brands/new', function () {
    return view('pages.brand-register');
});
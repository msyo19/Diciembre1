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

Route::get('api/brands', 'BrandController@index');
Route::get('api/brands/{id}', 'BrandController@show');
Route::get('/dashboard', function () {
    return view('pages.dashboard');
});

//MORE INFORMATION VIEW
Route::get('/information', function(){
    return view('pages.information');
}); 

Route::get('/brand-register', function () {
    return view('pages.brand-register');
});

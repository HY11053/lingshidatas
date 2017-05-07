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
Route::get('brands','BrandController@CreateDatas');
Route::get('brands/view','BrandController@GetViews');
Route::get('qingchu','BrandController@qingchu');
Route::post('brands/view','BrandController@GetDatas');
Route::get('createarticle','CreateArticle@Create');
Route::post('createarticle','CreateArticle@CreateDatas');
Route::get('importdatas','CreateArticle@Import');
Route::post('importdatas','CreateArticle@ImportDatas');
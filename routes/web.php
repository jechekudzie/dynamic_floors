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

Route::get('/', 'SiteController@index');
Route::get('/floor/{floor}', 'SiteController@floor');
Route::get('/floor_brands/{floorBrand}', 'SiteController@floor_brands');


Route::get('/products/{floorBrand}', 'SiteController@products');
Route::get('/products/{product}/details', 'SiteController@product');


Route::get('/profiles/{profileType}/by_type', 'SiteController@profiles');
Route::get('/profiles/{profile}', 'SiteController@profile');

//skirting
Route::get('/skirting/{profileType}', 'SiteController@skirting');

//profiles
Route::get('/profiles', 'SiteController@profiles');

//cleaners
Route::get('/cleaners/{cleaner}', 'SiteController@cleaners');

//abut page
Route::get('/about', 'SiteController@about');

//contact page
Route::get('/contact', 'SiteController@contact');


Route::get('/services', 'SiteController@services');
Route::get('/wall_decor', 'SiteController@wallDecor');


/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/
Route::get('/admin', 'AdminController@index');
Route::resource('/admin/floors', 'FloorsController');
Route::resource('/admin/brands', 'BrandsController');
Route::resource('/admin/floor_brands', 'FloorBrandsController');
Route::resource('/admin/products', 'ProductsController');
Route::resource('/admin/services', 'ServicesController');
Route::resource('/admin/portfolios', 'PortfoliosController');
Route::resource('/admin/accessories', 'AccessoriesController');
Route::resource('/admin/cleaners', 'CleanersController');

Route::get('/admin/upload_cleaner_images', 'CleanersController@upload_cleaner_images');
Route::post('/admin/store_cleaner_images', 'CleanersController@store_cleaner_images');

Route::resource('/admin/profiles', 'ProfilesController');
Route::resource('/admin/products', 'ProductsController');
Route::resource('/admin/colors', 'ColorsController');

Route::get('/admin/floor_brands/{floor}/index', 'FloorBrandsController@index');
Route::get('/admin/floor_brands/{floor}/create', 'FloorBrandsController@create');
Route::post('/admin/floor_brands/{floor}/store', 'FloorBrandsController@store');
Route::get('/admin/floor_brands/{floorBrand}/edit', 'FloorBrandsController@edit');
Route::patch('/admin/floor_brands/{floorBrand}/update', 'FloorBrandsController@update');

Route::get('/admin/products/{floorBrand}/index', 'ProductsController@index');
Route::get('/admin/products/{floorBrand}/create', 'ProductsController@create');
Route::post('/admin/products/{floorBrand}/store', 'ProductsController@store');
Route::get('/admin/products/{product}/edit', 'ProductsController@edit');
Route::patch('/admin/products/{product}/update', 'ProductsController@update');

//wall decor
Route::resource('/admin/wall_decor', 'WallDecorController');

Route::get('/admin/wall_decor_options/{wallDecor}/index', 'WallDecorOptionController@index');
Route::get('/admin/wall_decor_options/{wallDecor}/create', 'WallDecorOptionController@create');
Route::post('/admin/wall_decor_options/{wallDecor}/store', 'WallDecorOptionController@store');
Route::get('/admin/wall_decor_options/{wallDecorOption}/edit', 'WallDecorOptionController@edit');
Route::patch('/admin/wall_decor_options/{wallDecorOption}/update', 'WallDecorOptionController@update');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';

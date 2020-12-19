<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

// Route::get('/', function () {
//     return view('welcome');
// });


//ALL
Auth::routes();
Route::get('/', 'HomeController@index')->name('home');
Route::resource('Attraction', 'AttractionController')->only([
  'index'
]);
Route::resource('Calendar', 'CalendarController')->only([
  'index'
]);
Route::resource('Product', 'ProductController')->only([
  'index'
]);
Route::get('/contact', 'SendEmailController@index')->name('contact');
Route::post('/contact/send', 'SendEmailController@send')->name('mail.send');
Route::get('/cookies', 'HomeController@cookies')->name('cookies');
Route::get('/sale', 'HomeController@sale')->name('sale');
Route::get('/legal', 'HomeController@legal')->name('legal');
Route::get('/map', 'HomeController@map')->name('map');
Route::get('/mention', 'HomeController@mention')->name('mention');
Route::get('/recruitment', 'HomeController@recruitment')->name('recruitment');
Route::get('/pricelist', 'HomeController@pricelist')->name('pricelist');
Route::get('/informations', 'HomeController@informations')->name('informations');
Route::get('/sale', 'HomeController@sale')->name('sale');
Route::get('/game', 'HomeController@game')->name('game');

// UTILISATEURS ENREGISTRES
Route::group(['middleware' => 'auth'], function() {
  Route::resource('User', 'UsersController')->only([
    'show', 'edit', 'update', 'destroy'
  ]);
  Route::resource('Address', 'AddressController');
  Route::resource('Cart', 'CartController')->only([
    'show'
  ]);
  Route::resource('CartItem', 'CartItemController')->only([
    'store', 'destroy'
  ]);
  Route::get('/order/{id}', 'HomeController@order')->name('order');
  Route::resource('Cart', 'CartController')->only([
    'update'
  ]);
});

//ADMINS
Route::group(['middleware' => 'is.admin'], function() {
  Route::resource('User', 'UsersController')->only([
    'index'
  ]);
  Route::resource('Schedule', 'ScheduleController')->only([
    'index', 'store', 'create', 'edit', 'update', 'destroy'
  ]);
  Route::resource('Attraction', 'AttractionController')->only([
    'store', 'create', 'edit', 'update', 'show', 'destroy'
  ]);
  Route::resource('Article', 'ArticleController')->only([
    'store', 'create', 'edit', 'update', 'destroy'
  ]);
  Route::resource('Product', 'ProductController')->only([
    'store', 'create', 'edit', 'update', 'destroy'
  ]);
  Route::resource('Cart', 'CartController')->only([
    'index'
  ]);
});

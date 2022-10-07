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

// //Generate Sitemap:
Route::get('/sitemap.xml', 'App\Http\Controllers\CrdlinkPageController@sitemap');
Route::get('/sitemap', 'App\Http\Controllers\CrdlinkPageController@sitemap');

//CreditLink Routes:
Route::get('/', 'App\Http\Controllers\CrdlinkPageController@home');
Route::get('pricing', 'App\Http\Controllers\CrdlinkPageController@pricing');
Route::get('products-and-training', 'App\Http\Controllers\CrdlinkPageController@products_and_training');
Route::get('about-us', 'App\Http\Controllers\CrdlinkPageController@about_us');
Route::get('contact-us', 'App\Http\Controllers\CrdlinkPageController@contact_us');
Route::get('millionaires-club', 'App\Http\Controllers\CrdlinkPageController@millionaires_club');
Route::get('products', 'App\Http\Controllers\CrdlinkPageController@products');
Route::get('culture', 'App\Http\Controllers\CrdlinkPageController@culture');
Route::get('free-trial', 'App\Http\Controllers\CrdlinkPageController@free_trial');
Route::get('terms', 'App\Http\Controllers\CrdlinkPageController@terms');
Route::get('privacy', 'App\Http\Controllers\CrdlinkPageController@privacy');
Route::get('unsubscribe', 'App\Http\Controllers\CrdlinkPageController@unsubscribe');

Route::post('contact-form1', 'App\Http\Controllers\ContactFormController@submitContact');
Route::post('contact-form2', 'App\Http\Controllers\ContactFormController@submitContact2');
Route::post('contact-form3', 'App\Http\Controllers\ContactFormController@unsubscribe');
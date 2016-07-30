<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'PagesController@home');
Route::get('about-us', 'PagesController@aboutus');
Route::get('blog', 'PagesController@blog');
Route::get('blog', 'PagesController@blog');
Route::get('business-plan', 'PagesController@businessplan');
Route::get('consultancy', 'PagesController@consultancy');
Route::get('contanct-us', 'PagesController@contactus');
Route::get('financial-service', 'PagesController@financialservice');
Route::get('investment', 'PagesController@investment');
Route::get('market-analysis', 'PagesController@marketanalysis');
Route::get('marketing', 'PagesController@marketing');







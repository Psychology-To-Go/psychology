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
Route::get('/', ['as' => 'home', 'uses' => 'App\Http\Controllers\HomeController@index']);
Route::get('/mental-health', ['as' => 'mental_health', 'uses' => 'App\Http\Controllers\HomeController@mental_health']);
Route::get('/about', ['as' => 'about', 'uses' => 'App\Http\Controllers\HomeController@about']);
Route::get('/trending', ['as' => 'trending', 'uses' => 'App\Http\Controllers\HomeController@trending']);
Route::get('/resources', ['as' => 'resources', 'uses' => 'App\Http\Controllers\HomeController@resources']);
Route::get('/therapy-types', ['as' => 'types_of_therapy', 'uses' => 'App\Http\Controllers\HomeController@types_of_therapy']);
Route::get('/archive', ['as' => 'archive', 'uses' => 'App\Http\Controllers\HomeController@archive']);
/*
|--------------------------------------------------------------------------
| article Routes
|--------------------------------------------------------------------------
*/
Route::get('/alzheimers', ['as' => 'article_1281', 'uses' => 'App\Http\Controllers\ArticleController@article_1281']);
Route::get('/how-do-you-talk-to-someone-with-alzheimers', ['as' => 'article_1282', 'uses' => 'App\Http\Controllers\ArticleController@article_1282']);
Route::get('/what-are-the-7-stages-of-alzheimers', ['as' => 'article_1283', 'uses' => 'App\Http\Controllers\ArticleController@article_1283']);
Route::get('/what-is-stage-5-alzheimers', ['as' => 'article_1302', 'uses' => 'App\Http\Controllers\ArticleController@article_1302']);
Route::get('/what-does-it-feel-like-to-have-early-onset-alzheimer', ['as' => 'article_1317', 'uses' => 'App\Http\Controllers\ArticleController@article_1317']);


/*
|--------------------------------------------------------------------------
| Else  Routes
|--------------------------------------------------------------------------
*/
Route::get('/privacy-policy', ['as' => 'privacy', 'uses' => 'App\Http\Controllers\HomeController@privacy_policy']);
Route::post('/cookie-consent-privacy-settings', ['as' => 'accept_cookies_privacy', 'uses' => 'App\Http\Controllers\HomeController@accept_cookies_privacy']);
Route::post('/cookie-consent', ['as' => 'accept_cookies', 'uses' => 'App\Http\Controllers\HomeController@accept_cookies']);
Route::post('/cookie-unconsent', ['as' => 'cookie_unconsent', 'uses' => 'App\Http\Controllers\HomeController@cookie_unconsent']);
Route::get('/privacy-settings', ['as' => 'privacy_settings', 'uses' => 'App\Http\Controllers\HomeController@privacy_settings']);
Route::get('/terms-of-use', ['as' => 'terms_of_use', 'uses' => 'App\Http\Controllers\HomeController@terms_of_use']);
Route::get('/additional', ['as' => 'additional_info', 'uses' => 'App\Http\Controllers\HomeController@additional_info']);

Route::get('/tracking-free', ['as' => 'tracking_free', 'uses' => 'App\Http\Controllers\HomeController@tracking_free']);
Route::get('/text-editor', ['as' => 'text_editor', 'uses' => 'App\Http\Controllers\HomeController@text_editor']);
Route::get('/tracking-free/1', ['as' => 'tracking_free_1', 'uses' => 'App\Http\Controllers\HomeController@tracking_free_1']);
Route::get('/tracking-free/2', ['as' => 'tracking_free_2', 'uses' => 'App\Http\Controllers\HomeController@tracking_free_2']);
Route::get('/tracking-free/3', ['as' => 'tracking_free_3', 'uses' => 'App\Http\Controllers\HomeController@tracking_free_3']);

Route::get('/automation', ['as' => 'automation', 'uses' => 'App\Http\Controllers\HomeController@automation']);
Route::get('/writer', ['as' => 'writer', 'uses' => 'App\Http\Controllers\HomeController@writer']);
Route::get('/generator', ['as' => 'generator', 'uses' => 'App\Http\Controllers\HomeController@generator']);
Route::post('/automation_post', ['as' => 'automation_post', 'uses' => 'App\Http\Controllers\HomeController@automation_post']);
Route::post('/citation_post', ['as' => 'citation_post', 'uses' => 'App\Http\Controllers\HomeController@citation_post']);

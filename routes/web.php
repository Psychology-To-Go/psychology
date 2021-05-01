<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArticleController;
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
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/mental-health', [HomeController::class, 'mental_health'])->name('mental_health');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/trending', [HomeController::class, 'trending'])->name('trending');
Route::get('/resources', [HomeController::class, 'resources'])->name('resources');
Route::get('/therapy-types', [HomeController::class, 'types_of_therapy'])->name('types_of_therapy');
Route::get('/archive', [HomeController::class, 'archive'])->name('archive');
Route::get('/privacy-policy', [HomeController::class, 'privacy'])->name('privacy');
Route::get('/cookie-consent-privacy-settings', [HomeController::class, 'accept_cookies_privacy'])->name('accept_cookies_privacy');
Route::post('cookie-consent/', [HomeController::class, 'accept_cookies'])->name('accept_cookies');
Route::post('/cookie-unconsent', [HomeController::class, 'cookie_unconsent'])->name('cookie_unconsent');
Route::get('/privacy-settings', [HomeController::class, 'privacy_settings'])->name('privacy_settings');
Route::get('/terms-of-use', [HomeController::class, 'terms_of_use'])->name('terms_of_use');
Route::get('/additional', [HomeController::class, 'additional_info'])->name('additional_info');
Route::get('/tracking-free', [HomeController::class, 'tracking_free'])->name('tracking_free');
Route::get('/text-editor', [HomeController::class, 'text_editor'])->name('text_editor');
Route::get('/tracking-free/1', [HomeController::class, 'tracking_free_1'])->name('tracking_free_1');
Route::get('/tracking-free/2', [HomeController::class, 'tracking_free_2'])->name('tracking_free_2');
Route::get('/tracking-free/3', [HomeController::class, 'tracking_free_3'])->name('tracking_free_3');
Route::get('/automation', [HomeController::class, 'automation'])->name('automation');
Route::get('/writer', [HomeController::class, 'writer'])->name('writer');
Route::get('/generator', [HomeController::class, 'generator'])->name('generator');
Route::post('/automation_post', [HomeController::class, 'automation_post'])->name('automation_post');
Route::post('/citation_post', [HomeController::class, 'citation_post'])->name('citation_post');
/*
|--------------------------------------------------------------------------
| article Routes
|--------------------------------------------------------------------------
*/

Route::get('/alzheimers', [ArticleController::class, 'article_1281'])->name('article_1281');
Route::get('/how-do-you-talk-to-someone-with-alzheimers', [ArticleController::class, 'iarticle_1282ndex'])->name('article_1282');
Route::get('/what-are-the-7-stages-of-alzheimers', [ArticleController::class, 'article_1283'])->name('article_1283');
Route::get('/what-is-stage-5-alzheimer', [ArticleController::class, 'article_1302'])->name('article_1302');
Route::get('/what-does-it-feel-like-to-have-early-onset-alzheimer', [ArticleController::class, 'article_1317'])->name('article_1317');
/*
|--------------------------------------------------------------------------
| Else  Routes
|--------------------------------------------------------------------------
*/

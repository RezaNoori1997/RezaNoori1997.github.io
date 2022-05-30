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

Route::get('/', [\App\Http\Controllers\Controller::class, 'indexLanding'])->name('home');

Route::get('/blog', [\App\Http\Controllers\Controller::class, 'indexBlog'])->name('blog');
Route::get('/educational-videos', [\App\Http\Controllers\Controller::class, 'indexEducationalVideos'])->name('edu_videos');
Route::get('/articles', [\App\Http\Controllers\Controller::class, 'indexArticles'])->name('articles');

Route::post('/contact-us', [\App\Http\Controllers\ContactUsController::class, 'store'])->name('contact.store');
Route::post('/news-member', [\App\Http\Controllers\NewsMemberController::class, 'store'])->name('news_member.store');
Route::post('/store-offer', [\App\Http\Controllers\OfferController::class, 'store'])->name('offers.store');

Route::post('/register', [\App\Http\Controllers\Controller::class, 'register'])->name('user_register');
Route::post('/login', [\App\Http\Controllers\Controller::class, 'login'])->name('user_login');

Route::post('/get-cities', [\App\Http\Controllers\Controller::class, 'getCitiesFromProvince'])->name('get_cities');

Route::get('/user-logout', [\App\Http\Controllers\Controller::class, 'logout'])->name('user_logout');

Route::post('/reserve', [\App\Http\Controllers\Controller::class, 'getFreeTimes'])->name('reserve');
Route::post('/store-turn', [\App\Http\Controllers\Controller::class, 'storeTurn'])->name('store_turn');

Route::group(['prefix' => 'panel', 'middleware' => 'checkAuthStatus'], function () {
    Route::get('/dashboard', [\App\Http\Controllers\Controller::class, 'indexDashboard'])->name('panel.dashboard');
    /**
     * Profile routes
     */
    Route::get('/profile', [\App\Http\Controllers\Controller::class, 'indexProfile'])->name('panel.profile');
    Route::get('/profile-edit', [\App\Http\Controllers\Controller::class, 'indexEditProfile'])->name('panel.edit-profile');

    Route::get('/turns', [\App\Http\Controllers\Controller::class, 'indexTurns'])->name('panel.turns');
    /**
     * Service routes.
     */
    Route::get('/services', [\App\Http\Controllers\Controller::class, 'indexServices'])->name('panel.services');
    Route::get('/service/create', [\App\Http\Controllers\Controller::class, 'createService'])->name('panel.service');
    Route::post('/service-store', [\App\Http\Controllers\Controller::class, 'storeService'])->name('service.store');
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ApartmentController;
use App\Http\Controllers\AttractionController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PrivacyPolicyController;
use App\Http\Controllers\RestaurantController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;


Route::group(['prefix' => LaravelLocalization::setLocale(), 'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']], function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');

    
    Route::get('/o-nas', [AboutController::class, 'index'])->name('about.index');
    Route::get('/o-nas/o-zebie', [AboutController::class, 'zab'])->name('about.zab');
    Route::get('/o-nas/historia', [AboutController::class, 'history'])->name('about.history');
    Route::get('/o-nas/gmina-poronin', [AboutController::class, 'poronin'])->name('about.poronin');
    Route::get('/o-nas/stowarzyszenie', [AboutController::class, 'association'])->name('about.association');
    Route::get('/o-nas/zwiazek-podhalan', [AboutController::class, 'zwiazek'])->name('about.zwiazek');
    Route::get('/o-nas/zespol-regionalny-zbojnicek', [AboutController::class, 'band'])->name('about.band');

    Route::get('/wydarzenia', [BlogController::class, 'index'])->name('blog.index');
    Route::get('/wydarzenia/archiwum', [BlogController::class, 'archive'])->name('blog.archive');

    Route::get('/wydarzenie/{slug}', [BlogController::class, 'show'])->name('blog.show');
    
    Route::get('/atrakcje', [AttractionController::class, 'index'])->name('attraction.index');
    Route::get('/atrakcja/{slug}', [AttractionController::class, 'show'])->name('attraction.show');

    Route::get('/apartamenty', [ApartmentController::class, 'index'])->name('apartment.index');
    Route::get('/apartament/{slug}', [ApartmentController::class, 'show'])->name('apartment.show');

    Route::get('/restauracje', [RestaurantController::class, 'index'])->name('restaurant.index');
    Route::get('/restauracja/{slug}', [RestaurantController::class, 'show'])->name('restaurant.show');


    Route::get('/kontakt', [ContactController::class, 'index'])->name('contact.index');


    Route::get('/polityka-prywatnosci', PrivacyPolicyController::class)->name('privacy-policy');



});

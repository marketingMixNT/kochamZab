<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;


Route::group(['prefix' => LaravelLocalization::setLocale(), 'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']], function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');

    Route::get('/o-nas/o-zebie', [AboutController::class, 'zab'])->name('about.zab');
    Route::get('/o-nas/historia', [AboutController::class, 'history'])->name('about.history');
    Route::get('/o-nas/gmina-poronin', [AboutController::class, 'poronin'])->name('about.poronin');
    Route::get('/o-nas/stowarzyszenie', [AboutController::class, 'association'])->name('about.association');
    Route::get('/o-nas/zwiazek-podhalan', [AboutController::class, 'zwiazek'])->name('about.zwiazek');
    Route::get('/o-nas/zespol-regionalny-zbojnicek', [AboutController::class, 'band'])->name('about.band');

    Route::get('/wydarzenia', [BlogController::class, 'index'])->name('blog.index');
    Route::get('/wydarzenia/{slug}', [BlogController::class, 'show'])->name('blog.show');
});

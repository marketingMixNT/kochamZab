<?php

namespace App\Providers;

use App\Models\Post;
use App\Models\Slide;
use App\Models\Apartment;
use App\Models\Attraction;
use App\Models\Restaurant;
use App\Observers\PostObserver;
use App\Observers\SlideObserver;
use App\Observers\ApartmentObserver;
use App\Observers\AttractionObserver;
use App\Observers\RestaurantObserver;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Apartment::observe(ApartmentObserver::class);
        Attraction::observe(AttractionObserver::class);
        Post::observe(PostObserver::class);
        Restaurant::observe(RestaurantObserver::class);
        Slide::observe(SlideObserver::class);
    }
}

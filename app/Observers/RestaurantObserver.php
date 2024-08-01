<?php

namespace App\Observers;

use App\Models\Restaurant;
use Illuminate\Support\Facades\Storage;

class RestaurantObserver
{
    /**
     * Handle the Restaurant "created" event.
     */
    public function created(Restaurant $restaurant): void
    {
        //
    }

    /**
     * Handle the Restaurant "updated" event.
     */
    public function updated(Restaurant $restaurant): void
    {
        if ($restaurant->isDirty('thumbnail')) {
            Storage::disk('public')->delete($restaurant->getOriginal('thumbnail'));
        }
        if ($restaurant->isDirty('gallery')) {
            Storage::disk('public')->delete($restaurant->getOriginal('gallery'));
        }
    }

    /**
     * Handle the Restaurant "deleted" event.
     */
    public function deleted(Restaurant $restaurant): void
    {
        if (! is_null($restaurant->thumbnail)) {
            Storage::disk('public')->delete($restaurant->thumbnail);
        }
        if (! is_null($restaurant->gallery)) {
            Storage::disk('public')->delete($restaurant->gallery);
        }
    }

    /**
     * Handle the Restaurant "restored" event.
     */
    public function restored(Restaurant $restaurant): void
    {
        //
    }

    /**
     * Handle the Restaurant "force deleted" event.
     */
    public function forceDeleted(Restaurant $restaurant): void
    {
        //
    }
}

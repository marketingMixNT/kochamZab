<?php

namespace App\Filament\Widgets;

use App\Models\Apartment;
use App\Models\Attraction;
use App\Models\Restaurant;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Dodanych Apartamentów', Apartment::count()),
            Stat::make('Dodanych Atrakcji', Attraction::count()),
            Stat::make('Dodanych Restauracji', Restaurant::count()),

        ];
    }
}

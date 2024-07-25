<?php

namespace App\Filament\Resources\RestaurantResource\Widgets;

use App\Models\Restaurant;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class RestaurantStatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Dodanych Restauracji', Restaurant::count()),
        ];
    }
}

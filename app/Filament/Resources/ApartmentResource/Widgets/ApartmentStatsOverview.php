<?php

namespace App\Filament\Resources\ApartmentResource\Widgets;

use App\Models\Apartment;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;

class ApartmentStatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Dodanych Apartamentów', Apartment::count()),
        ];
    }
}

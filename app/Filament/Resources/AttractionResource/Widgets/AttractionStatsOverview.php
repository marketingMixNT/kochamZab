<?php

namespace App\Filament\Resources\AttractionResource\Widgets;

use App\Models\Attraction;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class AttractionStatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Dodanych Atrakcji', Attraction::count()),
        ];
    }
}

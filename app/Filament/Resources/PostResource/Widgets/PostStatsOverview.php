<?php

namespace App\Filament\Resources\PostResource\Widgets;

use Carbon\Carbon;
use App\Models\Post;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;

class PostStatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Suma artykułów', Post::count()),
            Stat::make('Opublikowane', Post::where('published_at', '<=', Carbon::now())->count()),
            Stat::make('Czekają na publikację', Post::where('published_at', '>=', Carbon::now())->count())
        ];
    }
}

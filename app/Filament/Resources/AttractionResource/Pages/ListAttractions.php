<?php

namespace App\Filament\Resources\AttractionResource\Pages;

use App\Filament\Resources\AttractionResource;
use App\Filament\Resources\AttractionResource\Widgets\AttractionStatsOverview;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAttractions extends ListRecords
{
    use ListRecords\Concerns\Translatable;

    protected static string $resource = AttractionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
            Actions\LocaleSwitcher::make(),

        ];
    }

    protected function getHeaderWidgets(): array
    {
        return [
            
            AttractionStatsOverview::class
        ];
    }
}

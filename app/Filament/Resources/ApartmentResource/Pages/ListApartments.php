<?php

namespace App\Filament\Resources\ApartmentResource\Pages;

use App\Filament\Resources\ApartmentResource;
use App\Filament\Resources\ApartmentResource\Widgets\ApartmentStatsOverview;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListApartments extends ListRecords
{
    use ListRecords\Concerns\Translatable;

    protected static string $resource = ApartmentResource::class;

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
            
            ApartmentStatsOverview::class
        ];
    }
}

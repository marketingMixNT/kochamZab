<?php

namespace App\Filament\Resources\AttractionResource\Pages;

use App\Filament\Resources\AttractionResource;
use App\Filament\Resources\AttractionResource\Widgets\AttractionStatsOverview;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateAttraction extends CreateRecord
{
    use CreateRecord\Concerns\Translatable;

    protected static string $resource = AttractionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
           
        ];
    }

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['user_id'] = auth()->id();

        return $data;
    }

    protected function getHeaderWidgets(): array
    {
        return [
            
            AttractionStatsOverview::class
        ];
    }
}

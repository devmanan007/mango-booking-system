<?php

namespace App\Filament\Resources\Mangos\Pages;

use App\Filament\Resources\Mangos\MangoResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListMangos extends ListRecords
{
    protected static string $resource = MangoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}

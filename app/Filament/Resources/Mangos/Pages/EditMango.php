<?php

namespace App\Filament\Resources\Mangos\Pages;

use App\Filament\Resources\Mangos\MangoResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditMango extends EditRecord
{
    protected static string $resource = MangoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}

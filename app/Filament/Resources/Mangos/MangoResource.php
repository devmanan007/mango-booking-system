<?php

namespace App\Filament\Resources\Mangos;

use App\Filament\Resources\Mangos\Pages\CreateMango;
use App\Filament\Resources\Mangos\Pages\EditMango;
use App\Filament\Resources\Mangos\Pages\ListMangos;
use App\Filament\Resources\Mangos\Schemas\MangoForm;
use App\Filament\Resources\Mangos\Tables\MangosTable;
use App\Models\Mango;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class MangoResource extends Resource
{
    protected static ?string $model = Mango::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return MangoForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return MangosTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListMangos::route('/'),
            'create' => CreateMango::route('/create'),
            'edit' => EditMango::route('/{record}/edit'),
        ];
    }
}

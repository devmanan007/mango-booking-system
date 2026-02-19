<?php

namespace App\Filament\Resources\Mangos\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Toggle;

class MangoForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                FileUpload::make('image')
                    ->image()
                    ->directory('mangos')
                    ->nullable(),

                TextInput::make('name')
                    ->required()
                    ->maxLength(255),

                TextInput::make('variety')
                    ->required(),

                TextInput::make('origin')
                    ->required(),

                TextInput::make('grade'),

                TextInput::make('price_per_box')
                    ->numeric()
                    ->required(),

                TextInput::make('stock_quantity')
                    ->numeric()
                    ->required(),

                DatePicker::make('booking_start_date')
                    ->required(),

                DatePicker::make('booking_end_date')
                    ->required(),

                Textarea::make('description'),

                Toggle::make('status')
                    ->default(true),
            ]);
    }
}

<?php

namespace App\Filament\Resources\Mangos\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\IconColumn;

class MangosTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('image')
                    ->square()
                    ->size(60),

                TextColumn::make('name')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('variety')
                    ->searchable(),

                TextColumn::make('origin'),

                TextColumn::make('price_per_box')
                    ->money('INR')
                    ->sortable(),

                TextColumn::make('stock_quantity')
                    ->label('Stock'),

                IconColumn::make('status')
                    ->boolean(),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}

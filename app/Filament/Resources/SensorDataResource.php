<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SensorDataResource\Pages;
use App\Models\SensorData;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\BadgeColumn;
use Illuminate\Database\Eloquent\Builder;

class SensorDataResource extends Resource
{
    protected static ?string $model = SensorData::class;
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                // tambahkan field form jika perlu
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')->sortable(),
                TextColumn::make('distance')->label('Jarak (cm)'),
                TextColumn::make('timestamp')->label('Waktu'),
               BadgeColumn::make('distance')
                ->label('Status Tong')
                ->colors([
                    'danger' => fn ($record) => $record->distance < 30,
                    'success' => fn ($record) => $record->distance >= 30,
                ])
                ->getStateUsing(fn ($record) => $record->distance < 30 ? 'penuh' : 'kosong')
                ->formatStateUsing(fn ($state) => ucfirst($state)),
                        ])
            ->filters([
                //
            ]);
            // ->actions([
            //     Tables\Actions\EditAction::make(),
            // ])
            // ->bulkActions([
            //     Tables\Actions\BulkActionGroup::make([
            //         Tables\Actions\DeleteBulkAction::make(),
            //     ]),
            // ]);
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
            'index' => Pages\ListSensorData::route('/'),
            'create' => Pages\CreateSensorData::route('/create'),
            // 'edit' => Pages\EditSensorData::route('/{record}/edit'),
        ];
    }
}

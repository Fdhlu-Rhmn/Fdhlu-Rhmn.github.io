<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AiResultResource\Pages;
use App\Filament\Resources\AiResultResource\RelationManagers;
use App\Models\MachineResult;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AiResultResource extends Resource
{
    protected static ?string $model = MachineResult::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('result')
                    ->required()
                    ->maxLength(255),
                Forms\Components\FileUpload::make('photos')
                    ->label('Upload Image')
                    ->disk('public')
                    ->image()
                    ->reactive()
                    ->directory('result-images'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                Tables\Columns\TextColumn::make('result'),
                Tables\Columns\TextColumn::make('photos'),

            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
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
            'index' => Pages\ListAiResults::route('/'),
            'create' => Pages\CreateAiResult::route('/create'),
            'edit' => Pages\EditAiResult::route('/{record}/edit'),
        ];
    }
}
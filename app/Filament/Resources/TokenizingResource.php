<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TokenizingResource\Pages;
use App\Filament\Resources\TokenizingResource\RelationManagers;
use App\Models\Tokenizing;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TokenizingResource extends Resource
{
    protected static ?string $model = Tokenizing::class;

    protected static ?string $navigationIcon = 'heroicon-o-currency-dollar';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('id_barcode')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('item')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('token')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('weight')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('carbon')
                    ->required()
                    ->maxLength(255),
                Forms\Components\FileUpload::make('photos')
                    ->label('Upload Image')
                    ->disk('public')
                    ->image()
                    ->reactive()
                    ->directory('barcode-images'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\TextColumn::make('id_barcode'),
                Tables\Columns\TextColumn::make('item'),
                Tables\Columns\TextColumn::make('token'),
                Tables\Columns\TextColumn::make('weight'),
                Tables\Columns\TextColumn::make('carbon'),
                Tables\Columns\TextColumn::make('photos'),

                //
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
            'index' => Pages\ListTokenizings::route('/'),
            'create' => Pages\CreateTokenizing::route('/create'),
            'edit' => Pages\EditTokenizing::route('/{record}/edit'),
        ];
    }
}
<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DonationResource\Pages;
use App\Filament\Resources\DonationResource\RelationManagers;
use App\Models\Donation;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DonationResource extends Resource
{
    protected static ?string $model = Donation::class;

    protected static ?string $navigationIcon = 'heroicon-o-credit-card';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('writer')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('date')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('desc')
                    ->required()
                    ->maxLength(255),
                Forms\Components\FileUpload::make('image_featured_donation')
                    ->label('Upload Image')
                    ->disk('public')
                    ->image()
                    ->reactive()
                    ->directory('donation-images'),
                Forms\Components\Select::make('tag')
                    ->options([
                        '1' => 'New Events',
                        '2' => 'Coming Soon',
                        '3' => 'Old Events',
                    ]),
                    
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('writer')
                    ->searchable(),
                Tables\Columns\TextColumn::make('date')
                    ->searchable(),
                Tables\Columns\TextColumn::make('desc')
                    ->searchable()
                    ->limit(1000),
                Tables\Columns\TextColumn::make('image_featured_donation')
                    ->searchable(),
                Tables\Columns\TextColumn::make('tag')
                    ->searchable(),
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
            'index' => Pages\ListDonations::route('/'),
            'create' => Pages\CreateDonation::route('/create'),
            'edit' => Pages\EditDonation::route('/{record}/edit'),
        ];
    }
}
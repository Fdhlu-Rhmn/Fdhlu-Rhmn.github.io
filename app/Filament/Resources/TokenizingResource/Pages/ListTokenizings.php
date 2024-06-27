<?php

namespace App\Filament\Resources\TokenizingResource\Pages;

use App\Filament\Resources\TokenizingResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTokenizings extends ListRecords
{
    protected static string $resource = TokenizingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

<?php

namespace App\Filament\Resources\AiResultResource\Pages;

use App\Filament\Resources\AiResultResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAiResults extends ListRecords
{
    protected static string $resource = AiResultResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

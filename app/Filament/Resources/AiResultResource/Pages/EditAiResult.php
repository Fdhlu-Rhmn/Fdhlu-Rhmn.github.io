<?php

namespace App\Filament\Resources\AiResultResource\Pages;

use App\Filament\Resources\AiResultResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAiResult extends EditRecord
{
    protected static string $resource = AiResultResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

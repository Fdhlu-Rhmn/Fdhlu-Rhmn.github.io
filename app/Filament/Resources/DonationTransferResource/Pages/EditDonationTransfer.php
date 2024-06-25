<?php

namespace App\Filament\Resources\DonationTransferResource\Pages;

use App\Filament\Resources\DonationTransferResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDonationTransfer extends EditRecord
{
    protected static string $resource = DonationTransferResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

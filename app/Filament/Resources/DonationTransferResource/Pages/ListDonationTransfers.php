<?php

namespace App\Filament\Resources\DonationTransferResource\Pages;

use App\Filament\Resources\DonationTransferResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDonationTransfers extends ListRecords
{
    protected static string $resource = DonationTransferResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

<?php

namespace App\Filament\Resources\AlatMesinResource\Pages;

use App\Filament\Resources\AlatMesinResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAlatMesins extends ListRecords
{
    protected static string $resource = AlatMesinResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

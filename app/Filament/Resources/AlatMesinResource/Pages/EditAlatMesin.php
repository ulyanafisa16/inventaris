<?php

namespace App\Filament\Resources\AlatMesinResource\Pages;

use App\Filament\Resources\AlatMesinResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAlatMesin extends EditRecord
{
    protected static string $resource = AlatMesinResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

<?php

namespace App\Filament\Resources\ClergyResource\Pages;

use App\Filament\Resources\ClergyResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditClergy extends EditRecord
{
    protected static string $resource = ClergyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

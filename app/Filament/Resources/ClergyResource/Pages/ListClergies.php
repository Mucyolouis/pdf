<?php

namespace App\Filament\Resources\ClergyResource\Pages;

use App\Filament\Resources\ClergyResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListClergies extends ListRecords
{
    protected static string $resource = ClergyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

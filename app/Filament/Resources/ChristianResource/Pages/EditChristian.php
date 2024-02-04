<?php

namespace App\Filament\Resources\ChristianResource\Pages;

use App\Filament\Resources\ChristianResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditChristian extends EditRecord
{
    protected static string $resource = ChristianResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

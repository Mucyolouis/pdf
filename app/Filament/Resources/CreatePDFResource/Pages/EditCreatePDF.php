<?php

namespace App\Filament\Resources\CreatePDFResource\Pages;

use App\Filament\Resources\CreatePDFResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCreatePDF extends EditRecord
{
    protected static string $resource = CreatePDFResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

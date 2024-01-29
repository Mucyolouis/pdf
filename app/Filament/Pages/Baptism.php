<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;

class Baptism extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static ?string $navigationGroup = 'Certificate management';


    protected static string $view = 'filament.pages.baptism';
}

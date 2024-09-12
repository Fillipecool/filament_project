<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;

class Contracts extends Page
{
    protected static ?string $navigationIcon = null; 

    protected static bool $shouldRegisterNavigation = false;

    protected static string $view = 'filament.pages.contracts';
}

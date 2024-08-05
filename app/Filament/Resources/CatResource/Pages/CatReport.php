<?php

namespace App\Filament\Resources\CatResource\Pages;

use App\Filament\Resources\CatResource;
use Filament\Resources\Pages\Page;

class CatReport extends Page
{
    protected static string $resource = CatResource::class;

    protected static string $view = 'filament.resources.cat-resource.pages.cat-report';
}

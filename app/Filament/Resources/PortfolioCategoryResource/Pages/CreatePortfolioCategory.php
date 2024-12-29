<?php

namespace App\Filament\Resources\PortfolioCategoryResource\Pages;

use App\Filament\Resources\PortfolioCategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreatePortfolioCategory extends CreateRecord
{
    protected static string $resource = PortfolioCategoryResource::class;

    protected function getRedirectUrl(): string
    {
        return static::getResource()::getUrl('index');
    }
}

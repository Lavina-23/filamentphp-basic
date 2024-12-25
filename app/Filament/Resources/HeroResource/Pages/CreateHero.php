<?php

namespace App\Filament\Resources\HeroResource\Pages;

use App\Filament\Resources\HeroResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Database\Eloquent\Model;

class CreateHero extends CreateRecord
{
    protected static string $resource = HeroResource::class;

    protected function getRedirectUrl(): string
    {
        return static::getResource()::getUrl('index');
    }

    protected function handleRecordCreation(array $data): Model
    {
        $hero = parent::handleRecordCreation($data);
        if ($hero->isActive) {
            HeroResource::getModel()::where('id', '!=', $hero->id)->update(['isActive' => false]);
        }

        return $hero;
    }
}

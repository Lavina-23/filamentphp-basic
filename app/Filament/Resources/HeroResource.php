<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HeroResource\Pages;
use App\Filament\Resources\HeroResource\RelationManagers;
use App\Models\Hero;
use Filament\Actions\DeleteAction;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class HeroResource extends Resource
{
    protected static ?string $model = Hero::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
                FileUpload::make('image'),
                TextInput::make('title')
                    ->required()
                    ->placeholder('Enter title...'),
                TextInput::make('subtitle')
                    ->required()
                    ->placeholder('Enter subtitle...'),
                TextInput::make('link1')
                    ->required()
                    ->placeholder('Enter first link...'),
                TextInput::make('link2')
                    ->required()
                    ->placeholder('Enter second link...'),
                Toggle::make('isActive')
                    ->default(false)
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                ImageColumn::make('image'),
                TextColumn::make('title')
                    ->wrap()
                    ->sortable()
                    ->searchable(),
                TextColumn::make('subtitle')
                    ->wrap()
                    ->sortable()
                    ->searchable(),
                ToggleColumn::make('isActive')
                    ->sortable()
                    ->beforeStateUpdated(function (Hero $hero, $state) {
                        Hero::where('id', '!=', $hero->id)->update(['isActive' => 0]);
                        // memilih id yang tidak sama dengan id yang dipilih lalu mengupdatenya menjadi 0 (tidak aktif)
                    }),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListHeroes::route('/'),
            'create' => Pages\CreateHero::route('/create'),
            'edit' => Pages\EditHero::route('/{record}/edit'),
        ];
    }
}

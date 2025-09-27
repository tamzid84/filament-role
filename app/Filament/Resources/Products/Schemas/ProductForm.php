<?php

namespace App\Filament\Resources\Products\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Select;   
use Filament\Forms\Components\RichEditor;
use App\Enums\StatusEnum;

class ProductForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
        ->columns(1)
            ->components([
                TextInput::make('name')->label('Name')->required()->maxLength(255),
                RichEditor::make('description')->label('Description')->required()->maxLength(65535),
                TextInput::make('price')->label('Price')->required()->numeric()->minValue(0),
                select::make('category_id')
                ->relationship('category', 'name')
                ->label('Category')
                ->searchable()->preload()->nullable(),

               select::make('tags')
                ->relationship('tags', 'name')
                ->label('Tags')
                ->multiple()
                ->searchable()->preload()->nullable(),

                select::make('status')->label('Status')
                //->options([
                //     'active' => 'Active',
                //     'inactive' => 'Inactive',
                // ])
                ->options(StatusEnum::class)
                ->default('active'),
            ]);
    }
}

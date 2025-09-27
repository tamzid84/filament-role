<?php

namespace App\Filament\Resources\Roles\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;  

class RoleForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                TextInput::make('guard_name')
                    ->required(),
                select::make('permissions')
                ->relationship('permissions', 'name')
                ->label('Permission')
                ->multiple()
                ->searchable()->preload()->nullable(),
            ]);
    }
}

<?php

namespace App\Filament\Resources\Users\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Schemas\Schema;
use Spatie\Permission\Models\Role;
class UserForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),

                TextInput::make('email')
                    ->label('Email address')
                    ->email()
                    ->unique(ignoreRecord: true)
                    ->required(),

                DateTimePicker::make('email_verified_at'),

                TextInput::make('password')
                    ->password()
                    ->dehydrateStateUsing(fn($state) => !empty($state) ? bcrypt($state) : null)
                    ->required(fn(string $context): bool => $context === 'create'),

                // 🔹 Add Role Selection using Spatie Permission
                Select::make('roles')
                    ->label('Role')
                    ->options(Role::pluck('name', 'name')) // Load roles from DB
                    ->searchable()
                    ->preload()
                    ->required()
                    ->default('Staff')
                    ->dehydrated(false) // prevent saving to 'users' table
                    ->afterStateHydrated(function ($component, $record) {
                        // 👇 Only run when editing (record exists)
                        if ($record && $record->exists) {
                            $component->state(optional($record->roles->first())->name);
                        }
                    })
                    ->saveRelationshipsUsing(function ($record, $state) {
                        // Sync selected role to pivot table
                        if ($state) {
                            $record->syncRoles([$state]);
                        }
                    })
                    ->helperText('Assign a role to this user (Admin / Manager / Staff)'),
            ]);
    }
}

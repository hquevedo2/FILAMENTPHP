<?php

namespace App\Filament\Resources\Users\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

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
                    ->required(),
                DateTimePicker::make('email_verified_at'),
                TextInput::make('password')
                    ->password()
                    ->required(),
                TextInput::make('address'),
                TextInput::make('postal_code'),
                Select::make('country_id')
                    ->relationship('country', 'name'),
                Select::make('state_id')
                    ->relationship('state', 'name'),
                Select::make('city_id')
                    ->relationship('city', 'name'),
            ]);
    }
}

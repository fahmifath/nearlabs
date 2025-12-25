<?php

namespace App\Filament\Resources\PageSections\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class PageSectionForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('page_id')
                    ->relationship('page', 'title')
                    ->required(),
                TextInput::make('section_key')
                    ->required(),
                TextInput::make('title'),
                TextInput::make('subtitle'),
                Textarea::make('content')
                    ->columnSpanFull(),
                FileUpload::make('image')
                    ->image(),
                TextInput::make('button_text'),
                TextInput::make('button_link'),
                TextInput::make('order')
                    ->required()
                    ->numeric()
                    ->default(0),
                Toggle::make('is_active')
                    ->required(),
            ]);
    }
}

<?php

namespace App\Filament\Resources\Projects\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class ProjectForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title'),

                TextInput::make('type'),
                TextInput::make('year'),
                TextInput::make('client'),
                TextInput::make('tools'),
                TextInput::make('slug'),

                TextInput::make('link'),
                TextInput::make('github'),
                 FileUpload::make('thumbnail')
                    ->image() // Memastikan yang diupload adalah gambar
                    ->directory('projects-thumbnails')
                    ->columnSpanFull(),
                Textarea::make('description')
                    ->columnSpanFull(),
                FileUpload::make('image')
                    ->multiple() // Wajib ada agar bisa pilih banyak gambar
                    ->reorderable() // Opsional: supaya urutan gambar bisa digeser-geser
                    ->image() // Memastikan yang diupload adalah gambar
                    ->directory('projects-images')
                    ->columnSpanFull(),
            ]);
    }
}

<?php

namespace App\Filament\Resources\Suppliers\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class SupplierForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nama_perusahaan')
                    ->label('Nama Perusahaan')
                    ->placeholder('Contoh: PT. Sumber Makmur')
                    ->required()
                    ->maxLength(255),
                TextInput::make('nama_kontak')
                    ->label('Nama Contact Person')
                    ->placeholder('Contoh: Budi Santoso')
                    ->required()
                    ->maxLength(255),
                TextInput::make('telepon')
                    ->label('Nomor Telepon')
                    ->placeholder('Contoh: 08123456789')
                    ->required()
                    ->maxLength(15),
                TextInput::make('email')
                    ->label('Email')
                    ->email()
                    ->placeholder('Contoh: supplier@email.com')
                    ->required()
                    ->maxLength(255),
                Textarea::make('alamat')
                    ->label('Alamat Lengkap')
                    ->placeholder('Jl. Contoh No. 123, Kota, Provinsi')
                    ->required()
                    ->rows(3)
                    ->columnSpanFull(),
                \Filament\Forms\Components\FileUpload::make('image')
                    ->label('Logo Perusahaan')
                    ->image()
                    ->directory('suppliers')
                    ->visibility('public')
                    ->required()
                    ->columnSpanFull(),
            ]);
    }
}

<?php

namespace App\Filament\Resources\Items\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class ItemForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nama_barang')
                    ->label('Nama Barang')
                    ->required()
                    ->maxLength(255),
                TextInput::make('kode_barang')
                    ->label('Kode Barang')
                    ->required()
                    ->unique(ignoreRecord: true)
                    ->maxLength(255),
                TextInput::make('stok')
                    ->label('Stok')
                    ->numeric()
                    ->minValue(0)
                    ->required(),
                TextInput::make('harga')
                    ->label('Harga')
                    ->numeric()
                    ->minValue(0)
                    ->prefix('Rp')
                    ->required(),
                \Filament\Forms\Components\Select::make('kondisi')
                    ->label('Kondisi')
                    ->options([
                        'Baik' => 'Baik',
                        'Rusak Ringan' => 'Rusak Ringan',
                        'Rusak Berat' => 'Rusak Berat',
                    ])
                    ->required(),
                \Filament\Forms\Components\Select::make('lokasi')
                    ->label('Lokasi')
                    ->options([
                        'Gudang A' => 'Gudang A',
                        'Gudang B' => 'Gudang B',
                        'Gudang C' => 'Gudang C',
                    ])
                    ->required(),
                \Filament\Forms\Components\Select::make('category_id')
                    ->relationship('category', 'nama_kategori')
                    ->required(),
                \Filament\Forms\Components\Select::make('suppliers')
                    ->multiple()
                    ->relationship('suppliers', 'nama_perusahaan')
                    ->required(),
                \Filament\Forms\Components\FileUpload::make('image')
                    ->label('Foto Barang')
                    ->image()
                    ->directory('items')
                    ->visibility('public')
                    ->required()
                    ->columnSpanFull(),
                Textarea::make('deskripsi')
                    ->label('Deskripsi Barang')
                    ->placeholder('Jelaskan detail barang ini')
                    ->required()
                    ->rows(3)
                    ->columnSpanFull(),
                \Filament\Forms\Components\Hidden::make('users_id'),
            ]);
    }
}

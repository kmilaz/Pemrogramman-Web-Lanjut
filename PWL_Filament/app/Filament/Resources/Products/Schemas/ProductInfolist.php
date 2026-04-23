<?php

namespace App\Filament\Resources\Products\Schemas;

use Filament\Infolists\Components\IconEntry;
use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Tabs;
use Filament\Schemas\Components\Tabs\Tab;
use Filament\Schemas\Schema;

class ProductInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Tabs::make('Product Tabs')
                ->tabs([
                    Tab::make('Product Details')
                        ->schema([
                            TextEntry::make('name')
                                ->label('Product Name')
                                ->weight('bold')
                                ->color('primary'),
                            TextEntry::make('id')
                                ->label('Product ID'),
                            TextEntry::make('sku')
                                ->label('Product SKU')
                                ->badge()
                                ->color(fn (?string $state): string => match (strtoupper(substr((string) $state, 0, 1))) {
                                    'A', 'B', 'C', 'D', 'E', 'F' => 'primary',
                                    'G', 'H', 'I', 'J', 'K', 'L' => 'success',
                                    'M', 'N', 'O', 'P', 'Q', 'R' => 'warning',
                                    default => 'danger',
                                }),
                            TextEntry::make('description')
                                ->label('Product Description'),
                            TextEntry::make('created_at')
                                ->label('Product Creation Date')
                                ->date('d M Y')
                                ->color('info'),
                        ]),
                    Tab::make('Product Price and Stock')
                        ->schema([
                            TextEntry::make('price')
                                ->label('Product Price')
                                ->formatStateUsing(fn ($state): string => 'Rp ' . number_format((float) $state, 0, ',', '.'))
                                ->weight('bold')                                    ->color('primary')
                                ->icon('heroicon-s-currency-dollar'),
                            TextEntry::make('stock')
                                ->label('Product Stock')
                                ->icon('heroicon-o-cube'),
                        ])
                    ])->columnSpanFull(),
                Section::make('Image and Status')
                    ->description('')
                    ->schema([
                        ImageEntry::make('image')
                            ->label('Product Image')
                            ->disk('public'),
                        TextEntry::make('price')
                            ->label('Product Price')
                            ->formatStateUsing(fn ($state): string => 'Rp ' . number_format((float) $state, 0, ',', '.'))
                            ->weight('bold')
                            ->color('primary')
                            ->icon('heroicon-s-currency-dollar'),
                        TextEntry::make('stock')
                            ->label('Product Stock')
                            ->icon('heroicon-o-cube')
                            ->weight('bold')
                            ->color('primary'),
                        IconEntry::make('is_active')
                            ->label('Is Active?')
                            ->boolean(),
                        IconEntry::make('is_featured')
                            ->label('Is Featured?')
                            ->boolean(),
                    ])
                ->columnSpanFull(),
            ]);
    }
}

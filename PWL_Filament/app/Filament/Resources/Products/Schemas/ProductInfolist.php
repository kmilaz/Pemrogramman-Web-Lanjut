<?php

namespace App\Filament\Resources\Products\Schemas;

use Filament\Infolists\Components\IconEntry;
use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\TextEntry;
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
                        ->icon('heroicon-o-information-circle')
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
                        ->icon('heroicon-o-banknotes')
                        ->badge(fn ($record): ?string => $record ? (string) $record->stock : null)
                        ->badgeColor(fn ($record): string => match (true) {
                            ! $record => 'gray',
                            $record->stock <= 0 => 'danger',
                            $record->stock <= 10 => 'warning',
                            default => 'success',
                        })
                        ->badgeIcon(fn ($record): string => match (true) {
                            ! $record => 'heroicon-o-question-mark-circle',
                            $record->stock <= 0 => 'heroicon-o-x-circle',
                            $record->stock <= 10 => 'heroicon-o-exclamation-triangle',
                            default => 'heroicon-o-check-circle',
                        })
                        ->schema([
                            TextEntry::make('price')
                                ->label('Product Price')
                                ->formatStateUsing(fn ($state): string => 'Rp ' . number_format((float) $state, 0, ',', '.'))
                                ->weight('bold')
                                ->color('primary')
                                ->icon('heroicon-s-currency-dollar'),
                            TextEntry::make('stock')
                                ->label('Product Stock')
                                ->badge()
                                ->color(fn ($state): string => match (true) {
                                    (int) $state <= 0 => 'danger',
                                    (int) $state <= 10 => 'warning',
                                    default => 'success',
                                })
                                ->icon('heroicon-o-cube'),
                        ]),
                    Tab::make('Image and Status')
                        ->icon('heroicon-o-photo')
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
                                ->badge()
                                ->color(fn ($state): string => match (true) {
                                    (int) $state <= 0 => 'danger',
                                    (int) $state <= 10 => 'warning',
                                    default => 'success',
                                })
                                ->icon('heroicon-o-cube')
                                ->weight('bold'),
                            IconEntry::make('is_active')
                                ->label('Is Active?')
                                ->boolean(),
                            IconEntry::make('is_featured')
                                ->label('Is Featured?')
                                ->boolean(),
                        ])
                    ])
                    ->columnSpanFull()
                        ->vertical(fn (): bool => request()->boolean('vertical', false)),
            ]);
    }
}

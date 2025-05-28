<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Produk', '120')
                ->description('Jumlah produk yang tersedia')
                ->descriptionIcon('heroicon-m-cube')
                ->color('success'),

            Stat::make('Total Order', '345')
                ->description('Order bulan ini')
                ->descriptionIcon('heroicon-m-shopping-cart')
                ->color('info'),

            Stat::make('User Terdaftar', '87')
                ->description('User aktif di sistem')
                ->descriptionIcon('heroicon-m-user-group')
                ->color('warning'),
        ];
    }
}

<?php

namespace App\Filament\Widgets;

use App\Models\Animal;
use App\Models\Treatment;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;

class AnimalTypeOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Cats', Animal::query()->where('type', 'cat')->count()),
            Stat::make('Dogs', Animal::query()->where('type', 'dog')->count()),
            Stat::make('Other', Animal::query()->where('type', 'other')->count()),
        ];
    }
}

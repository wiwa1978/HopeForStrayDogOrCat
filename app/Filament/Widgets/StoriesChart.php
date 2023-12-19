<?php

namespace App\Filament\Widgets;

use App\Models\Story;
use Flowframe\Trend\Trend;
use Flowframe\Trend\TrendValue;
use Filament\Widgets\ChartWidget;

class StoriesChart extends ChartWidget
{
    protected static ?string $heading = 'Stories';

    protected function getData(): array
    {
        $data = Trend::model(Story::class)
        ->between(
            start: now()->subYear(),
            end: now(),
        )
        ->perMonth()
        ->count();

    return [
        'datasets' => [
            [
                'label' => 'Stories',
                'data' => $data->map(fn (TrendValue $value) => $value->aggregate),
            ],
        ],
        'labels' => $data->map(fn (TrendValue $value) => $value->date),
    ];
    }

    protected function getType(): string
    {
        return 'line';
    }
}

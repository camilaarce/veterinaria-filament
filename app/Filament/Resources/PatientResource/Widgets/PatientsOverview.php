<?php

namespace App\Filament\Resources\PatientResource\Widgets;

use App\Models\Patient;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class PatientsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Dogs', Patient::query()->where('type', 'dog')->count()),
            Stat::make('Cats', Patient::query()->where('type', 'cat')->count()),
            Stat::make('Rabbits', Patient::query()->where('type', 'rabbit')->count()),
        ];
    }
}

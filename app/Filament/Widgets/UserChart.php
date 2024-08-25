<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;

class UserChart extends ChartWidget
{
    protected static ?string $heading = 'Chart';

    protected function getData(): array
    {
        return [
            'datasets' => [
                [
                    'label' => 'Data',
                    'data' => $this->getDataUser()
                ]
                ],
                'labels' => ['a', 'b', 'c', 'd', 'e', 'f', 'g']
        ];
    }

    protected function getType(): string
    {
        return 'bar';
    }

    protected function getDataUser(){
        return [1,2,3,4,2,1,3,4,1,2,3];
    }
}

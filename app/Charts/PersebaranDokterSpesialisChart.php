<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;
use App\Models\Rumahsakit;
class PersebaranDokterSpesialisChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\BarChart
    {
        
        $label= [
            'Kecamatan Klojen',
            'Kecamatan Kedungkandang'
        ];

        return $this->chart->barChart()
            // ->setTitle('San Francisco vs Boston.')
            // ->setSubtitle('Wins during season 2021.')
            ->setColors(['#ffc63b', '#ff6384'])
            ->addData('San Francisco', [6, 9, 3, 4, 10, 8])
            ->addData('Boston', [7, 3, 8, 2, 6, 4])
            ->addData('Boston', [7, 3, 8, 2, 6, 4])
            ->addData('Boston', [7, 3, 8, 2, 6, 4])
            ->addData('Boston', [7, 3, 8, 2, 6, 4])

            ->setXAxis(['Kota Malang', 'Kec. Turen', 'Kec. Batu', 'Kec. Pujon', 'Kec. Ngantang', 'Kec. ']);
    }
}

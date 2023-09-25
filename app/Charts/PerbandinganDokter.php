<?php

namespace App\Charts;

use App\Models\DataProfesi;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class PerbandinganDokter
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\PieChart
    {
        $perbandingan = DataProfesi::get();

        $data = [
            $perbandingan->where('dokter', 'Dokter Spesialis')->count(),
            $perbandingan->where('dokter', 'Dokter Umum')->count(),
        ];
        $label = [
            'Dokter Spesialis',
            'Dokter Umum',
        ];

        return $this->chart->pieChart()
            ->setHeight(600)
            ->setWidth(500)
            ->addData($data)
            ->setLabels($label)
            ->setColors(['#D32F2F', '#03A9F4']);
            // ->addLabel([$label]);
    }
}

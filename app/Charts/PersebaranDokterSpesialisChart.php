<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;
use App\Models\Rumahsakit;
use App\Models\DataPribadi;
use App\Models\DataProfesi;
use Illuminate\Support\Facades\DB;

class PersebaranDokterSpesialisChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\BarChart
    {
        $dokter = DataProfesi::get();
        $spesialis = [
            $dokter->where('dokter', 'Dokter Spesialis')->count(),
        ];
        // $spesialis = DataProfesi::select('data_profesis.*')
        //         ->join('data_pribadis', 'data_pribadis.krsp_kecamatan', '=', 'data_pribadis.krsp_kecamatan')
        //         ->where('data_pribadis.profesi', 'Dokter Spesialis')
        //         ->get();

        // $spesialis = DataProfesi::select('data_profesis.*')
        //         ->join('data_pribadis', 'data_profesis.krsp_kecamatan', '=', 'data_pribadis.krsp_kecamatan')
        //         ->where('data_pribadis.profesi', 'Dokter Spesialis')
        //         ->get();

        $umum = [
            $dokter->where('dokter', 'Dokter Umum')->count(),
        ];
        // dd($spesialis, $umum, $dokter);
            $label= [
            'Kecamatan Sukun',
            'Kecamatan Turen',
        ];

        return $this->chart->barChart()
            ->setTitle('Data Dokter Spesialis Per Kecamatan')
            ->setSubtitle('Season 2021.')
            ->addData('Dokter Spesialis', $spesialis)
            ->addData('Dokter Umum', $umum)
            ->setXAxis($label);
    }
}
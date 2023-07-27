<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;
use App\Models\Pribadi;

class KapalPribadiChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\PieChart
    {
        $kapalpribadi = Pribadi::get();
        $data = [
            $kapalpribadi->where('nama_kapal')->count(),
        ];
          $label = [
            'nama_kapal'
          ];   

        return $this->chart->pieChart()
            ->setTitle('data kapal pribadi')
            ->setSubtitle('Season 2023.')
            ->addData($data)
            ->setLabels($label);
    }
}

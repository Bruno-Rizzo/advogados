<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;
use App\Models\Book;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class LawyerMonth
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\BarChart
    {
        $upName = Auth::user()->prisionalUnit->acronym;
        $upId   = Auth::user()->prisionalUnit->id;
        return $this->chart->barChart()
            ->setTitle('Atendimestos de Advogados por Mês')
            ->setColors(['#00808E'])
            ->addData($upName ,
                    [
                        \App\Models\Book::whereMonth('created_at',1) ->whereYear('created_at', Carbon::now()->year)->where('prisional_unit_id', $upId)->count(),
                        \App\Models\Book::whereMonth('created_at',2) ->whereYear('created_at', Carbon::now()->year)->where('prisional_unit_id', $upId)->count(),
                        \App\Models\Book::whereMonth('created_at',3) ->whereYear('created_at', Carbon::now()->year)->where('prisional_unit_id', $upId)->count(),
                        \App\Models\Book::whereMonth('created_at',4) ->whereYear('created_at', Carbon::now()->year)->where('prisional_unit_id', $upId)->count(),
                        \App\Models\Book::whereMonth('created_at',5) ->whereYear('created_at', Carbon::now()->year)->where('prisional_unit_id', $upId)->count(),
                        \App\Models\Book::whereMonth('created_at',6) ->whereYear('created_at', Carbon::now()->year)->where('prisional_unit_id', $upId)->count(),
                        \App\Models\Book::whereMonth('created_at',7) ->whereYear('created_at', Carbon::now()->year)->where('prisional_unit_id', $upId)->count(),
                        \App\Models\Book::whereMonth('created_at',8) ->whereYear('created_at', Carbon::now()->year)->where('prisional_unit_id', $upId)->count(),
                        \App\Models\Book::whereMonth('created_at',9) ->whereYear('created_at', Carbon::now()->year)->where('prisional_unit_id', $upId)->count(),
                        \App\Models\Book::whereMonth('created_at',10)->whereYear('created_at', Carbon::now()->year)->where('prisional_unit_id', $upId)->count(),
                        \App\Models\Book::whereMonth('created_at',11)->whereYear('created_at', Carbon::now()->year)->where('prisional_unit_id', $upId)->count(),
                        \App\Models\Book::whereMonth('created_at',12)->whereYear('created_at', Carbon::now()->year)->where('prisional_unit_id', $upId)->count(),

            ])
            ->setXAxis([
                'Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun',
                'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez'
            ]);
    }
}

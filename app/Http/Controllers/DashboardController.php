<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Charts\LawyerMonth;
use App\Models\Book;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(LawyerMonth $chart)
    {
        $upId  = Auth::user()->prisionalUnit->id;
        $total = Book::whereYear('created_at', Carbon::now()->year)->where('prisional_unit_id', $upId)->count();
        return view('dashboard', compact('total'), ['chart' => $chart->build()]);
    }
}

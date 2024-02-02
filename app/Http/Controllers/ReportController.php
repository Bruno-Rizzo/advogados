<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\User;
use App\Models\Book;
use App\Models\PrisionalUnit;
use Illuminate\Support\Facades\Auth;
use PDF;
Use Carbon\Carbon;

class ReportController extends Controller
{

    public function index()
    {
        $this->authorize('report', App\Models\Book::class);
        $units = PrisionalUnit::orderBy('name')->get();
        return view('reports.index', compact('units'));
    }

    public function show()
    {
        $users = User::all();
        $pdf = PDF::loadView('reports.show_users',compact('users'))->setPaper('a4','portrait');
        return $pdf->stream('lista_de_usuarios.pdf');
    }

    public function lawyer_unit_prisional(Request $request)
    {
        $dateInitial = Carbon::createFromFormat('Y-m-d', $request->date_initial)->startOfDay();
        $dateFinal   = Carbon::createFromFormat('Y-m-d', $request->date_final)->endOfDay();

        $data = Book::whereBetween('created_at',[$dateInitial , $dateFinal])
                    ->where('prisional_unit_id',$request->prisional_unit_id)
                    ->get();

        $pdf = PDF::loadView('reports.lawyer_unit_prisional',compact('data'))->setPaper('a4','landscape');
        return $pdf->stream('advogados_por_unidade_prisional.pdf');
    }

    public function lawyer_prisioner(Request $request)
    {
        $dateInitial = Carbon::createFromFormat('Y-m-d', $request->date_initial)->startOfDay();
        $dateFinal   = Carbon::createFromFormat('Y-m-d', $request->date_final)->endOfDay();

        $data = Book::whereBetween('created_at',[$dateInitial , $dateFinal])
                    ->where('prisional_unit_id',$request->prisional_unit_id)
                    ->where('prisioner','LIKE',"%{$request->prisioner}%")
                    ->get();

        $pdf = PDF::loadView('reports.lawyer_unit_prisional',compact('data'))->setPaper('a4','landscape');
        return $pdf->stream('advogados_por_unidade_prisional.pdf');
    }

    public function lawyer_service(Request $request)
    {
        $dateInitial = Carbon::createFromFormat('Y-m-d', $request->date_initial)->startOfDay();
        $dateFinal   = Carbon::createFromFormat('Y-m-d', $request->date_final)->endOfDay();


        if($request->adv_name)
        {
            $data = Book::whereBetween('created_at',[$dateInitial , $dateFinal])
                        ->where('adv_name','LIKE',"%{$request->adv_name}%")
                        ->get();
        }
        elseif($request->oab_number)
        {
            $data = Book::whereBetween('created_at',[$dateInitial , $dateFinal])
                        ->where('oab_number',$request->oab_number)
                        ->get();
        }
        else
        {
            return Redirect::route('reports.index');
        }

            $pdf = PDF::loadView('reports.lawyer_service',compact('data'))->setPaper('a4','landscape');
            return $pdf->stream('atendimentos_de_advogado.pdf');
    }

    public function book_date(Request $request)
    {
        if(Auth::user()->role->hasPermission('pesquisa-unidade'))
        {
        $date = $request->date;
        $up   = PrisionalUnit::where('id',$request->prisional_unit_id)->first();
        $data = Book::whereDate('created_at',$request->date)
                    ->where('prisional_unit_id',$request->prisional_unit_id)
                    ->get();

        $pdf = PDF::loadView('reports.book_date',compact('data','date','up'))->setPaper('a4','landscape');
        return $pdf->stream('livro_por_data.pdf');
        }

        $date = $request->date;
        $userUp = Auth::user()->prisional_unit_id;
        $up  = PrisionalUnit::where('id', $userUp)->first();
        $prisional_unit =  $userUp;

        $data = Book::whereDate('created_at', $date)
                    ->where('prisional_unit_id', $userUp)
                     ->get();

        $pdf = PDF::loadView('reports.book_date',compact('data','date','up'))->setPaper('a4','landscape');
        return $pdf->stream('livro_por_data.pdf');

    }

}

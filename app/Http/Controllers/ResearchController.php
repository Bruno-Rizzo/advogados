<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use App\Models\PrisionalUnit;
use App\Models\Book;
use Alert;
use DB;

class ResearchController extends Controller
{
    public function index()
    {
        $this->authorize('research', App\Models\Book::class);
        if(Auth::user()->role->hasPermission('pesquisa-unidade'))
        {
            $units = PrisionalUnit::orderBy('name')->get();
            return view('researchs.index', compact('units'));
        }
        return view('researchs.index');

    }

    public function search(Request $request)
    {
        $this->authorize('research', App\Models\Book::class);

        if(Auth::user()->role->hasPermission('pesquisa-unidade'))
        {
        $up             = PrisionalUnit::where('id', $request->prisional_unit_id)->first();
        $prisional_unit = $request->prisional_unit_id;
        $date           = $request->date;

        $books = Book::where('prisional_unit_id',  $prisional_unit)
                     ->whereDate('created_at',  $date)
                     ->get();

        return view ('researchs.list', compact('books','up','prisional_unit','date'));
        }

        $userUp = Auth::user()->prisional_unit_id;
        $up  = PrisionalUnit::where('id', $userUp)->first();
        $prisional_unit =  $userUp;
        $date  = $request->date;

        $books = Book::where('prisional_unit_id',  $userUp)
                     ->whereDate('created_at',  $date)
                     ->get();

        return view ('researchs.list', compact('books','up','prisional_unit','date'));
    }

    public function edit(Book $book)
    {
        $this->authorize('research_edit', App\Models\Book::class);
        return view('researchs.edit',compact('book'));
    }

    public function update(Request $request, Book $book)
    {
        $data = $request->all();
        Book::find($book->id)->update($data);

        Alert::toast('Livro editado!', 'success');
        return Redirect::route('researchs.index');
    }

}

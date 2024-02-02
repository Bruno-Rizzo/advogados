<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use App\Models\Book;
use App\Http\Requests\BookStore;
use Alert;

class BookController extends Controller
{

    public function index()
    {
        $this->authorize('view', App\Models\Book::class);
        $unit  = Auth::user()->prisional_unit_id;
        $books = Book::where('prisional_unit_id', $unit)
                     ->whereDate('created_at', Now()->format('Y-m-d'))
                     ->get();
        return view ('books.index', compact('books'));
    }

    public function create()
    {
        $this->authorize('create', App\Models\Book::class);
        return view ('books.create');
    }

    public function store(BookStore $request)
    {
        $this->authorize('create', App\Models\Book::class);
        $books = $request->validated();

        $books['user_id'] = Auth::id();
        $books['prisional_unit_id'] = Auth::user()->prisional_unit_id;
        Book::create($books);

        Alert::toast('Registro cadastrado!', 'success');
        return Redirect::route('books.index');
    }

    public function edit(Book $book)
    {
        $this->authorize('update', App\Models\Book::class);
        return view('books.edit',compact('book'));
    }

    public function update(Request $request, Book $book)
    {
        $this->authorize('update', App\Models\Book::class);
        $books = $request->all();
        Book::find($book->id)->update($books);

        Alert::toast('Registro editado!', 'success');
        return Redirect::route('books.index');
    }

    public function lawyer_month_chart(LawyerMonth $chart)
    {
        return view('dashboard', ['chart' => $chart->build()]);
    }

}

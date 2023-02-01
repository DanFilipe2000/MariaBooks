<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function dashboard()
    {
        $user = auth()->user();

        $books = Book::where('user_id', $user->id)->get();

        return view('dashboard', compact('books'));
    }

    public function store(Request $request)
    {
        $user = auth()->user();

        $attributes = $request->only([
            'title',
            'autor',
            'company' => 'null',
            'gender' => 'null',
            'status'
        ]);

        $attributes['user_id'] = $user->id;

        Book::create($attributes);

        return redirect('/dashboard')->with('success', 'Livro inserido com sucesso');
    }

    public function show(Book $book)
    {
        //
    }

    public function edit(Book $book)
    {
        //
    }

    public function update(Request $request, Book $book)
    {
        //
    }

    public function destroy(Book $book)
    {
        //
    }
}

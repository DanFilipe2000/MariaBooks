<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function dashboard()
    {
        return view('dashboard');
    }

    public function create(Request $request)
    {
        $user = auth()->user();

        $attributes = $request->only([
            'title',
            'autor',
            'company',
            'gender',
            'status'
        ]);

        $attributes['user_id'] = $user->id;

        Book::create($attributes);

        return redirect('/dashboard')->with('success', 'Livro inserido com sucesso');
    }

    public function store(Request $request)
    {
        //
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

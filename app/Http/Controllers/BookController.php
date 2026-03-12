<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index(Request $request) {
        if ($request->has('favorites')) {
            $books = Book::where('is_favorite', true)->get();
        } else {
            $books = Book::all();
        }

        return view('books.index', compact('books'));
    }
    
    public function create() {
        return view('books.create');
    }
    
    public function store(Request $request) {
        $data = $request->validate([
            'title' => 'required|string',
            'author' => 'required|string',
            'year' => 'nullable|integer',
            'pages' => 'nullable|integer',
            'genre' => 'nullable|string',
            'review' => 'nullable|string',
            'rating' => 'nullable|integer|min:1|max:5',
            'is_favorite' => 'nullable|boolean', 
        ]);

        $data['is_favorite'] = $request->has('is_favorite') ? 1 : 0;

        Book::create($data);

        return redirect(route('books.index'))->with('success', 'Nova uspomena je sačuvana na policu!');
    }

    public function edit(Book $book) {
        return view('books.edit', compact('book'));
    }

    public function update(Book $book, Request $request) {
        $data = $request->validate([
            'title' => 'required|string',
            'author' => 'required|string',
            'year' => 'nullable|integer',
            'pages' => 'nullable|integer',
            'genre' => 'nullable|string',
            'review' => 'nullable|string',
            'rating' => 'nullable|integer|min:1|max:5',
            'is_favorite' => 'nullable|boolean',
        ]);

        $data['is_favorite'] = $request->has('is_favorite') ? 1 : 0;

        $book->update($data);
        
        return redirect(route('books.index'))->with('success', 'Zapis u PersoLib-u je uspešno ažuriran!');
    }

    public function destroy(Book $book) {
        $book->delete();

        return redirect()->route('books.index')->with('success', 'Knjiga je uklonjena iz vaše arhive.');
    }
}
<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Http\Resources\BookResource;
use Illuminate\Http\Request;

class controllerBook extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Book::query();

        if ($request->filled('titulo')) {
            $query->where('titulo', 'like', '%' . $request->input('titulo') . '%');
        }

        if ($request->filled('ISNB')) {
            $query->where('ISNB', 'like', '%' . $request->input('ISNB') . '%');
        }

        if ($request->filled('estado')) {
            $query->where('estado', $request->input('estado'));
        }

        $books = $query->paginate(10)->withQueryString();

        return BookResource::collection($books);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'titulo' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
            'ISNB' => 'nullable|string|max:100',
            'copias_totales' => 'nullable|integer|min:0',
            'copias_disponibles' => 'nullable|integer|min:0',
            'estado' => 'nullable|string|max:50',
        ]);

        $book = Book::create($data);

        return (new BookResource($book))->response()->setStatusCode(201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        return new BookResource($book);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookLend\CreateRequest;
use App\Http\Resources\BookCollection;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index() {
        $book = Book::all();
        return new BookCollection($book);
    }

    public function create(CreateRequest $request) {
        $book = Book::insert($request->all());
        return response()->json(['book' => $book], 201);
    }
}

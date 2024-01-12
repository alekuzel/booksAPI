<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class LibController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Book::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required|string|between:1,120',
            'author'=>'required|string|between:1,120',
            'year'=>'required|integer',
            'haveread'=>'required|boolean'
        ]);
        return Book::create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $lib)
    {
        return Book::find($lib);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $lib)
    {
        $request->validate([
            'title'=>'required|string|between:1,120',
            'author'=>'required|string|between:1,120',
            'year'=>'required|integer',
            'haveread'=>'required|boolean'
        ]);
        return $lib->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $lib)
    {
        return $lib->delete();
    }
}

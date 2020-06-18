<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

use App\Book;


class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $books = Book::all();

        return view('books.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('books.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        // validation
        $request->validate($this->rulesValidation());

        // save a new book on DB
        $book = new Book();
        // fillable method
        $book->fill($data);

        // no fillable method
        // $book->title = $data['title'];
        // $book->author = $data['author'];
        // $book->editor = $data['editor'];
        // $book->genre = $data['genre'];
        // $book->description = $data['description'];
        // $book->pages = $data['pages'];

        // saved result
        $saved = $book->save();

        // redirect to show route
        if ($saved) {
            $newBook = Book::find($book->id);
            return redirect()->route('books.show', $newBook);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        return view('books.show', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        return view('books.edit', compact('book'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
        $data = $request->all();

        // validation
        $request->validate($this->rulesValidation($book->id));

        // update data on DB
        $updated = $book->update($data);

        // redirect
        if($updated) {
            return redirect()->route('books.show', $book->id);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * Utilities
     */

    // validations rules
    private function rulesValidation($id = null) {
        return [
            'title' => [
                'required',
                Rule::unique('books')->ignore($id)
            ],
            'author' => 'required',
            'editor' => 'required',
            'genre' => 'required',
            'description' => 'required',
            'pages' => [
                'required',
                'numeric'
                ] 
        ];
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AuthorsBook;
use App\Models\Authors;
use App\Models\Books;
use Illuminate\Support\Facades\DB;

class AuthorsBookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $authors = Authors::all();
        $books = Books::all();
        $assign = Authors::join('authors_books','authors_books.author_id','=','authors.id')
        ->join('books','books.id','=','authors_books.book_id')
        ->select('authors_books.id','authors_books.author_id','authors_books.book_id','authors.first_name','authors.last_name','books.title')
        ->get();
        //return $assign;
        //$assign = DB::table('authors')
        //->join('authors_books','authors_books.author_id','=','authors.id')
        //->leftjoin('books','books.id','=','authors_books.book_id')
        
        return view('authors_book.index')->with('assign',$assign)->with('authors',$authors)->with('books',$books);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'author' => 'required',
            'book' => 'required'
        ]);

        $assign = new AuthorsBook();
        $assign->author_id = $request->input('author');
        $assign->book_id = $request->input('book');
        $assign->save();
        return redirect('/authorsBook')->with('success','Successfully Added!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'author' => 'required',
            'book' => 'required'
        ]);

        $update = AuthorsBook::find($id);
        $update->author_id = $request->input('author');
        $update->book_id = $request->input('book');
        $update->save();
        return redirect('/authorsBook')->with('success','Successfully Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $assign = AuthorsBook::find($id);
        $assign->delete();
        return redirect('/authorsBook')->with('success','Successfully Removed!');
    }
}

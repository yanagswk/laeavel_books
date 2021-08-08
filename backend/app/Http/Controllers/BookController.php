<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Http\Requests\BookRequest;

class BookController extends Controller
{
    /**
     * 一覧表示
     * @method get
     */
    public function index()
    {
        // 本情報取得
        $books = Book::all();
        return view('books.index')->with(['books' => $books]);
    }


    /**
     * 新規追加
     * @param object $request formから送信された値
     */
    public function create(BookRequest $request)
    {
        $book = new Book;
        $book->book_name = $request->book_name;
        $book->author = $request->author;
        $book->likes = $request->likes;
        $book->save();

        return redirect()->route('books.index');
    }


    /**
     * 詳細表示
     * @param int $id bookのid
     * @method get
     */
    public function detail($id)
    {
        // dd($id);
        $book = Book::find($id);
        return view('books.detail')->with(['book' => $book]);
    }


    /**
     * 更新処理
     * @param　object $request formから送信された値
     * @method post
     */
    public function update(BookRequest $request)
    {
        $book = Book::find($request->book_id);
        $book->book_name = $request->book_name;
        $book->author = $request->author;
        $book->likes = $request->likes;
        $book->save();

        return redirect()->route('books.index');
    }


    /**
     * 削除処理
     * @param
     * @method post
     */
    // public function delete(Request $request, $id)
    public function delete($id)
    {
        $book = Book::find($id);
        $book->delete();

        return redirect()->route('books.index');
    }

}

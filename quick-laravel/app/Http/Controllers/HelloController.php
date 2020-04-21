<?php
/**
 * HelloController
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class HelloController extends Controller
{
    /**
     * 一覧の取得＆表示
     * @return view
     */
    public function list()
    {
        // booksテーブルから全行を取得
        $data = [
            'records' => Book::all()
        ];

        return view('hello.list', $data);
    }
}

<?php
/**
 * SaveController
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class SaveController extends Controller
{
    /**
     * 入力フォームの生成
     * @return view
     */
    public function create()
    {
        return view('save.create');
    }

    /**
     * フォームからの入力値をデータベースに登録
     * @param Request $req
     * @return redirect
     */
    public function store(Request $req)
    {
        // 入力値チェック
        $this->validate($req, Book::$rules);

        $b = new Book();
        // ワンタイムトークンは除外して登録
        $b->fill($req->except('_token'))->save();

//        return redirect('save/create');
        return redirect('hello/list'); // 一覧へ戻る
    }

    /**
     * 指定された書籍情報を取得
     * @param int $id
     * @return view
     */
    public function edit($id)
    {
        return view('save.edit', [
            'b' => Book::findOrFail($id)
        ]);
    }

    /**
     * 入力値でデータを更新＆保存
     * @param Request $req
     * @param int $id
     * @return redirect
     */
    public function update(Request $req, $id)
    {
        // 入力値チェック
        $this->validate($req, Book::$rules);

        $b = Book::find($id);
        // ワンタイムトークン、HTTPリクエストメソッドは除外して登録
        $b->fill($req->except('_token', '_method'))->save();

        return redirect('hello/list');
    }

    /**
     * 指定された削除する書籍情報を取得
     * @param int $id
     * @return view
     */
    public function show($id)
    {
        return view('save.show', [
            'b' => Book::findOrFail($id)
        ]);
    }

    /**
     * 指定された書籍情報を削除
     * @param int $id
     * @return redirect
     */
    public function destroy($id)
    {
        $b = Book::findOrFail($id);
        $b->delete();

        return redirect('hello/list');
    }
}

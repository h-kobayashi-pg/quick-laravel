@extends('layouts.base')
@section('title', '書籍情報フォーム')
@section('main')
@if(count($errors) > 0)
    <ul>
        @foreach($errors->all() as $err)
            <li class="text-danger">{{$err}}</li>
        @endforeach
    </ul>
@endif
<form action="/save/store" method="post">
    @csrf
    <div class="pl-2">
        <label id="isbn">ISBNコード：</label><br>
        <input id="isbn" type="text" name="isbn" size="15" value="{{old('isbn')}}">
    </div>
    <div class="pl-2">
        <label id="title">書名：</label><br>
        <input id="title" type="text" name="title" size="30" value="{{old('title')}}">
    </div>
    <div class="pl-2">
        <label id="price">価格：</label><br>
        <input id="price" type="text" name="price" size="5" value="{{old('price')}}">
    </div>
    <div class="pl-2">
        <label id="publisher">出版社：</label><br>
        <input id="publisher" type="text" name="publisher" size="10" value="{{old('publisher')}}">
    </div>
    <div class="pl-2">
        <label id="published">刊行日：</label><br>
        <input id="published" type="text" name="published" size="10" value="{{old('published')}}">
    </div>
    <div class="pl-2">
        <input type="submit" value="送信">
    </div>
</form>
@endsection

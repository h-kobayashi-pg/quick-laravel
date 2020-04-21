<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>速習Laravel</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>
    <body>
        <a href="/save/create">新規</a>
        <table class="table">
            <tr>
                <th>書名</th>
                <th>価格</th>
                <th>出版社</th>
                <th>刊行日</th>
                <th></th>
            </tr>
            @foreach ($records as $record)
            <tr>
                <td>{{$record->title}}</td>
                <td>{{$record->price}}</td>
                <td>{{$record->publisher}}</td>
                <td>{{$record->published}}</td>
                <td>
                    <a href="/save/{{$record->id}}/edit">編集</a>|<a href="/save/{{$record->id}}">削除</a>
                </td>
            </tr>
            @endforeach
        </table>
    </body>
</html>

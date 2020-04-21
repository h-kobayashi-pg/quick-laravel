<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>@yield('title')</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>
    <body>
        <img src="https://wings.msn.to/image/wings.jpg" title="ロゴ" />
        <hr>
        @section('main')
        <p>既定のコンテンツです。</p>
        @show
        <hr>
        <p>Copyright(c) 1998-2019,WINGS Project. All Right Reserved.</p>
    </body>
</html>

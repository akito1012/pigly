<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PiGLy</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/index_header.css') }}">
    @yield('css')
</head>
<body>
    <div class="pigly__header">
        <h1 class="header__title">PiGLy</h1>
        <a href="" class="change link">目標体重設定</a>
        <a href="" class="logout">ログアウト</a>
    </div>
    @yield('content')
</body>
</html>
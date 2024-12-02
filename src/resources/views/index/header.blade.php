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
    @livewireStyles
</head>
<body>
    <div class="pigly__header">
        <h1 class="header__title">PiGLy</h1>
<<<<<<< HEAD
        <form action="/weight_logs/goal_setting" class="header__form" method="post">
            <a href="/weight_logs/goal_setting" class="change link">目標体重設定</a>
        </form>
            <a href="/logout" class="logout">ログアウト</a>
=======
        <a href="/login" class="change link">目標体重設定</a>
        <a href="/logout" class="logout">ログアウト</a>
>>>>>>> 5892bd1aa6abae8dc313f71a32aef03821ba2dd1
    </div>
    @yield('content')
    
</body>
</html>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PiGLy</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/members/app.css') }}">
    @yield('css')
</head>
<body>
    <div class="member">
        <div class="member__title">
            <h1 class="member__header">PiGLy</h1>
        </div>
        @yield('form')
    </div>
</body>
</html>
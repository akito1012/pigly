@extends('members.layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/members/user_login.css') }}">
@endsection

@section('form')

<h2 class="content">ログイン</h2>
<div class="login__inner">
    <form action="/login" class="login__form" method="post">
        @csrf
        <div class="login__item">
            <label for="email" class="login__label">メールアドレス</label>
            <input type="email" class="login__input" id="email" name="email" value="{{ old('email') }}" placeholder="メールアドレスを入力" />
        </div>
        <div class="error">
            @error('email')
            {{ $message }}
            @enderror
        </div>
        <div class="login__item">
            <label for="password" class="login__label">パスワード</label>
            <input type="text" class="login__input" id="password" name="password" placeholder="パスワードを入力してください" />
        </div>
        <div class="error">
            @error('password')
            {{ $message }}
            @enderror
        </div>
        <div class="login__button">
            <button class="login__button-submit" type="submit">ログイン</button>
        </div>
    </form>
    <div class="register__link">
        <a href="/register/step1">アカウント作成はこちら</a>
    </div>
</div>

@endsection
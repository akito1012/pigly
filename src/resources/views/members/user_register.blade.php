@extends('members.layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/members/user_register.css') }}">
@endsection

@section('form')

<h2 class="content">新規会員登録</h2>
<h3 class="step1">アカウント情報の登録</h3>
<div class="register__inner">
    <form action="/register/step1" class="register__form" method="post">
        @csrf
        <div class="register__item">
            <label for="name" class="input__label">お名前</label>
            <input type="text" class="input__item" id="name" name="name" value="{{ old('name') }}" placeholder="名前を入力" />
        </div>
        <div class="error">
            @error('name')
            {{ $message }}
            @enderror
        </div>
        <div class="register__item">
            <label for="email" class="input__label">メールアドレス</label>
            <input type="email" class="input__item" id="email" name="email" value="{{ old('email') }}" placeholder="メールアドレスを入力" />
        </div>
        <div class="error">
            @error('email')
            {{ $message }}
            @enderror
        </div>
        <div class="register__item">
            <label for="password" class="input__label">パスワード</label>
            <input type="password" class="input__item" id="password" name="password"  placeholder="パスワードを入力してください" />
        </div>
        <div class="error">
            @error('password')
            {{ $message }}
            @enderror
        </div>
        <div class="register__button">
            <button class="register__button-submit" type="submit">次に進む</button>
        </div>
    </form>
    <div class="login__link">
        <a href="/login">ログインはこちら</a>
    </div>
</div>

@endsection
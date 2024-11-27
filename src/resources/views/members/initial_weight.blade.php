@extends('members.layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/members/initial_weight.css') }}">
@endsection

@section('form')

<h2 class="content">新規会員登録</h2>
<h3 class="step2">体重データの入力</h3>
<div class="initial__inner">
    <form action="weight_logs" class="initial__form" method="post">
        @csrf
        <div class="initial__item">
            <label for="current_weight" class="initial__label">現在の体重</label>
            <input type="text" class="initial__input" id="current_weight" name="weight" value="{{ old('weight') }}" placeholder="現在の体重を入力">
        </div>
        <div class="error">error</div>
        <div class="initial__item">
            <label for="target_weight" class="initial__label">目標体重</label>
            <input type="text" class="initial__input" id="target_weight" name="target_weight" value="{{ old('target_weight') }}"  placeholder="目標体重を入力">
        </div>
        <div class="error">error</div>
        <div class="initial__button">
            <button class="initial__button-submit" type="submit">アカウント作成</button>
        </div>
    </form>
</div>

@endsection

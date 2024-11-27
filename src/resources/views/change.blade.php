@extends('index.header')

@section('css')
<link rel="stylesheet" href="{{ asset('css/change.css') }}">
@endsection

@section('content')

<div class="chang">
    <h2 class="change__header">目標体重設定</h2>
    <form action="" class="change__form">
        <div class="change__item">
        <input type="text" class="change input" name="weight" placeholder="46.5">kg
    </div>
    <div class="change__button">
        <button class="back__button" type="submit" value="back">戻る</button>
        <button class="update__button" type="submit">更新</button>
    </div>
    </form>
</div>

@endsection
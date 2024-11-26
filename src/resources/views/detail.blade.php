@extends('index.header')

@section('css')
<link rel="stylesheet" href="{{ asset('css/detail.css') }}">
@endsection

@section('content')

<div class="detail">
    <h2 class="detail__header">Weight Log</h2>
    <div class="detail__inner">
        <form action="" class="detail__form">
            <div class="detail__item">
                <label for="date" class="detail label">日付</label>
                <input type="date" class="detail input" id="date" name="date">
            </div>
            <div class="error">error</div>
            <div class="detail__item">
                <label for="weight" class="detail label">体重</label>
                <input type="text" class="detail input" id="weight" name="weight" placeholder="50.0">kg
            </div>
            <div class="error">error</div>
            <div class="detail__item">
                <label for="cal" class="detail label">摂取カロリー</label>
                <input type="text" class="detail input" id="cal" name="cal" placeholder="1200">cal
            </div>
            <div class="error">error</div>
            <div class="detail__item">
                <label for="motion_time" class="detail label">運動時間</label>
                <input type="text" class="detail input" id="motion_time" name="motion_time" placeholder="00:00">
            </div>
            <div class="error">error</div>
            <div class="detail__item">
                <label for="motion_inner" class="detail label"></label>
                <textarea name="motion_inner" id="motion_inner" class="detail textarea"cols="30" row="4" placeholder="運動内容を追加"></textarea>
            </div>
            <div class="error">error</div>
            <div class="detail__button">
                <button class="back__button" type="submit" value="back">戻る</button>
                <button class="update__button" type="submit">更新</button>
                <button class="delete__button" type="submit"><img src="{{ asset('images/gomibako.jpeg') }}" alt="gomibako"></button>
            </div>
        </form>
    </div>
</div>

@endsection
@extends('index.header')

@section('css')
<link rel="stylesheet" href="{{ asset('css/change.css') }}">
@endsection

@section('content')

<div class="management">
    <table class="weighting__table">
        <form action="/weight_logs" class="weighting__form" method="post">
            @csrf
            <tr class="weighting__row">
                <th class="weighting__header">目標体重</th>
                <td class="weighting__date"><input type="text" class="weighting__input"></td>
                <th class="weighting__header">目標まで</th>
                <td class="weighting__date"><input type="text" class="weighting__input"></td>
                <th class="weighting__header">最新体重</th>
                <td class="weighting__date"><input type="text" class="weighting__input"></td>
            </tr>
        </form>
    </table>
    <table class="search__table">
        <tr class="search__table-row">
            <td class="search__table-content">
                <form action="/weight_logs/search" class="search__form" method="post">
                    @csrf
                    <input type="date" class="search__item" placeholder="日付">
                    <input type="date" class="search__item" placeholder="日付">
                    <button class="search__button">検索</button>
                </form>
            </td>
            <td class="create__button">
                <a href="/weight_logs/create">
                    <button class="create__button">データ追加</button>
                </a>
            </td>
        </tr>
        <form action="/weight_logs/search" class="search__form" method="post">
            <tr class="search__table-row">
                <th class="search__table-header">日付</th>
                <th class="search__table-header">体重</th>
                <th class="search__table-header">食事摂取カロリー</th>
                <th class="search__table-header">運動時間</th>
                <th class="search__table-header"></th>
            </tr>
            <tr class="search__table-row">
                @foreach ($weight_logs as $weight_log)
                <td class="search__table-date">{{$weight_log->date}}</td>
                <td class="search__table-date">{{$weight_log->weight}}</td>
                <td class="search__table-date">{{$weight_log->calories}}cal</td>
                <td class="search__table-date">{{$weight_log->exercise_time}}</td>
                <td class="search__table-date">
                    <a href="/detail" class="detail__link">
                        <img src="{{ asset('images/edit_icon-icons.com_61193.png') }}" alt="鉛筆">
                    </a>
                </td>
                @endforeach
            </tr>
        </form>
    </table>
    <div class="pagination">pagination</div>
</div>

@endsection
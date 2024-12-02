<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/create.css') }}">
</head>
<body>
    <div class="create">
        <form action="/weight_logs/create" class="create__form" method="post">
            @csrf
            <div class="create__content">
                <header class="create__header">Weight Logを追加</header>
                <label for="date" class="input__label">
                    日付<span class="required">必須</span>
                </label>
                <input type="date" class="create__input" id="date" name="date" value="date">
                <div class="error">
                    @error('date')
                    {{ message }}
                    @enderror
                </div>
                <label for="weight" class="input__label">
                    体重<span class="required">必須</span>
                </label>
                <input type="text" class="create__input" id="weight" name="weight" value="weight">
                <div class="error">
                    @error('weight')
                    {{ message }}
                    @enderror
                </div>
                <label for="calories" class="input__label">
                    摂取カロリー<span class="required">必須</span>
                </label>
                <input type="text" class="create__input" id="calories" name="calories" value="calories">
                <div class="error">
                    @error('calories')
                    {{ message }}
                    @enderror
                </div>
                <label for="exercise_time" class="input__label">
                    運動時間<span class="required">必須</span>
                </label>
                <input type="text" class="create__input" id="exercise_time" name="exercise_time" value="exercise_time">
                <div class="error">
                    @error('exercise_time')
                    {{ message }}
                    @enderror
                </div>
                <label for="exercise_content" class="input__label">
                    運動内容
                </label>
                <textarea name="exercise_content" id="exercise_content" class="create__textarea" value="exercise_content" cols="30" row="4"></textarea>
            </div>
            <div class="create__button">
                <button class="back__button" type="submit" name="back" value="back">戻る</button>
                <button class="create__button" type="submit">登録</button>
            </div>
        </form>
    </div>
</body>
</html>
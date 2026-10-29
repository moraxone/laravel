@extends('layouts.app')
@section('title', 'Кабинет журналиста')

@section('content')
<h2>Написать новость</h2>
<div class="card">
    <form>
        <label>Заголовок</label>
        <input type="text" placeholder="Введите заголовок">

        <label>Категория</label>
        <input type="text" placeholder="Например, технологии">

        <label>Текст новости</label>
        <textarea rows="8" placeholder="Введите текст статьи"></textarea>

        <button type="button">Опубликовать</button>
    </form>
</div>
@endsection
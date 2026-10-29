@extends('layouts.app')
@section('title', 'Администрирование')

@section('content')
<h2>Панель администратора</h2>
<div class="card">
    <h3>Управление статьями</h3>
    <p>Новые технологии меняют мир</p>
    <button type="button">Редактировать</button>
    <button type="button">Удалить</button>
</div>
<div class="card">
    <h3>Управление пользователями</h3>
    <label>Роль пользователя</label>
    <select>
        <option>Пользователь</option>
        <option>Журналист</option>
        <option>Администратор</option>
    </select>
    <button type="button">Изменить роль</button>
</div>
@endsection

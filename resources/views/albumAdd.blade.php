@extends('layouts.main')
@section('content')
    <div class="container">
        <div class="profile">
            <h1 class="profile__name">Добавить книгу</h1>
            <div class="profile__notes">
                <form class="profile__form" action="{{ route('album-add') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="text" name="name" placeholder="Введите название">
                    <input type="text" name="author" placeholder="Введите ФИО автора">
                    <textarea style="width: 100%; height: 20vh;" name="description" cols="30" rows="10" placeholder="Описание"></textarea>
                    <input type="file" name="image">
                    <button type="submit" class="profile__form-btn">Отправить</button>
                </form>
            </div>
        </div>
    </div>
@endsection

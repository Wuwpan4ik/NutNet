@extends('layouts.main')
@section('title', 'Добавить альбом')
@section('content')
    <div class="container">
        <div class="profile">
            <h1 class="profile__name">Добавить альбом</h1>
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
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
@endsection

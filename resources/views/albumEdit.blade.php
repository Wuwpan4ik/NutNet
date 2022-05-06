@extends('layouts.main')
@section('content')
    <div class="container">
        <div class="profile">
            <h1 class="profile__name">Изменить альбом</h1>
            <div class="profile__notes">
                <form class="profile__form" action="{{ route('album-edit') }}" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="{{ $album->id }}">
                    <input type="text" name="name" value="{{ $album->name }}">
                    <input type="text" name="author" value="{{ $album->author }}">
                    <textarea style="width: 100%; height: 20vh;" name="description" cols="30" rows="10">{{ $album->description }}</textarea>
                    <input type="file" name="image">
                    <button type="submit" class="profile__form-btn">Отправить</button>
                </form>
            </div>
        </div>
    </div>
@endsection

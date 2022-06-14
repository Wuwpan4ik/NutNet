@extends('layouts.main')
@section('title', 'Редактировать альбом')
@section('content')
    <div class="container">
        <div class="profile">
            <h1 class="profile__name">@isset($album) Редактировать @else Добавить @endisset альбом</h1>
            <div class="profile__notes">
                <form class="profile__form" method="POST" enctype="multipart/form-data"
                      @isset($album)
                          action="{{ route('album.update', $album->id) }}">
                      @else
                          action="{{ route('album.store') }}">
                      @endisset
                      @isset($album)
                          @method('PUT')
                      @endisset
                    @csrf
                    <input type="hidden" name="id" value="@isset($album){{$album->id }} @endisset ">
                    <input type="text" name="name" value="@isset($album){{ $album->name }}@endisset">
                    <input type="text" name="author" value="@isset($album){{ $album->author }}@endisset">
                    <input type="file" name="image">
                    <textarea style="width: 100%; height: 20vh;" name="description" cols="30" rows="10">@isset($album){{ $album->description }}@endisset</textarea>
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

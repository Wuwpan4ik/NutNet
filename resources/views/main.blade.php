@extends('layouts.main')
@section('content')
    <div class="container">
        <a href="{{ route('album-add') }}">Добавить новый</a>
    </div>
    @if(!is_null($album_list))
        <div class="album py-5 bg-light">
            <div class="container">
                <div class="row">
                    @foreach($album_list as $item)
                        <div class="col-md-4">
                            <div class="card mb-4 box-shadow">
                                <img class="card-img-top" style="height: 225px; width: 100%; display: block;" src="{{ asset('/storage/' . $item->image_url)}}" data-holder-rendered="true">
                                <div class="card-body">
                                    <small class="text-muted">{{$item->author}}</small>
                                    <p class="card-text" style="font-weight: bold">{{ $item->name }}</p>
                                    <p class="card-text">{{ $item->description }}</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <a href="{{ route('album-edit', ['id' => $item->id]) }}" type="button" class="btn btn-sm btn-outline-secondary">Edit</a>
                                            <a href="{{ route('album-remove', ['id' => $item->id]) }}" type="button" class="btn btn-sm btn-outline-secondary">Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    @endif
    <div class="container">
        {{ $album_list->links() }}
    </div>
@endsection

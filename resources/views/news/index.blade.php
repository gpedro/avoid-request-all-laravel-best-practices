@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if(session('status'))
                <div class="alert alert-info" role="alert">{{ session('status') }}</div>
            @endif

            @foreach($news as $item)
            <div class="card mb-4">
                <div class="card-header">{{ $item->title }}</div>
                <div class="card-body">{{ $item->description }}</div>
                @if (auth()->check() && !$item->published)
                <div class="card-footer">
                    <a href="{{ route('news.publish', $item->id) }}">publicar</a>
                </div>
                @endif
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
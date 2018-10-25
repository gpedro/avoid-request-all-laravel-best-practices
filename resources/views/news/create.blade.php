@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mb-4">
                <div class="card-header">Submit a News</div>
                <div class="card-body">
                <form action="{{ route('news.store') }}" method="post">

                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" id="title" value="{{ old('title') }}" class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}">
                        @if ($errors->has('title'))
                        <small class="text-danger">{{ $errors->first('title') }}</small>
                        @endif
                    </div>

                    <div class="form-group">
                      <label for="description">Description</label>
                      <textarea class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}" name="description" rows="3">{{ old('description') }}</textarea>
                        @if ($errors->has('description'))
                        <small class="text-danger">{{ $errors->first('description') }}</small>
                        @endif
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                    @csrf
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
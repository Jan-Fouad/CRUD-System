@extends('layouts.app')

@section('title') {{ __('keywords.edit') }} @endsection

@section('content')

    <form method="POST" action="{{route('posts.update', $post->id)}}">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label class="form-label">{{ __('keywords.title') }}</label>
            <input name="title" type="text" value="{{$post->title}}" class="form-control" >
        </div>
        <div class="mb-3">
            <label  class="form-label">{{ __('keywords.description') }}:</label>
            <textarea name="description" class="form-control" rows="3">{{$post->description}}</textarea>
        </div>

       

        <button class="btn btn-primary">{{ __('keywords.update') }}:</button>
    </form>


@endsection

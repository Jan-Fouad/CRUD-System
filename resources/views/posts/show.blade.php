@extends('layouts.app')

@section('title') {{ __('keywords.show') }} @endsection

@section('content')
    <div class="card mt-4">
        <div class="card-header">
            {{ __('keywords.post info') }}
        </div>
        <div class="card-body">
            <h5 class="card-title">{{ __('keywords.title') }}: {{$post->title}}</h5>
            <p class="card-text">{{ __('keywords.description') }}: {{$post->description}}</p>
        </div>
    </div>

@endsection




@extends('layouts.app')

@section('title') Index @endsection

@section('content')
    <div class="text-center">
        <a href="{{route('posts.create')}}" class="btn btn-success">{{ __('keywords.create post') }}</a>
    </div>

    <table class="table mt-4">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">{{ __('keywords.title') }}</th>
            <th scope="col">{{ __('keywords.description') }}</th>
            <th scope="col">{{ __('keywords.actions') }}</th>
        </tr>
        </thead>
        <tbody>
        @foreach($posts as $post)
            <tr>
                <td>{{$post->id}}</td>
                <td>{{$post->title}}</td>
                <td>{{$post->description}}</td>
                 <td>   <a href="{{route('posts.show', $post->id)}}" class="btn btn-info">{{ __('keywords.view') }}</a>
                    <a href="{{route('posts.edit', $post->id)}}" class="btn btn-primary">{{ __('keywords.edit') }}</a>

                    <form style="display: inline;" method="POST" action="{{route('posts.destroy', $post->id)}}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">{{ __('keywords.delete') }}</button>
                    </form>
                </td>
            </tr>
        @endforeach


        </tbody>
    </table>

@endsection




@extends('layouts.desing')

@section('content')
    <h1>lista de Post</h1>

    @foreach ($posts as $post)
        {{$post->name}}
        <br>
        <a href="{{route('post', $post->slug)}}">{{$post->slug}}</a>
        <br>
    @endforeach

    {{ $posts->render() }}
@endsection


@section('last3')
@include('web.last')
@endsection
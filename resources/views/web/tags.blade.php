@extends('layouts.desing')

@section('content')
<center>
    <h1>{{$tagName}}</h1>
</center>

<div class="col-md-12 news">
    <div class="row">
    @foreach ($posts as $post)
        <div class="col-md-6 category">
            <hr>
            <span class="categoryTitle"><a href="/categoria/{{$post->category->slug}}">{{$post->category->name}}</a></span>    
            <a href="/noticia/{{$post->slug}}">
                <img src="/assets/news/casos.jpg" class="img-fluid" alt="">
            </a>
            <br> 
            <br> 
            <span class="categoryArticle">{{$post->name}}</span> 
            <br>
            @foreach ($post->tags as $tag)
            <a href="{{route('tag', $tag->slug)}}"> {{$tag->name}}</a>
            @endforeach
            <br>
        </div>
       
    
    @endforeach
   
</div>
<hr>
<center>
    {{ $posts->render() }}
</center>
    
</div>
@endsection


@section('last3')
@include('web.last')
@endsection
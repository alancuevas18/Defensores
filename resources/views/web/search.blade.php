@extends('layouts.desing')

@section('content')


<div class="col-md-12 news">
    
        @if ($cont)
            <center>
                <h1>No se encontraron resultados para "{{$name}}"</h1>
               <a href="/">Volver al inicio</a>
               <br>
               <img src="/assets/helper/warning.png" class="img-fluid w-50" alt="">
            </center>
            <hr>


        @else
        <div class="row">
        <center>
            <h1>Mostrando resultados para "{{$name}}"</h1>
        </center>
    @foreach ($postsearch as $post)
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
    {{ $postsearch->render() }}
</center>
@endif
</div>
@endsection


@section('last3')
@include('web.last')
@endsection
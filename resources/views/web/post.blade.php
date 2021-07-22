@extends('layouts.desing')
@section('OG')
<meta name="description" content="{{$post->name}}"/> 
<meta property="og:title" content="{{$post->name}}"/> 
<meta property="og:url" content="{{Request::fullUrl()}}/> 
<meta property="og:description" content="{{$post->excerpt}}"/> 
<meta property="og:image" content="{{$post->file}}"/> 
@endsection

@section('content')
<div class="row">
    <div class="col-md-9">
        <center>
          
            <h1 class="post-title">{{$post->name}}</h1>
            <img src="{{$post->file}}" class="img-fluid" alt="">  
            <p class="text-muted small">{{$post->foot}}</p>
        </center>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">
                <b>Categoria: </b> 
                <a href="{{route('category', $post->category->slug)}} ">&nbsp;{{$post->category->name}}</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
                <b>Etiquetas: </b> 
                @foreach ($post->tags as $tag)
            <a href="{{route('tag', $tag->slug)}} ">&nbsp;{{$tag->name}}</a>
            @endforeach
            </li>
            <li class="breadcrumb-item active" aria-current="page">
                <b>Por: </b> 
                {{$post->user->name}}
            </li>
            </ol>
        </nav>
        <br> 
        <div class="text-justify border" style="padding: 10px;"> 
          {!! $post->body !!}
        </div>
            
    </div>
    <div class="col-md-3">
        <center>
            <h5>Te podria interesar</h5>
        </center>
        <hr>
        <div class="card" style="width: 18rem;">
            <ul class="list-group list-group-flush">
                @foreach ($postsByCat as $post)
              <li class="list-group-item"><a href="/noticia/{{$post->slug}}">
                {{$post->name}}
        </a></li>
              
        @endforeach
            </ul>
          </div>
      
        
    </div>
    
</div>
        
@endsection
<div class="share-btn-container">
    <a href="#" target="_blank" class="facebook-btn">
      <i class="fab fa-facebook"></i>
    </a>

    <a href="#" target="_blank" class="twitter-btn">
      <i class="fab fa-twitter"></i>
    </a>
    
    <a href="#" target="_blank" class="linkedin-btn">
      <i class="fab fa-linkedin"></i>
    </a>

    <a href="#" target="_blank" class="whatsapp-btn">
      <i class="fab fa-whatsapp"></i>
    </a>
  </div>


  
@section('last3')
@include('web.last')
@endsection
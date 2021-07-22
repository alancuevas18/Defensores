@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <center>
                    <h1>Detalles de la entrada</h1>
                </center>
                
                <div class="card">
                   <p><strong>Nombre: </strong>{{$post->name}}</p>
                   <p><strong>Descripcion: </strong>{{$post->body}}</p>
                   <p><strong>Pie de foto: </strong>{{$post->foot}}</p>
                   <p><strong>Status: </strong>{{$post->status}}</p>
                   <img src="{{$post->file}}" alt="">

                </div>
            </div>
        </div>
    </div>
@endsection
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <center>
                    <h1>Detalles del anuncio</h1>
                </center>
                
                <div class="card">
                   <p><strong>Nombre: </strong>{{$advert->name}}</p>
                   <p><strong>Enlace: <a href="{{$advert->url}}" target="_blank">{{$advert->name}}</a> </strong></p>
                   <p><strong>Imagen: </strong></p>
                   <img src="{{$advert->file}}" alt="">
                </div>
            </div>
        </div>
    </div>
@endsection
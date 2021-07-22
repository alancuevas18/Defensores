@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <center>
                    <h1>Detalles de la categoria</h1>
                </center>
                
                <div class="card">
                   <p><strong>Nombre: </strong>{{$category->name}}</p>
                   <p><strong>Descripcion: </strong>{{$category->body}}</p>
                </div>
            </div>
        </div>
    </div>
@endsection
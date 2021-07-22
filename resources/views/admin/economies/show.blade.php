@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <center>
                    <h1>Detalles</h1>
                </center>
                
                <div class="card">
                   <p><strong>Nombre: </strong>{{$economy->name}}</p>
                   <p><strong>Precio: </strong>{{$economy->price}}</p>
                   <p><strong>Estado: </strong>{{$economy->estatus}}</p>
                </div>
            </div>
        </div>
    </div>
@endsection
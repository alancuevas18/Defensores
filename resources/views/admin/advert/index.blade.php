@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                
                <div class="card">
                    <div class="card-header">
                      Lista de Anuncios

                      <a href="{{route('advert.create')}}" class="btn btn-primary float-right">Crear Categoria</a>
                    </div>
                    
                    <div class="card-body">
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>
                                        ID
                                    </th>
                                    <th>
                                        NOMBRE
                                    </th>
                                    <th>
                                        DESCRIPCION
                                    </th>
                                    <th colspan="3">
                                        Accion
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($adverts as $advert)
                                    <tr>
                                        <td>{{$advert->id}}</td>
                                        <td>{{$advert->name}}</td>
                                        <td width='10px'><a href="{{route('advert.show', $advert->id)}}" class="btn btn-primary"><i class="fa fa-eye" aria-hidden="true"></i></a></td>
                                        <td width='10px'><a href="{{route('advert.edit', $advert->id)}}" class="btn btn-warning"><i class="fa fa-cog" aria-hidden="true"></i></a></td>
                                        <td width='10px'>
                                            {!! Form::open(['route' => ['advert.destroy', $advert->id], 'method' =>'DELETE']) !!}
                                                <button class="btn btn-danger">
                                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                                </button>
                                            {!! Form::close() !!}
                                        </td>
                                        
                                    </tr>  
                                @endforeach
                            </tbody>
                        </table>
                        {{$adverts->render()}}
                    </div>
                  </div>
            </div>
        </div>
    </div>
@endsection
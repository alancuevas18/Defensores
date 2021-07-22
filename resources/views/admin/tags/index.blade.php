@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                
                <div class="card">
                    <div class="card-header">
                      Lista de Etiquetas

                      <a href="{{route('tags.create')}}" class="btn btn-primary float-right">Crear Etiquetas</a>
                    </div>
                    
                    <div class="card-body">
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>
                                        ID
                                    </th>
                                    <th>
                                        Nombre
                                    </th>
                                    <th colspan="3">
                                        Accion
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($tags as $tag)
                                    <tr>
                                        <td>{{$tag->id}}</td>
                                        <td>{{$tag->name}}</td>
                                        <td width='10px'><a href="{{route('tags.show', $tag->id)}}" class="btn btn-primary"><i class="fa fa-eye" aria-hidden="true"></i></a></td>
                                        <td width='10px'><a href="{{route('tags.edit', $tag->id)}}" class="btn btn-warning"><i class="fa fa-cog" aria-hidden="true"></i></a></td>
                                        <td width='10px'>
                                            {!! Form::open(['route' => ['tags.destroy', $tag->id], 'method' =>'DELETE']) !!}
                                                <button class="btn btn-danger">
                                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                                </button>
                                            {!! Form::close() !!}
                                        </td>
                                        
                                    </tr>  
                                @endforeach
                            </tbody>
                        </table>
                        {{$tags->render()}}
                    </div>
                  </div>
            </div>
        </div>
    </div>
@endsection
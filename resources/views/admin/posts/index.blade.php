@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                
                <div class="card">
                    <div class="card-header">
                      Lista de Entradas
                      <a href="{{route('posts.create')}}" class="btn btn-primary float-right">Crear Entrada</a>
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
                                    <th>
                                        Extracto
                                    </th>
                                    <th colspan="3">
                                        Accion
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($posts as $post)
                                    <tr>
                                        <td>{{$post->id}}</td>
                                        <td>{{$post->name}}</td>
                                        <td>{{$post->excerpt}}</td>
                                        <td width='10px'><a href="{{route('posts.show', $post->id)}}" class="btn btn-primary"><i class="fa fa-eye" aria-hidden="true"></i></a></td>
                                        <td width='10px'><a href="{{route('posts.edit', $post->id)}}" class="btn btn-warning"><i class="fa fa-cog" aria-hidden="true"></i></a></td>
                                        <td width='10px'>
                                            {!! Form::open(['route' => ['posts.destroy', $post->id], 'method' =>'DELETE']) !!}
                                                <button class="btn btn-danger">
                                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                                </button>
                                            {!! Form::close() !!}
                                        </td>
                                        
                                    </tr>  
                                @endforeach
                            </tbody>
                        </table>
                        {{$posts->render()}}
                    </div>
                  </div>
            </div>
        </div>
    </div>
@endsection
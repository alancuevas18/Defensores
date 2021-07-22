@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                
                <div class="card">
                    <div class="card-header">
                      Lista de Categorias

                      <a href="{{route('categories.create')}}" class="btn btn-primary float-right">Crear Categoria</a>
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
                                        DESCRIPCION
                                    </th>
                                    <th colspan="3">
                                        Accion
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $category)
                                    <tr>
                                        <td>{{$category->id}}</td>
                                        <td>{{$category->name}}</td>
                                        <td>{{$category->body}}</td>
                                        <td width='10px'><a href="{{route('categories.show', $category->id)}}" class="btn btn-primary"><i class="fa fa-eye" aria-hidden="true"></i></a></td>
                                        <td width='10px'><a href="{{route('categories.edit', $category->id)}}" class="btn btn-warning"><i class="fa fa-cog" aria-hidden="true"></i></a></td>
                                        <td width='10px'>
                                            {!! Form::open(['route' => ['categories.destroy', $category->id], 'method' =>'DELETE']) !!}
                                                <button class="btn btn-danger">
                                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                                </button>
                                            {!! Form::close() !!}
                                        </td>
                                        
                                    </tr>  
                                @endforeach
                            </tbody>
                        </table>
                        {{$categories->render()}}
                    </div>
                  </div>
            </div>
        </div>
    </div>
@endsection
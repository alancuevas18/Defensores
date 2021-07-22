@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                
                <div class="card">
                    <div class="card-header">
                      Lista de Economia

                      <a href="{{route('economies.create')}}" class="btn btn-primary float-right">Crear Economia</a>
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
                                        Precio
                                    </th>
                                    <th colspan="3">
                                        Accion
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($economies as $economy)
                                    <tr>
                                        <td>{{$economy->id}}</td>
                                        <td>{{$economy->name}}</td>
                                        <td>{{$economy->price}}</td>
                                        <td width='10px'><a href="{{route('economies.show', $economy->id)}}" class="btn btn-primary"><i class="fa fa-eye" aria-hidden="true"></i></a></td>
                                        {{-- <td width='10px'><a href="{{route('economies.edit', $economy->id)}}" class="btn btn-warning"><i class="fa fa-cog" aria-hidden="true"></i></a></td> --}}
                                        <td width='10px'>
                                            {!! Form::open(['route' => ['economies.destroy', $economy->id], 'method' =>'DELETE']) !!}
                                                <button class="btn btn-danger">
                                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                                </button>
                                            {!! Form::close() !!}
                                        </td>
                                        
                                    </tr>  
                                @endforeach
                            </tbody>
                        </table>
                        {{$economies->render()}}
                    </div>
                  </div>
            </div>
        </div>
    </div>
@endsection
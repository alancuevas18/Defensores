@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                
                <div class="card">
                    <div class="card-header">
                      Crear Etiqueta
                    </div>
                    
                    <div class="card-body">
                        {!! Form::open(['route' => 'tags.store']) !!}
                            @include('admin.tags.partials.form')
                        {!! Form::close() !!}
                    </div>
                  </div>
            </div>
        </div>
    </div>
@endsection
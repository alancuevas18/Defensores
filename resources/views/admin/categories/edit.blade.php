@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                
                <div class="card">
                    <div class="card-header">
                      Editar Entrada
                    </div>
                    
                    <div class="card-body">
                        {!! Form::model($category, ['route' => ['categories.update', $category->id], 'method' => 'PUT']) !!}
                            @include('admin.categories.partials.form');
                        {!! Form::close() !!}
                    </div>
                  </div>
            </div>
        </div>
    </div>
@endsection
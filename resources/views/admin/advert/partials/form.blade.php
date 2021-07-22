
<div class="form-group">
    {{ Form::label('name', 'Nombre del anuncio') }}
    {{ Form::text('name', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
    {{ Form::label('url', 'Enlace') }}
    {{ Form::text('url', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
    {{ Form::label('file', 'Imagen') }}
    {{ Form::file('file', ['class' => 'form-control']) }}
</div>
<div class="form-group">
    {{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
</div>

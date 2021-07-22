<div class="form-group">
    {{ Form::label('name', 'Nombre de la etiqueta') }}
    {{ Form::text('name', null, ['class' => 'form-control', 'id' => 'name']) }}
</div>
<div class="form-group">
    {{ Form::label('slug', 'URL amigable') }}
    {{ Form::text('slug', null, ['class' => 'form-control', 'id' => 'permalink']) }}
</div>
<div class="form-group">
    {{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
</div>

@section('scripts')
<script src="http://code.jquery.com/jquery-1.12.3.min.js"></script>
<script src="{{ asset('vendor/stringToSlug/slugger.js') }}"></script>
<script>
$('#permalink').slugger({
    source: '#name',
	readonly: true
});
</script>
@endsection
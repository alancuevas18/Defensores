{{ Form::hidden('user_id', auth()->user()->id) }}

<div class="form-group">
    {{ Form::label('category_id', 'Categorias') }}
    {{ Form::select('category_id', $categories, null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
    {{ Form::label('name', 'Titulo') }}
    {{ Form::text('name', null, ['class' => 'form-control', 'id' => 'name']) }}
</div>

<div class="form-group">
    {{ Form::label('slug', 'URL amigable') }}
    {{ Form::text('slug', null, ['class' => 'form-control', 'id' => 'permalink']) }}
</div>

<div class="form-group">
    {{ Form::label('file', 'Imagen') }}
    {{ Form::file('file', ['class' => 'form-control']) }}
</div>

<div class="form-group">
    {{ Form::label('foot', 'Pie de foto') }}
    {{ Form::text('foot', null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
    {{ Form::label('status', 'Estado') }} <br>
    <label>
        {{ Form::radio('status','PUBLISHED',['class' => 'form-control']) }} Publicado
    </label>
    <label>
        {{ Form::radio('status','DRAFT',['class' => 'form-control']) }} Borrador
    </label>
</div>

<div class="form-group">
    {{ Form::label('tags', 'Etiquetas') }} <br>
    <div>
        @foreach ($tags as $tag)
            <label>
                {{ Form::checkbox('tags[]', $tag->id) }} {{ $tag->name }}
            </label>
        @endforeach
    </div>
</div>

<div class="form-group">
    {{ Form::label('excerpt', 'Extracto') }}
    {{ Form::textarea('excerpt', null, ['class' => 'form-control', 'rows' => '2']) }}
</div>

<div class="form-group">
    {{ Form::label('body', 'Descripcion Si tiene video revisar el tamaño') }}
    {{ Form::textarea('body', null, ['class' => 'form-control', 'id' => 'editor' ]) }}
</div>

<div class="form-group">
    {{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
</div>

@section('scripts')
<script src="http://code.jquery.com/jquery-1.12.3.min.js"></script>

<script src="{{ asset('/vendor/Trumbowyg/trumbowyg.min.js') }}"></script>
<script src="{{ asset('/vendor/Trumbowyg/plugins/pasteembed/trumbowyg.pasteembed.min.js') }}"></script>
<script src="{{ asset('vendor/stringToSlug/slugger.js') }}"></script>
<script>
$('#permalink').slugger({
    source: '#name',
	readonly: true
});
$('#editor').trumbowyg();

</script>
@endsection
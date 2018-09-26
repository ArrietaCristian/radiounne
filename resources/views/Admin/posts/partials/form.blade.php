
{{Form::hidden('user_id', auth()->user()->id)}}

<div class="form-group input-group-lg" style="color:white">
	{{Form::label('titulo', 'Titulo del Post')}}
	{{Form::text('titulo', null, ['class' => 'form-control', 'id' => 'titulo'])}}
</div>

<!-- <div class="form-group input-group-lg" style="color:white">
	{{Form::label('slug', 'URL amigable')}}
	{{Form::text('slug', null, ['class' => 'form-control', 'id' => 'slug'])}}
</div> -->

<div class="form-group input-group-lg"  style="color:white">
	{{Form::label('category_id', 'Categorias')}}
	{{Form::select('category_id', $categories, null, ['class'=> 'form-control'] )}}
</div>

<div class="form-group input-group-lg" style="color:white">
	{{Form::label('cabeceraimagen', 'Imagen')}}
	{{Form::file('cabeceraimagen')}}
</div>

<!-- <div class="form-group input-group-lg" style="color:white">
	{{Form::label('urlmultimedia', 'audio-video')}}
	{{Form::file('urlmultimedia')}}
</div> -->

<div class="form-group input-group-lg" style="color:white">
	{{Form::label('status', 'Estado')}}
	<label>
		{{Form::radio('status', '0')}} PUBLICAR
	</label>
	<!-- <label>
		{{Form::radio('status', '1')}} BORRADO
	</label> -->
</div>

<div class="form-group input-group-lg" style="color:white">
	{{Form::label('tags', 'Etiquetas')}}
	<div>
		@foreach($tags as $tag)
			<label>
				{{Form::checkbox('tags[]', $tag->id)}} {{$tag->descripcion}}
			</label>
		@endforeach
	</div>

</div>	

<div class="form-group input-group-lg" style="color:white">
	{{Form::label('texto', 'Texto')}}
	{{Form::textarea('texto', null, ['class' => 'form-control'])}}
</div>

<div class="form-group ">
	{{Form::submit('Guardar', ['class' => 'btn btn-lg btn-primary'])}}
	
</div>

@section('scripts')
	<script src="{{asset('vendor/stringToSlug/jquery.stringToSlug.min.js')}}"></script>
	<script src="{{asset('vendor/ckeditor/ckeditor.js')}}"></script>
	<script type="">
		$(document).ready(function(){
			$("#titulo, #slug").stringToSlug({
				callback: function(text){
					$("#slug").val(text);
				}
			});
		});

		CKEDITOR.config.height=400;
		CKEDITOR.config.width='auto';

		CKEDITOR.replace('texto');
	</script>

@endsection
<div class="form-group input-group-lg"  style="color:white; ">
	
	{{Form::label('descripcion', 'Nombre de la etiqueta')}}
	{{Form::text('descripcion', null, ['class' => 'form-control', 'id' => 'descripcion'])}}
</div>

<div class="form-group input-group-lg" style="color:white">
	{{Form::label('slug', 'URL amigable')}}
	{{Form::text('slug', null, ['class' => 'form-control', 'id' => 'slug'])}}
</div>

<div class="form-group">
	{{Form::submit('Guardar', ['class' => 'btn btn-lg btn-primary'])}}
	
</div>

@section('scripts')
	<script src="{{asset('vendor/stringToSlug/jquery.stringToSlug.min.js')}}"></script>
	<script>
		$(document).ready(function(){
			$("#descripcion, #slug").stringToSlug({
				callback:function(text){
					$("#slug").val(text);
				}
			});
		});
	</script>

@endsection
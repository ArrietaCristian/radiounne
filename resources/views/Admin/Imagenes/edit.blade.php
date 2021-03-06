<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">
					Editar Imagenes

				</div>
			
			<div class="panel-body">
				{!!Form::model($imagen, ['route' => ['imagenesRADIOUNNE997.update', $imagen->id], 'method' => 'PUT', 'files' => true])!!}

			<div class="form-group" style="color:black">
				{{Form::label('descripcion', 'Nombre de la etiqueta')}}
				{{Form::text('descripcion', null, ['class' => 'form-control', 'id' => 'descripcion'])}}
			</div>

			<div class="form-group" style="color:black">
					{{Form::label('url', 'Imagen')}}
					{{Form::file('url')}}
				</div>

				<div class="form-group">
					{{Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary'])}}
	
				</div>

				{!!Form::close()!!}	
			</div>
		</div>
	</div>
</div>
</div>

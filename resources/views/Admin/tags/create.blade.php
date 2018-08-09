
@extends('layouts.master')
@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h1>Crear Etiquetas</h1>

				</div>
			
			<div class="panel-body">
				{!!Form::open(['route' => 'tags.store'])!!}

						@include('Admin.tags.partials.form')

				{!!Form::close()!!}	
			</div>
		</div>
	</div>

	<div class="col-md-4 pull-left">
					<a href="{{route('tags.index')}}" class="btn btn-default btn-lg pull-center">
						<i class="glyphicon glyphicon-circle-arrow-right pull-center" style="font-size:xx-large "><br/>ListaEtiquetas</i>
					</a>
				</div>
</div>
</div>
@endsection
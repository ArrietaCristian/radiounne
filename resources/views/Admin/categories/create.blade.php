

@extends('layouts.master')
@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h1>Crear Categorias</h1>

				</div>
			
			<div class="panel-body">
				{!!Form::open(['route' => 'categories.store'])!!}

						@include('Admin.categories.partials.form')

				{!!Form::close()!!}	
			</div>
		</div>
	</div>

	<div class="col-md-4 pull-left">
					<a href="{{route('categories.index')}}" class="btn btn-default btn-lg pull-center">
						<i class="glyphicon glyphicon-circle-arrow-right pull-center" style="font-size:xx-large "><br/>ListaCategorias</i>
					</a>
				</div>
</div>
</div>
</div>
@endsection
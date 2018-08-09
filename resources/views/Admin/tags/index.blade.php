
@extends('layouts.master')
@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h1>Lista de Etiquetas</h1>
					<a href="{{route('tags.create')}}" class="btn btn-lg btn-primary pull-right">
						Crear	
					 </a>
				</div>
			
			<div class="panel-body">
				<table class="table table-striped table-hover">
					<thead>
						<tr>
							<th width="10px" style="color:white">ID</th>
							<th style="color:white">Nombre</th>
							<th colspan="3">&nbsp;</th>
						</tr>
					</thead>
					<tbody>
						@foreach($tags as $tag)
							<tr>
								<td style="color:white">{{$tag['id']}}</td>
								<td style="color:white">{{$tag['descripcion']}}</td>
								<td width="10px"><a href="{{route('tags.show', $tag['id'])}}" class="btn btn-lg btn-default"> Ver
								</a>
							</td>
							
								<td width="10px"><a href="{{route('tags.edit', $tag['id'])}}" class="btn btn-lg btn-default"> Editar
								</a>
							</td>
							<td width="10px">
								{!! Form::open(['route' =>['tags.destroy', $tag['id']], 'method' => 'DELETE'])!!}

								<button class="btn btn-lg btn-danger">
									Eliminar
								</button>

								{!!Form::close()!!}
							</td>
							</tr>

						@endforeach
					</tbody>
				</table>
				
			</div>

		</div>
		</div>
	</div>
</div>


@endsection
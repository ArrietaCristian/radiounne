@extends('layouts.master')
@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default" bordercolor="#F9F8F3">
				<div class="panel-heading" bordercolor="#F9F8F3">
					Lista de Imagenes
					<a href="{{route('imagenes.create')}}" class="btn btn-sm btn-primary text-right">
						Crear	
					 </a>
				</div>
			
			<div class="panel-body" bordercolor="#F9F8F3">
				<table class="table table-striped table-hover">
					<thead>
						<tr>
							<th width="10px" style="color:white">ID</th>
							<th style="color:white">Nombre</th>
							<th colspan="3">&nbsp;</th>
						</tr>
					</thead>
					<tbody>
						@foreach($imagenes as $imagen)
							<tr>
								<td style="color:white">{{$imagen['id']}}</td>
								<td style="color:white">{{$imagen['descripcion']}}</td>
								<td width="10px"><a href="{{route('imagenes.show', $imagen['id'])}}" class="btn btn-sm btn-default"> Ver
								</a>
							</td>
							
								<td width="10px"><a href="{{route('imagenes.edit', $imagen['id'])}}" class="btn btn-sm btn-default"> Editar
								</a>
							</td>
							<td width="10px">
								{!! Form::open(['route' =>['imagenes.destroy', $imagen['id']], 'method' => 'DELETE'])!!}

								<button class="btn btn-sm btn-danger">
									Eliminar
								</button>

								{!!Form::close()!!}
							</td>
							</tr>

						@endforeach
					</tbody>
				</table>
				{{$imagenes->links()}}
			</div>

		</div>
		</div>
	</div>
</div>


@endsection
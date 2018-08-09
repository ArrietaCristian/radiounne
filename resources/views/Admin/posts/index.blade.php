

@extends('layouts.master')
@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h1>Lista de Posts</h1>

					

					<a href="{{route('posts.create')}}" class="btn btn-lg btn-primary pull-right">
						Crear	
					 </a>
				</div>
			
			<div class="panel-body">
				<table class="table table-striped table-hover">
					<thead>
						<tr>
							<th width="10px" style="color:white">ID</th>
							<th style="color:white">Titulo</th>
							<th colspan="3">&nbsp;</th>
						</tr>
					</thead>
					<tbody>
						@foreach($posts as $post)
							<tr>
								<td style="color:white">{{$post['id']}}</td>
								
								<td style="color:white">{{$post['titulo']}}</td>
								<td> <img src="{{$post['cabeceraimagen']}}" width="100" height="100"></td>
								
								
								<td width="10px" ><a href="{{route('posts.show', $post['id'])}}" class="btn btn-lg btn-default" > Ver
								</a>
							</td>
								
								<td width="10px"><a href="{{route('posts.edit', $post['id'] )}}" class="btn btn-lg btn-default"> Editar
								</a>
							</td>
							<td width="10px">
								{!! Form::open(['route' =>['posts.destroy', $post['id']], 'method' => 'DELETE'])!!}

								<button class="btn btn-lg btn-danger">
									Eliminar
								</button>

								{!!Form::close()!!}
							</td>
							</tr>

						@endforeach
					</tbody>
				</table>
				{{$posts->links()}}
			</div>

		</div>
		</div>
				
	</div>
</div>


@endsection
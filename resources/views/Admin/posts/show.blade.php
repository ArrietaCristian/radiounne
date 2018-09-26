
@extends('layouts.master')
@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h1>Ver Post</h1>

				</div>
			
			<div class="panel-body">
				<p style="color:white"><strong>Titulo:  </strong>{{$post['titulo']}}</p>
				
				<!-- <p style="color:white"><strong>Slug:  </strong>{{$post['slug']}}</p> -->
				<hr style="color:white">
				<p><img src="{{$post['cabeceraimagen']}}" class="img-responsive" ></p>
				<hr style="color:white">
				<p style="color:white"><strong>Categoria:  </strong>{{$post['category_id']}}</p>
				<!-- <p style="color:white"><strong>Estado:  </strong>{{$post['status']}}</p> -->
				<p style="color:white"><strong>Texto:  </strong>{!!$post['texto']!!}</p>
			</div>
		</div>
	</div>
	<div class="col-md-4 pull-left">
					<a href="{{route('posts.index')}}" class="btn btn-default btn-lg pull-center">
						<i class="glyphicon glyphicon-circle-arrow-right pull-center" style="font-size:xx-large "><br/>ListaPosts</i>
					</a>
				</div>
</div>
</div>
@endsection
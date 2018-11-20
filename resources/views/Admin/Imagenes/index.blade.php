<!DOCTYPE html>
<html>

<head>


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Radio UNNE 997</title>

     <!-- Scripts -->
    


     <script src="{{asset('js/jquery.min.js')}}"></script>

   

    
    <script src="http://localhost:8000/assets/bootstrap/js/bootstrap.min.js"></script>


     <script src="{{ asset('js/app.js') }}" defer></script>

     <!-- Styles -->
      

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" >

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

     
   <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">

     <!-- Fonts -->
     <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    

</head>


<header style="background:black;">
   
    
    @include('layouts.app')
    
</header>

 <section>
           <div class="col-md-12 img-responsive" style="padding-right: 0; padding-left: 0; padding: 0; padding-top: 0; margin-right: 0;" >
           
            <img class="img-responsive" src="{{$img->get(29)->url}}"  style=" padding-right: 0; padding-top: 0; padding-left: 0; padding: 0; margin-right: 0; margin-left: 0; ">
        
            
           </div>  
 </section>


    


<body style="background: black; color: white" >

<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default" bordercolor="#F9F8F3">
				<div class="panel-heading" bordercolor="#F9F8F3">
					Lista de Imagenes
					<a href="{{route('imagenesRADIOUNNE997.create')}}" class="btn btn-sm btn-primary text-right">
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
								<td width="10px"><a href="{{route('imagenesRADIOUNNE997.show', $imagen['id'])}}" class="btn btn-sm btn-default"> Ver
								</a>
							</td>
							
								<td width="10px"><a href="{{route('imagenesRADIOUNNE997.edit', $imagen['id'])}}" class="btn btn-sm btn-default"> Editar
								</a>
							</td>
							<td width="10px">
								{!! Form::open(['route' =>['imagenesRADIOUNNE997.destroy', $imagen['id']], 'method' => 'DELETE'])!!}

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


</body>
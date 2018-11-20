

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
			<div class="panel panel-default">
				<div class="panel-heading">
					<h1>Crear Posts</h1>

				</div>
			
			<div class="panel-body">
				{!!Form::open(['route' => 'posts.store', 'files'=>true])!!}

						@include('Admin.posts.partials.form')

				{!!Form::close()!!}	
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
</body>
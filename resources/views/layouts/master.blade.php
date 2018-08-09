 
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





   
<body style="background: black; color: white" >

    <header style="background:black;">
   
    
    @include('layouts.app')
    
</header>


@include('layouts.imgCabecera')


 <div class="container">
    <main class="py-4">   
            @yield('content')          
        </main>   
    </div>

<script src="{{asset('js/app.js')}}"></script>
        @yield('scripts')

    @if(session('info'))
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="alert alert-succes">
                {{session('info')}}
            </div>
        </div>
    </div>
</div>
@endif
@if(count($errors))

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="alert alert-danger">
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>

                @endforeach
            </div>
        </div>
    </div>
</div>

@endif


        
<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
       

    

    
    
</body>

<footer style="background: grey; margin-top: 0px; height: 90px;">
<hr style="height: 15px; background: white;">

<h6 class="text-center">UNIVERSIDAD NACIONAL DEL NORDESTE · CHACO · CORRIENTES · REPÚBLICA ARGENTINA
RECTORADO · 25 DE MAYO 868 - (3400) CORRIENTES · E-MAIL: COMUNICACIONINSTITUCIONAL.UNNE@GMAIL.COM</h6>

</footer>


</html>
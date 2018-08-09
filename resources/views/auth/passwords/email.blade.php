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

<body style="background: black">

    <nav class="navbar navbar-expand-md navbar-dark img-responsive " >
            <div class="container"  >
                <!-- <a class="navbar-brand" href="#">
                    <img class="img-responsive" src="imagens/745X.jpg" style="width: 80px; height: 30px;  margin-left: 0px;">
                </a> -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav pull-left mr-auto" >

                       

                        <li class="active" ><a class="nav-link" href="{{ url('/post') }}" onmouseover="this.style.background='grey'" onmouseout="this.style.background='black'" ><FONT COLOR="#F1BE00"><strong> &nbsp INICIO &nbsp</strong></FONT></a></li>
                        

                       
                        <li><a class="nav-link" href="{{url('/post/contacto')}}" onmouseover="this.style.background='grey'" onmouseout="this.style.background='black'"><FONT COLOR="#F1BE00"><strong>&nbsp CONTACTO &nbsp</strong></FONT></a></li>
                        

                        
                        <li><a class="nav-link" href="{{url('/post/prog')}}" onmouseover="this.style.background='grey'" onmouseout="this.style.background='black'"><FONT COLOR="#F1BE00"><strong>&nbsp PROGRAMACIÓN &nbsp</strong></FONT></a></li>
                         

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav pull-right ml-auto" style="margin-right: 5px;">

                       <!--  <a class="navbar-brand" href="#">
                    <img class="img-responsive" src="imagens/745X.jpg" style="width: 80px; height: 30px;  margin-left: 0px;">
                    </a> -->
                  
                             
                       
                    
                    </ul>                
                </div>
            </div>

        </nav>


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Restablecer la contraseña') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Enviar contraseña') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
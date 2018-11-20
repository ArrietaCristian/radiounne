
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark img-responsive " >
            <div class="container"  >
                <a class="navbar-brand" href="#">
                    <img class="img-responsive" src="{{$img->get(28)->url}}" style="width: 80px; height: 30px;  margin-left: 0px;">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav pull-left mr-auto" >

                       

                        <li class="active" ><a class="nav-link" href="{{ url('/post') }}" onmouseover="this.style.background='grey'" onmouseout="this.style.background='black'" ><FONT COLOR="#F1BE00"><strong> &nbsp INICIO &nbsp</strong></FONT></a></li>
                        

                      

                        <li><a class="nav-link" href="{{url('/post/contacto')}}" onmouseover="this.style.background='grey'" onmouseout="this.style.background='black'"><FONT COLOR="#F1BE00"><strong>&nbsp CONTACTO &nbsp</strong></FONT></a></li>
                        

                        
                        <li><a class="nav-link" href="{{url('/post/prog')}}" onmouseover="this.style.background='grey'" onmouseout="this.style.background='black'"><FONT COLOR="#F1BE00"><strong>&nbsp PROGRAMACIÓN &nbsp</strong></FONT></a></li>

                        <li><a class="nav-link" href="http://medios.unne.edu.ar" target="_blank" onmouseover="this.style.background='grey'" onmouseout="this.style.background='black'"><FONT COLOR="#F1BE00"><strong>&nbsp UNNE Medios &nbsp</strong></FONT></a></li>
                         

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav pull-right ml-auto" style="margin-right: 5px;">


                                   
                             
                        <!-- Authentication Links -->
                        @guest

                         <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="glyphicon glyphicon-search btn-lg"  href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre style="color: gold;" onmouseover="this.style.background='grey'" onmouseout="this.style.background='black'"><FONT COLOR="#F1BE00"><strong>
                                    
                                </strong></FONT></a>

                        <div class="dropdown-menu" >
                            <!-- <a class="dropdown-item " href="#" onmouseover="this.style.background='grey'" onmouseout="this.style.background='black'" style="color: gold" onmouseup="event.preventDefault();
                                                     document.getElementById('form1').submit();"><FONT COLOR="#F1BE00"><strong>{{ __('   buscar ') }}</strong></FONT></a> -->

                       

                        {{ Form::open(['route' => ['post.search'], 'method' => 'GET']) }}
                      {{ Form::text('search', old('search'), array('placeholder'=>'buscar...')) }}
                       {{ Form::submit('BUSCAR', ['class' => 'glyphicon glyphicon-search', 'style' => 'background:black;color: white; width: 190px;']) }}
                    {{ Form::close() }}
                           
                      
                                      
                   </div>
                       </li>   

                           <li><a class="nav-link glyphicon glyphicon-user" href="{{ route('login') }}" onmouseover="this.style.background='grey'" onmouseout="this.style.background='black'" style="color: gold"><FONT COLOR="#F1BE00"><strong>{{ __('   Login  ') }}</strong></FONT></a></li>

                          <!--  <li><a class="nav-link glyphicon" href="{{ route('register') }}" style="display: none"  onmouseover="this.style.background='grey'" onmouseout="this.style.background='black'" ><FONT COLOR="#F1BE00"><strong>{{ __('Registrar') }}</strong></FONT></a></li>

                         <li class="nav-link glyphicon dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#" style="background: black;" 
                                       onclick="event.preventDefault();
                                                     document.getElementById('post.search').submit();"><FONT COLOR="#F1BE00"><strong>
                                        {{ __('Logout') }}
                                    </a></strong></FONT>

                                    
                                        {{ Form::open(['route' => ['post.search'], 'method' => 'GET']) }}
                      <p>{{ Form::text('search', old('search'), array('placeholder'=>'buscar...')) }}</p>
                       <p>{{ Form::submit('BUSCAR', ['class' => 'glyphicon glyphicon-search', 'style' => 'background:black;color: white; width: 190px;']) }}</p>
                    {{ Form::close() }} -->

                            
                                                                                                       

                        @else






                            <li class="nav-item dropdown">

                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre style="color: gold;" onmouseover="this.style.background='grey'" onmouseout="this.style.background='black'"><FONT COLOR="#F1BE00"><strong>
                                   &nbsp {{ Auth::user()->name }} 
                                </strong></FONT></a>

                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}" style="background: black;" 
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><FONT COLOR="#F1BE00"><strong>
                                        {{ __('Logout') }}
                                    </a></strong></FONT>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>

                                


                                 <li><a class="nav-link" href="{{route('tags.index')}}" style="color: white" onmouseover="this.style.color='gold'" onmouseout="this.style.color='white'"> &nbsp Etiquetas &nbsp</a></li>
                          
                                 <li><a class="nav-link" href="{{route('categories.index')}}" style="color: white" onmouseover="this.style.color='gold'" onmouseout="this.style.color='white'"> &nbsp Categorias &nbsp</a></li>
                            
                                 <li><a class="nav-link" href="{{route('posts.index')}}" style="color: white" onmouseover="this.style.color='gold'" onmouseout="this.style.color='white'">&nbsp Posts &nbsp</a></li>

                            </li>

                        @endguest

                    
                    </ul>                
                </div>
            </div>

        </nav>

    </div>
 
    
     






 




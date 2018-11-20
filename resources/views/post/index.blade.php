@extends('layouts.master')

@section('content')



<div class="container">

  

<div class="popup" id="popup" style="position: relative; display: inline-block; cursor: pointer;" onclick="mifuncion()">
  <div class="popuptext" id="mipopup" style="visibility: hidden; width: 160px; background-color: #555; color: #fff; text-align: center; border-radius: 6px; padding: 8px 0; position: absolute;z-index: 1; bottom: 125%; left: 50%;margin-left: -80px;">sssssssssssssssss</div>
</div>
<div class="show" id="show" style="visibility: visible;animation: fadeIn 1s"></div>

<script > function mifuncion(){
  var popup=document.getElementById("mipopup");
  popup.classList.toogle("show");
}</script>


  <div class="row">

  <div class="col-md-9" >

<div class="row">

 
			     <div class="col-md-12 text-center" >  
            <div>

           <h2><strong style="color: gold">AUDIOS</strong></h2>

                         <iframe width="100%" height="400" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/users/175169875&color=%23ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true&visual=true"></iframe>  
                         
                    </div>                      
                       <br>



                 <div class="row">

                  <div class="col-md-6">

                               

                        
                        <a  href="{{ url('/post/show/'. $POST->get(2)->id )}}"> 
                          <img class="img-thumbnail img-responsive" src="{{$POST->get(2)->cabeceraimagen}}"></a>
                           @if($POST->get(2)->urlmultimedia == null)    
                             <audio  id="player2" src="{{$POST->get(2)->urlmultimedia}}" style="display: none"></audio>                           
                          @else
                             <audio  id="player2" src="{{$POST->get(2)->urlmultimedia}}"></audio>
                            <div class="img-responsive">
                            <button style="background:black" onclick="document.getElementById('player2').play()">Play</button>
                            <button style="background:black" onclick="document.getElementById('player2').pause()">Pause</button>
                            <button style="background:black" onclick="document.getElementById('player2').volume+=0.1">Vol +</button>
                            <button style="background:black" onclick="document.getElementById('player2').volume-=0.1">Vol -</button>
                            </div> 
                           @endif 
                           <a href="{{ url('/post/show/' . $POST->get(2)->id) }}">
                            <br>
                            <h3 style="color: white">"{{$POST->get(2)->titulo}}" </h3>
                            </a>
                        </div>
                 
                        <div class="col-md-6">
                          
                          <a href="{{ url('/post/show/' . $POST->get(3)->id) }}">
                          <img class="img-thumbnail img-responsive" src="{{$POST->get(3)->cabeceraimagen}}"></a>
                           @if($POST->get(3)->urlmultimedia == null)    
                             <audio  id="player2" src="{{$POST->get(3)->urlmultimedia}}" style="display: none"></audio>                           
                          @else
                             <audio  id="player2" src="{{$POST->get(3)->urlmultimedia}}"></audio>
                            <div class="img-responsive">
                            <button style="background:black" onclick="document.getElementById('player2').play()">Play</button>
                            <button style="background:black" onclick="document.getElementById('player2').pause()">Pause</button>
                            <button style="background:black" onclick="document.getElementById('player2').volume+=0.1">Vol +</button>
                            <button style="background:black" onclick="document.getElementById('player2').volume-=0.1">Vol -</button>
                            </div> 
                           @endif 
                           <a href="{{ url('/post/show/' . $POST->get(3)->id) }}">
                            <br>
                            <h3 style="color: white">"{{$POST->get(3)->titulo}}" </h3>
                            </a>
                        </div>
                     
                 </div>          
            </div>   
            <br>
            <hr>
            <br>
              

           
       
             <div class="col-md-12 text-center img-responsive" style="position: relative;">
           
                    	<br> 

                          <a href="{{ url('/post/show/' . $POST->get(0)->id) }}">                      
                      <img class="img-responsive" style="position: relative; " width="100%" src="{{$POST->get(0)->cabeceraimagen}}">
                      
                   

                      <!--  @if($POST->get(0)->urlmultimedia == null)    
                             
                             <audio class="img-responsive" id="player2" src="{{$POST->get(0)->urlmultimedia}}" style="display: none;  " ></audio>
                         
                          @else
                          <audio  id="player2" src="{{$POST->get(0)->urlmultimedia}}"></audio>
                            <div class="img-responsive">
                            <button style="background:black" onclick="document.getElementById('player2').play()">Play</button>
                            <button style="background:black" onclick="document.getElementById('player2').pause()">Pause</button>
                            <button style="background:black" onclick="document.getElementById('player2').volume+=0.1">Volume Up</button>
                            <button style="background:black" onclick="document.getElementById('player2').volume-=0.1">Volume Down</button>
                            </div> 
                       
                           @endif   -->     
                    
                        
                      
                       <br>                     
                          <h3 style="color: white">"{{$POST->get(0)->titulo}}" </h3>
                         </a>
               
                        

           <br>
                              
                <div class="row text-center">                       
                        
                         <div class="col-md-4" >  

                            <a href="{{ url('/post/show/' . $POST->get(4)->id) }}">
                          <img class="img-thumbnail img-responsive" src="{{$POST->get(4)->cabeceraimagen}}"></a>
                           @if($POST->get(4)->urlmultimedia == null)    
                             <audio  id="player2" src="{{$POST->get(4)->urlmultimedia}}" style="display: none"></audio>                           
                          @else
                             <audio  id="player2" src="{{$POST->get(4)->urlmultimedia}}"></audio>
                            <div class="img-responsive">
                            <button style="background:black" onclick="document.getElementById('player2').play()">Play</button>
                            <button style="background:black" onclick="document.getElementById('player2').pause()">Pause</button>
                            <button style="background:black" onclick="document.getElementById('player2').volume+=0.1">Vol +</button>
                            <button style="background:black" onclick="document.getElementById('player2').volume-=0.1">Vol -</button>
                            </div> 
                           @endif 
                           <a href="{{ url('/post/show/' . $POST->get(4)->id) }}">
                            <br>
                            <h3 style="color: white">"{{$POST->get(4)->titulo}}" </h3>
                            </a>
                      </div>
                    
                      <div class="col-md-4">
                          <a href="{{ url('/post/show/' . $POST->get(5)->id) }}">
                          <img class="img-thumbnail img-responsive" src="{{$POST->get(5)->cabeceraimagen}}"></a>
                           @if($POST->get(5)->urlmultimedia == null)    
                             <audio  id="player2" src="{{$POST->get(5)->urlmultimedia}}" style="display: none"></audio>                           
                          @else
                             <audio  id="player2" src="{{$POST->get(5)->urlmultimedia}}"></audio>
                            <div class="img-responsive">
                            <button style="background:black" onclick="document.getElementById('player2').play()">Play</button>
                            <button style="background:black" onclick="document.getElementById('player2').pause()">Pause</button>
                            <button style="background:black" onclick="document.getElementById('player2').volume+=0.1">Vol +</button>
                            <button style="background:black" onclick="document.getElementById('player2').volume-=0.1">Vol -</button>
                            </div> 
                           @endif 
                           <a href="{{ url('/post/show/' . $POST->get(5)->id) }}">
                            <br>
                            <h3 style="color: white">"{{$POST->get(5)->titulo}}" </h3>
                            </a>
                       </div>

                       <div class="col-md-4">
                          <a href="{{ url('/post/show/' . $POST->get(6)->id) }}">
                          <img class="img-thumbnail img-responsive" src="{{$POST->get(6)->cabeceraimagen}}"></a>
                           @if($POST->get(6)->urlmultimedia == null)    
                             <audio  id="player2" src="{{$POST->get(6)->urlmultimedia}}" style="display: none"></audio>                           
                          @else
                             <audio  id="player2" src="{{$POST->get(6)->urlmultimedia}}"></audio>
                            <div class="img-responsive">
                            <button style="background:black" onclick="document.getElementById('player2').play()">Play</button>
                            <button style="background:black" onclick="document.getElementById('player2').pause()">Pause</button>
                            <button style="background:black" onclick="document.getElementById('player2').volume+=0.1">Vol +</button>
                            <button style="background:black" onclick="document.getElementById('player2').volume-=0.1">Vol -</button>
                            </div> 
                           @endif 
                           <a href="{{ url('/post/show/' . $POST->get(6)->id) }}">
                            <br>
                            <h3 style="color: white">"{{$POST->get(6)->titulo}}" </h3>
                            </a>
                       </div>


                    </div>
                </div>
          



<div class="col-md-12">
              <br><br>
                    	<a href="{{ url('/post/show/' . $POST->get(1)->id) }}">                      
                      <img class="img-responsive" width="100%" src="{{$POST->get(1)->cabeceraimagen}}">
                    </a>
                       @if($POST->get(2)->urlmultimedia == null)    
                             
                             <audio class="img-responsive" id="player2" src="{{$POST->get(1)->urlmultimedia}}" style="display: none"></audio>
                            
                         
                          @else
                          <audio  id="player2" src="{{$POST->get(1)->urlmultimedia}}"></audio>
                            <div class="img-responsive">
                            <button style="background:black" onclick="document.getElementById('player2').play()">Play</button>
                            <button style="background:black" onclick="document.getElementById('player2').pause()">Pause</button>
                            <button style="background:black" onclick="document.getElementById('player2').volume+=0.1">Volume Up</button>
                            <button style="background:black" onclick="document.getElementById('player2').volume-=0.1">Volume Down</button>
                            </div> 
                       
                           @endif 
                        
                       <a href="{{ url('/post/show/' . $POST->get(1)->id) }}">
                       <br>                       
                           <h2 class="text-center" style="color: white">{{$POST->get(1)->titulo}} </h2>
                         </a>
            <br>
 				 <div class="row">

                        <div class="col-md-3">
                        	<a href="{{ url('/post/show/' . $POST->get(7)->id) }}">
                          <img class="img-thumbnail img-responsive" src="{{$POST->get(7)->cabeceraimagen}}"></a>
                           @if($POST->get(7)->urlmultimedia == null)    
                             <audio  id="player2" src="{{$POST->get(7)->urlmultimedia}}"></audio>
                            
                          @else
                            <audio  id="player2" src="{{$POST->get(7)->urlmultimedia}}"></audio>
                            <div class=" img-responsive">
                            <button style="background:black" onclick="document.getElementById('player2').play()"><span class="glyphicon glyphicon-play" aria-hidden="true"></span></button>
                            <button style="background:black" onclick="document.getElementById('player2').pause()">
                              <span class="glyphicon glyphicon-pause"></span></button>
                            <button style="background:black" onclick="document.getElementById('player2').volume+=0.1"><span class="glyphicon glyphicon-volume-up"></span></button>
                            <button style="background:black" onclick="document.getElementById('player2').volume-=0.1"><span class="glyphicon glyphicon-volume-down"></span></button>
                            </div> 
                           @endif 
                           <a href="{{ url('/post/show/' . $POST->get(7)->id) }}">
                            <br>
                            <h3 style="color: white">"{{$POST->get(7)->titulo}}" </h3>
                            </a>
                        </div>

                        <div class="col-md-3">
                        <a href="{{ url('/post/show/' . $POST->get(8)->id) }}">
                          <img class="img-thumbnail img-responsive" src="{{$POST->get(8)->cabeceraimagen}}"></a>
                           @if($POST->get(8)->urlmultimedia == null)    
                             <audio  id="player2" src="{{$POST->get(8)->urlmultimedia}}"></audio>
                            
                          @else
                            <audio  id="player2" src="{{$POST->get(8)->urlmultimedia}}"></audio>
                            <div class=" img-responsive">
                            <button style="background:black" onclick="document.getElementById('player2').play()"><span class="glyphicon glyphicon-play" aria-hidden="true"></span></button>
                            <button style="background:black" onclick="document.getElementById('player2').pause()">
                              <span class="glyphicon glyphicon-pause"></span></button>
                            <button style="background:black" onclick="document.getElementById('player2').volume+=0.1"><span class="glyphicon glyphicon-volume-up"></span></button>
                            <button style="background:black" onclick="document.getElementById('player2').volume-=0.1"><span class="glyphicon glyphicon-volume-down"></span></button>
                            </div> 
                           @endif 
                           <a href="{{ url('/post/show/' . $POST->get(8)->id) }}">
                            <br>
                            <h3 style="color: white">"{{$POST->get(8)->titulo}}" </h3>
                            </a>
                        </div>

                        <div class="col-md-3">
                        	<a href="{{ url('/post/show/' . $POST->get(9)->id) }}">
                          <img class="img-thumbnail img-responsive" src="{{$POST->get(9)->cabeceraimagen}}"></a>
                           @if($POST->get(9)->urlmultimedia == null)    
                             <audio  id="player2" src="{{$POST->get(9)->urlmultimedia}}"></audio>
                            
                          @else
                            <audio  id="player2" src="{{$POST->get(9)->urlmultimedia}}"></audio>
                            <div class=" img-responsive">
                            <button style="background:black" onclick="document.getElementById('player2').play()"><span class="glyphicon glyphicon-play" aria-hidden="true"></span></button>
                            <button style="background:black" onclick="document.getElementById('player2').pause()">
                              <span class="glyphicon glyphicon-pause"></span></button>
                            <button style="background:black" onclick="document.getElementById('player2').volume+=0.1"><span class="glyphicon glyphicon-volume-up"></span></button>
                            <button style="background:black" onclick="document.getElementById('player2').volume-=0.1"><span class="glyphicon glyphicon-volume-down"></span></button>
                            </div> 
                           @endif 
                           <a href="{{ url('/post/show/' . $POST->get(9)->id) }}">
                            <br>
                            <h3 style="color: white">"{{$POST->get(9)->titulo}}" </h3>
                            </a>
                        </div>

                        <div class="col-md-3">
                        	<a href="{{ url('/post/show/' . $POST->get(10)->id) }}">
                        	<img class="img-thumbnail img-responsive" src="{{$POST->get(10)->cabeceraimagen}}"></a>
                           @if($POST->get(10)->urlmultimedia == null)    
                             <audio  id="player2" src="{{$POST->get(10)->urlmultimedia}}"></audio>
                            
                          @else
                            <audio  id="player2" src="{{$POST->get(10)->urlmultimedia}}"></audio>
                            <div class=" img-responsive">
                            <button style="background:black" onclick="document.getElementById('player2').play()"><span class="glyphicon glyphicon-play" aria-hidden="true"></span></button>
                            <button style="background:black" onclick="document.getElementById('player2').pause()">
                              <span class="glyphicon glyphicon-pause"></span></button>
                            <button style="background:black" onclick="document.getElementById('player2').volume+=0.1"><span class="glyphicon glyphicon-volume-up"></span></button>
                            <button style="background:black" onclick="document.getElementById('player2').volume-=0.1"><span class="glyphicon glyphicon-volume-down"></span></button>
                            </div> 
                           @endif 
                           <a href="{{ url('/post/show/' . $POST->get(10)->id) }}">
                            <br>
                            <h3 style="color: white">"{{$POST->get(10)->titulo}}" </h3>
                            </a>
                        </div>

                   </div>
            </div>
       </div>
  </div>
      
   

  <div class="col-md-3 text-center">

        @include('layouts.lateral')
  </div> 




 </div>         
  

</div>

<br><br>
<a href="{{ url('/post/anteriores/')}}" style="color: #86D0F0 ;" ><h2> Ver Posts anteriores >></h2> </a>

<br>
             
  
@stop

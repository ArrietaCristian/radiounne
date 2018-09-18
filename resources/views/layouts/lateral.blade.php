
		  			
<div class="row">
         
        
        <hr>
        


   <div class="col-md-12 " style="margin-left: 30px">   

            
           <div class="col-md-12 "> 
                 <section style="background:grey">
                        <h2><strong style="color: white">Últimas Noticias</strong></h2>
                </section>
           
            
                  
             <div class="row ">
                       <a href="{{ url('/post/show/' . $POST->get(0)->id) }}">
                        <div class="col-md-4"><img class="img-responsive img-thumbnail" src="{{$POST->get(0)->cabeceraimagen}}" style="width: 120px; height: 100px;"></div>
                        <div class="col-md-6">
                        <p>{!! str_limit($POST->get(0)->texto, $limit = 100, $end = '...') !!}</p>
                        </div>
                       </a>
                       <br> 
             </div>
               
            <div class="row">
                	<a href="{{ url('/post/show/' . $POST->get(1)->id) }}">
                        <div class="col-md-4"><img class="img-responsive img-thumbnail" src="{{$POST->get(1)->cabeceraimagen}}"" style="width: 120px; height: 100px;"></div>
                        <div class="col-md-6">
                        <p>{!! str_limit($POST->get(1)->texto, $limit = 100, $end = '...') !!}</p>
                        </div>
                    </a>
                    <br> 
            </div>
                <div class="row">
                   <a href="{{ url('/post/show/' . $POST->get(2)->id) }}">
                    <div class="col-md-4"><img class="img-responsive img-thumbnail" src="{{$POST->get(2)->cabeceraimagen}}" style="width: 120px; height: 100px;"></div>
                    <div class="col-md-6">
                        <p>{!! str_limit($POST->get(2)->texto, $limit = 100, $end = '...') !!} </p>
                    </div>
                   </a>
                   <br> 
                </div>
                <div class="row">
                   <a href="{{ url('/post/show/' . $POST->get(3)->id) }}">
                    <div class="col-md-4"><img class="img-responsive img-thumbnail" src="{{$POST->get(3)->cabeceraimagen}}" style="width: 120px; height: 100px;"></div>
                    <div class="col-md-6">
                        <p>{!! str_limit($POST->get(3)->texto, $limit = 100, $end = '...') !!} </p>
                    </div>
                   </a>
                </div>
        </div>
 </div>
 

<div class="col-md-10 col-md-offset-0 " style="margin-left: 40px;">
    <br>
    <br>
    <br>
    <br>
     <head>
                <title>Bootstrap Example</title>
                    <meta charset="utf-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1">
                    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 

        </head>
            <div id="cont_c8a07a1cf4ae081cc513caa6c8bc6dba"><script type="text/javascript" async src="https://www.meteored.com.ar/wid_loader/c8a07a1cf4ae081cc513caa6c8bc6dba"></script></div>


            <br>
    <br>
    <br>
    <br>
                <div class="carousel slide" data-ride="carousel" id="carousel-1" style="border: grey 2px solid;">
                    <div class="carousel-inner" role="listbox">
                        <div class="item active"><img class="img-responsive" src="{{$img->get(1)->url}}" alt="El Baúl" height="250"><div class="carousel-caption "><h5 style="color: aqua; background: grey">Sábado de 19 a 22</h5></div></div>
                        <div class="item"><img class="img-responsive" src="{{$img->get(21)->url}}" alt="La tarde nos UNNE"> <div class="carousel-caption"><h5 style="color: aqua; background: grey">Lunes a viernes 17 a 19</h5></div></div>
                        <div class="item"><img class="img-responsive" src="{{$img->get(20)->url}}" alt="Tecnologia para el cambio"><div class="carousel-caption "><h5 style="color: aqua; background: grey">Miercoles de 5.30 a 6 y Sábados de 6 a 7</h5></div></div>
                        <div class="item"><img class="img-responsive" src="{{$img->get(19)->url}}" alt="A las 6"><div class="carousel-caption "><h5 style="color: aqua; background: grey">Lunes a Viernes de 6 a 7</h5></div></div>
                        <div class="item"><img class="img-responsive" src="{{$img->get(18)->url}}" alt="Café cortado"><div class="carousel-caption "><h5 style="color: aqua; background: grey">Lunes a Viernes de 7 a 9</h5></div></div>
                        <div class="item"><img class="img-responsive" src="{{$img->get(17)->url}}" alt="Ciudad invisible"><div class="carousel-caption "><h5 style="color: aqua; background: grey">Lunes a Viernes de 9 a 12</h5></div></div>
                        <div class="item"><img class="img-responsive" src="{{$img->get(16)->url}}" alt="Era por abajo"><div class="carousel-caption "><h5 style="color: aqua; background: grey">Lunes a Viernes de 12 a 13</h5></div></div>
                        <div class="item"><img class="img-responsive" src="{{$img->get(15)->url}}" alt="Parte del día"><div class="carousel-caption "><h5 style="color: aqua; background: grey">Lunes a Viernes de 13 a 14</h5></div></div>
                        <div class="item"><img class="img-responsive" src="{{$img->get(14)->url}}" alt="El club de la salud"><div class="carousel-caption "><h5 style="color: aqua; background: grey">Martes de 14 a 15</h5></div></div>
                        <div class="item"><img class="img-responsive" src="{{$img->get(13)->url}}" alt="Voces de la agricultura familiar"><div class="carousel-caption "><h5 style="color: aqua; background: grey">Miercoles de 14 a 15</h5></div></div>
                        <div class="item"><img class="img-responsive" src="{{$img->get(12)->url}}" alt="INTA con voz"><div class="carousel-caption "><h5 style="color: aqua; background: grey">Jueves de 14 a 16</h5></div></div>
                        <div class="item"><img class="img-responsive" src="{{$img->get(11)->url}}" alt="La revista"><div class="carousel-caption "><h5 style="color: aqua; background: grey">Martes de 15 a 17</h5></div></div>
                        <div class="item"><img class="img-responsive" src="{{$img->get(10)->url}}" alt="Llega la tarde"><div class="carousel-caption "><h5 style="color: aqua; background: grey">Miercoles de 15 a 16</h5></div></div>
                        <div class="item"><img class="img-responsive" src="{{$img->get(9)->url}}" alt="Start UP"><div class="carousel-caption "><h5 style="color: aqua; background: grey">Lunes y miercoles de 16 a 17</h5></div></div>
                        <div class="item"><img class="img-responsive" src="{{$img->get(8)->url}}" alt="Raíces"><div class="carousel-caption "><h5 style="color: aqua; background: grey">Viernes de 16 a 17</h5></div></div>
                        <div class="item"><img class="img-responsive" src="{{$img->get(7)->url}}" alt="Todos los vientos"><div class="carousel-caption "><h5 style="color: aqua; background: grey">Lunes a Viernes de 19 a 20</h5></div></div>
                        <div class="item"><img class="img-responsive" src="{{$img->get(6)->url}}" alt="Santos y pecadores"><div class="carousel-caption "><h5 style="color: gold;">Jueves de 20 a 22 y<br/> Domingo de 22 a 23</h5></div></div>
                        <div class="item"><img class="img-responsive" src="{{$img->get(4)->url}}" alt="Maldita costumbre"><div class="carousel-caption "><h5 style="color: aqua; background: grey">Viernes de 20 a 22</h5></div></div>
                        <div class="item"><img class="img-responsive" src="{{$img->get(3)->url}}" alt="La hora del agrotecnico"><div class="carousel-caption "><h5 style="color: aqua; background: grey">Sabado de 14 a 15</h5></div></div>
                        <div class="item"><img class="img-responsive" src="{{$img->get(2)->url}}" alt="Desde adentro"><div class="carousel-caption "><h5 style="color: aqua; background: grey">Sabado 17 a 19</h5></div></div>
                    </div>
                    <div><a class="left carousel-control" href="#carousel-1" role="button" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i><span class="sr-only">Previous</span></a><a class="right carousel-control" href="#carousel-1" role="button"
                        data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i><span class="sr-only">Next</span></a></div>
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-1" data-slide-to="1"></li>
                        <li data-target="#carousel-1" data-slide-to="2"></li>
                        <li data-target="#carousel-1" data-slide-to="3"></li>
                        <li data-target="#carousel-1" data-slide-to="4"></li>
                        <li data-target="#carousel-1" data-slide-to="5"></li>
                        <li data-target="#carousel-1" data-slide-to="6"></li>
                        <li data-target="#carousel-1" data-slide-to="7"></li>
                        <li data-target="#carousel-1" data-slide-to="8"></li>
                        <li data-target="#carousel-1" data-slide-to="9"></li>
                        <li data-target="#carousel-1" data-slide-to="10"></li>
                        <li data-target="#carousel-1" data-slide-to="11"></li>
                        <li data-target="#carousel-1" data-slide-to="12"></li>
                        <li data-target="#carousel-1" data-slide-to="13"></li>
                        <li data-target="#carousel-1" data-slide-to="14"></li>
                        <li data-target="#carousel-1" data-slide-to="15"></li>
                        <li data-target="#carousel-1" data-slide-to="16"></li>
                        <li data-target="#carousel-1" data-slide-to="17"></li>
                        <li data-target="#carousel-1" data-slide-to="18"></li>
                        <li data-target="#carousel-1" data-slide-to="19"></li>
                    </ol>
                </div>
            <br><br><br>
				</div>		
              
                <hr>
<div class="col-md-12">
   
                        <div>
                            <a class="twitter-timeline" data-lang="es" data-width="300" data-height="500" href="https://twitter.com/RadioUNNE997?ref_src=twsrc%5Etfw">Tweets by RadioUNNE997</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                      </div>

</div>



<div class="col-md-12 col-md-offset-0 text-center" style="margin-left: 30px">
                    <br>
                    <br>
                    <br>
                        <section style="background:grey">
                        <h2><strong style="color: white">Lo más visto</strong></h2>
                    </section>
                        <div class="row">
                            <a href="{{ url('/post/show/' .  $TV->get(0)->id) }}">
                            <div class="col-md-4 col-md-offset-0"><img class="img-thumbnail img-responsive" src="{{$TV->get(0)->cabeceraimagen}}" style="width: 120px; height: 100px;">
                            </div>
                            <div class="col-md-6">
                                <h5>{!! str_limit($TV->get(0)->texto, $limit = 130, $end = '...') !!} </h5></div>
                            </a>
                            <br>
                        </div>
                       <div class="row">
                            <a href="{{ url('/post/show/' .  $TV->get(1)->id) }}">
                            <div class="col-md-4"><img class="img-thumbnail img-responsive" src="{{$TV->get(1)->cabeceraimagen}}" style="width: 120px; height: 100px;"></div>
                            <div class="col-md-6">
                                <h5>{!! str_limit($TV->get(1)->texto, $limit = 130, $end = '...') !!} </h5></div>
                            </a>
                             <br>
                        </div>
                      <div class="row">
                            <a href="{{ url('/post/show/' .  $TV->get(2)->id) }}">
                            <div class="col-md-4"><img class="img-thumbnail img-responsive" src="{{$TV->get(2)->cabeceraimagen}}" style="width: 120px; height: 100px;"></div>
                            <div class="col-md-6">
                                <h5>{!! str_limit($TV->get(2)->texto, $limit = 130, $end = '...') !!} </h5></div>
                            </a>
                             <br>
                        </div>
                        <div class="row">
                            <a href="{{ url('/post/show/' .  $TV->get(3)->id) }}">
                            <div class="col-md-4"><img class="img-thumbnail img-responsive" src="{{$TV->get(3)->cabeceraimagen}}" style="width: 120px; height: 100px;"></div>
                            <div class="col-md-6">
                                <h5>{!! str_limit($TV->get(3)->texto, $limit = 130, $end = '...') !!} </h5></div>
                            </a>
                             <br>
                        </div>
                        
                    </div>
                    
              
</div>



   
            
     
      
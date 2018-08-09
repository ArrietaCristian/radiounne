
@extends('layouts.master')


@section('content')


<br>
<div class="row">
<div class="col-md-8 text-center">


<div class="panel panel-default" style="color: white">	
	
	<h1>		
		{{$Post['titulo']}}
	</h1>
	<hr width="30%" style="background: gold">		


		<div class="col-md-12 ">
			<div class="row">
				<div class="col-md-6 text-left">
			CATEGORIA:
			<a href="{{route ('category', $Post->category->slug)}}">{{$Post->category->descripcion}}</a>
			</div>
			<!-- crear ruta para mostrar post con esa categoria-->
			<div class="col-md-6 pull-rigth">
			<a href="https://www.facebook.com/sharer/sharer.php?u=http://www.RadioUNNE997.com/" target="_blank" ><img src="https://lh3.googleusercontent.com/-H8xMuAxM-bE/UefWwJr2vwI/AAAAAAAAEdY/N5I41q19KMk/s32-no/facebook.png"></a>
                
                <a href="http://www.twitter.com/home?status=@RadioUNNE997" target="_blank"><img src="https://lh5.googleusercontent.com/-xZVxH6CsUaQ/UefWwgi8o3I/AAAAAAAAEdk/reo5XS6z8-8/s32-no/twitter.png" class="pull-rigth"></a>
            
                <a href="https://plus.google.com/share?url=http://www.RadioUNNE997.com/" target="_blank"><img src="https://lh5.googleusercontent.com/-5Q7Sj0SXhOA/UefWwcrnZ-I/AAAAAAAAEdg/auK3wqGCbZE/s32-no/googleplus.png" class="pull-rigth" ></a> 
		</div>
	</div>
	</div>
		

<div class="panel-body" style="background:black;color:white">

			<img width="100%" class="img-responsive" src="{{$Post['cabeceraimagen']}}">
			@if($Post['urlmultimedia'] == null)    
 				  <audio  id="player2" src="{{$Post['urlmultimedia']}}" style="display: none"></audio>
 			@else
                  <audio  id="player2" src="{{$Post['urlmultimedia']}}"></audio>
                            <div class="img-responsive">
                            <button style="background:black; color:white" onclick="document.getElementById('player2').play()">Play</button>
                            <button style="background:black; color:white" onclick="document.getElementById('player2').pause()">Pause</button>
                            <button style="background:black; color:white" onclick="document.getElementById('player2').volume+=0.1">Vol +</button>
                            <button style="background:black; color:white" onclick="document.getElementById('player2').volume-=0.1">Vol -</button>
                            </div> 
             @endif 

             <hr width="50%" style="background: gold">


		<div class="col-md-12 text-left">
			
			<hr>
			<h3>
			
			{!!$Post['texto']!!}
			</h3>
			<hr style="background: gold">
		 
			<H5>ETIQUETAS: </H5>

		 	@foreach($Post->tags as $tag)
		 	<a href="{{route('etiqueta', $tag->slug)}}">  <!-- crear ruta para mostrr los post que tengan la etiqueta elegida -->
		 	{{$tag->descripcion}}
		 </a>
		 	@endforeach

			<hr  style="background: gold">
		</div>


  
		<div class="text-left">
		<iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Ffacebook.com%2FradioUNNE997&width=450&layout=standard&action=like&size=small&show_faces=true&share=true&height=80&appId" width="450" height="80" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
		</div>


		<div class="text-left">
		<a class="twitter-follow-button"
		  href="https://twitter.com/RadioUNNE997"
		  data-size="large">
		Follow @RadioUNNE997</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
		</div>

		<br>
		<span style="border: 2px gold solid;">&nbsp Visita número: {!! $Post->totalV !!} &nbsp</span>
	

</div>

</div>



</div>

	

	<div class="col-md-4 col-md-offset-0 text-rigth">
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
		<div class="row">

			<div class="col-md-12 text-center">
				<section style="background:gold">
                        <h5><strong style="color: black">twitter.com/radiounne997</strong></h5>
                </section>
            	
			 
                <a class="twitter-timeline" data-lang="es" data-width="280" data-height="500" href="https://twitter.com/RadioUNNE997?ref_src=twsrc%5Etfw">Tweets by RadioUNNE997</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
             </div>
             </div>
             
            	<br>
				<div class="row">

				<div class="col-md-12 text-center">
				<section style="background:gold">
                        <h5><strong style="color: black">facebook.com/RadioUnne99.7</strong></h5>
                </section>
            	

            <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2F%2FRadioUnne99.7&tabs=timeline&width=280&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="280" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
        </div>
        </div>


    </div>

</div>


@stop




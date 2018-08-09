
@extends('layouts.master')

@section('content')

	<div class="row">
	<div class="col-md-8">
	<div class="row">	
@foreach($POSTS as $p)


<div class="col-md-12" style=" border:grey 2px solid;border-left: black 2px solid; border-right: black 2px solid;">
    <div class="row">


<div class="col-md-4 pull-right">
    <br>


<img class="img-responsive " src="{{$p->cabeceraimagen}}" style="width: 210px; height: 160px; margin-right: 0px;">
<br>
</div>




<div class="col-md-8 pull-left" style="margin-left: 0px;">
    <br>
<h3 style="min-height:45px;margin-left: 0px;">
	 <a href="{{ url('/post/show/' . $p->id) }}">
<FONT COLOR="#F1BE00">{!! $p->titulo !!}</FONT>
</h3>
<FONT COLOR="#F9F8F3"><h4>{!! str_limit($p->texto, $limit = 200, $end = '...') !!} </h4></FONT>
</a>
</div>



</div>
</div>



@endforeach



{{$POSTS->links()}}
</div>
</div>

<div class="col-md-4 col-md-offset-0 text-rigth">
	
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
@endsection


@extends('layouts.master')


@section('content')
  
	<div class="row">
	<div class="col-md-8">
	
@foreach($POSTS as $p)

<div class="row">
   
<div class="col-md-12" style=" border:grey 2px solid;border-left: black 2px solid; border-right: black 2px solid;">
  </div>


<div class="col-md-4">
    <br>


<img class="img-responsive " src="{{$p->cabeceraimagen}}" style="width: 210px; height: 160px; margin-right: 0px;">
<br>
</div>




<div class="col-md-8 " style="margin-left: 0px;">
    <br>
 <a href="{{ url('/post/show/' . $p->id) }}">
<h3 style="min-height:45px;margin-left: 0px;">	
<FONT COLOR="#F1BE00">{!! $p->titulo !!}</FONT>
</h3>
<FONT COLOR="#F9F8F3"><h4>{!! str_limit($p->texto, $limit = 200, $end = '...') !!} </h4></FONT>
</a>
</div>

</div>






@endforeach



{{$POSTS->links()}}
</div>



<div class="col-md-4">

	<br>
   

            <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2F%2FRadioUnne99.7&tabs=timeline&width=280&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="280" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
       
		<br><br><br>
            <p style="width: 280px;">
                 <a class="twitter-timeline" data-lang="es" data-width="300" data-height="500" href="https://twitter.com/RadioUNNE997?ref_src=twsrc%5Etfw">Tweets by RadioUNNE997</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
            </p>

</div>

@endsection
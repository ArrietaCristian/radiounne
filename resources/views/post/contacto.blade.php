@include('layouts.2lateral')



<audio src="http://stream.unne.edu.ar:8000/radio" type="audio/mp4" autoplay="autoplay" id="player" label="Radio UNNE">
    </audio>
<hr style="margin:0px;border: 2PX solid grey">

   <!--  <div class="row"> -->
<!-- 
    <div class=" col-md-2 img-responsive " align="center" style="background-color: black; "></div>
    <div class=" col-md-1 img-responsive " align="center" style="background-color: grey; "></div>
    <div class=" col-md-1 img-responsive " align="center" style="background-color: white; "></div> -->
 <div class=" col-md-4 img-responsive " style="background-image: url('{{$img->get(0)->url}}'); width: 100; height: 100; ">
 <!--  <div class="row">
    <div class="col-md-12">
        <div class="row" style="margin-bottom:0px; ">
          <div class="col-md-6"></div>
          <div class="col-md-6" style="color: black; margin: 0px;"><h3><strong>RADIO UNNE 997</strong></h3></div>
        </div> -->
<div class="container">
                            <img src="{{$img->get(1)->url}}" width="170" height="100" style="border: 2PX solid grey; margin-top: 0px;">

                            <button class="glyphicon glyphicon-play" style="background:grey; color: black " onclick="document.getElementById('player').play()"></button>                            
                            <button class="glyphicon glyphicon-stop" style="background:grey; color: black " onclick="document.getElementById('player').pause()"></button>
                            <button class="glyphicon glyphicon-volume-up" style="background:grey; color: black " onclick="document.getElementById('player').volume+=0.1"></button>
                            <button class="glyphicon glyphicon-volume-down" style="background:grey; color: black " onclick="document.getElementById('player').volume-=0.1"></button>
                            </div> 
                        </div>
     
  <!-- <div class=" col-md-1 img-responsive " align="center" style="background-color: white; "></div>
  <div class=" col-md-1 img-responsive " align="center" style="background-color:grey; "></div>
  <div class=" col-md-2 img-responsive " align="center" style="background-color: black; "></div> -->
<!-- </div> -->
<hr style="margin:0px; border: 2PX solid grey">
   
<div class="container"> 


<body style="background: black; color: white" >                          

  <div class="col-md-8 text.left">
  <br>


  <h1><strong><u>Dirección:</u></strong> Gelabert 189. Corrientes (3400) </h1>
  <br>

  <h1><strong><u>Email:</u></strong> radiounne@unne.edu.ar</h1>  
  <br>

  <h1><strong><u>Telefono/Fax:</u></strong> (+54) (0379)-4437778 </h1>
  <br>

  <div class="row">
  <div class="col-md-4">
  <h1><strong><u>Facebook</u></strong></h1>  <DIV>
                <a href="https://www.facebook.com/RadioUNNE997" target="_blank"><img src="{{$img->get(27)->url}}" width="50%"></a>
                </DIV>
     </div>
     <div class="col-md-6">
      <br>
      <br>
      <br>
      <br>
      <a href="https://www.facebook.com/RadioUNNE997" target="_blank"><h1>www.facebook.com/RadioUNNE997</h1></a>
     </div>
 </div>

 <div class="row">
  <div class="col-md-4">
  <h1><strong><u>Twitter</u></strong></h1>  <DIV>
                <a href="http://www.twitter.com/RadioUNNE997" target="_blank" ><img src="{{$img->get(26)->url}}" width="50%"></a>
                </DIV>
     </div>
     <div class="col-md-6">
      <br>
      <br>
      <br>
      <br>
      <a href="http://www.twitter.com/RadioUNNE997" target="_blank"><h1>www.twitter.com/RadioUNNE997</h1></a>
     </div>
 </div>

  <div class="row">
  <div class="col-md-4">
  <h1><strong><u>Instagram</u></strong></h1>   <DIV>
                <a href="http://instagram.com/RadioUNNE997" target="_blank" ><img src="{{$img->get(25)->url}}" width="50%"></a>
                </DIV>
     </div>
     <div class="col-md-6">
      <br>
      <br>
      <br>
      <br>
       <a href="http://instagram.com/RadioUNNE997" target="_blank"><h1>www.instagram.com/RadioUNNE997</h1></a>
     </div>
 </div>

  

  
</div>
</body>
</div>



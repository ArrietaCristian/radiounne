    
       <section>
           <div class="col-md-12 img-responsive" style="padding-right: 0; padding-left: 0; padding: 0; padding-top: 0; margin-right: 0;" >
           
            <img class="img-responsive" src="{{$img->get(28)->url}}"  style=" padding-right: 0; padding-top: 0; padding-left: 0; padding: 0; margin-right: 0; margin-left: 0; ">
        
            
           </div>  
       </section>


 <div class="container" style="padding-right: 0; padding-left: 0; padding: 0; padding-top: 0;">
       <div class="col-md-12 col-sm-12">
           <div class="row">
        
      <!--   <div class="row" > -->

            <div class="col-md-8 col-sm-8 pull-center img-responsive" style="margin-left: 0px;margin-right: 0px; height: 330px; padding-right: 0; padding-left: 0; padding: 0; padding-top: 0; background-color: black; border:gold 2px solid;border-left: black 2px solid; border-right: black 2px solid;">
                 
               <hr style="margin-top: 15px;">
               
              <h4 style="margin-left: 50px;"><FONT COLOR="#F1BE00"><STRONG>RADIO UNNE 997</STRONG></FONT></h4>
             @include('layouts.IR')

             



                <hr>
               
            </div>
            
          
            <div class="col-md-3  img-responsive" style="margin-left: 20px;" >
                       
                       <br> <br> 

            <div class="row">                   
              
               <a class="img-responsive " href="https://www.facebook.com/RadioUNNE997" target="_blank"><img src="{{$img->get(26)->url}}" style="margin-left: 10px; margin-right: 10px; width: 50px;" ></a>  
                
               
               <a class="img-responsive" href="http://www.twitter.com/RadioUNNE997" target="_blank" ><img src="{{$img->get(25)->url}}" style="margin-left: 10px; margin-right: 10px; width: 50px;"></a> 
                
                
                <a class="img-responsive" href="https://www.youtube.com/user/RadioUNNE997" target="_blank"><img src="{{$img->get(23)->url}}" style="margin-left: 10px; margin-right: 10px; width: 50px;" ></a> 
                 
                <a class="img-responsive" href="http://instagram.com/RadioUNNE997" target="_blank" ><img src="{{$img->get(24)->url}}" style="margin-left: 10px; margin-right: 10px; width: 50px;" ></a> 
             
              
                 </div>
                <!-- <form class="navbar-form navbar-left" role="search" action="{{url('post/search')}}" method="GET" >
                  <br>
                        <div class="form-group ">
                        <input type="text" class="form-control col-xs-8" size= name='search' placeholder="Buscar ..." />
                        </div>
                        <button type="submit" class="glyphicon glyphicon-search" style="background:black;color: white; width: 190px;"></button>
                    </form> -->
                    <br>
                    {{ Form::open(['route' => ['post.search'], 'method' => 'GET']) }}
                      <p>{{ Form::text('search', old('search'), array('placeholder'=>'buscar...')) }}</p>
                       <p>{{ Form::submit('BUSCAR', ['class' => 'glyphicon glyphicon-search', 'style' => 'background:black;color: white; width: 190px;']) }}</p>
                    {{ Form::close() }}
            
               </div>            
            

        </div>
       </div>
   </div>
    


    <br><br>


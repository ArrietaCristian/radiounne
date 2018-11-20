    
       <section>
           <div class="col-md-12 img-responsive" style="padding-right: 0; padding-left: 0; padding: 0; padding-top: 0; margin-right: 0;" >
           
            <img class="img-responsive" src="{{$img->get(29)->url}}"  style=" padding-right: 0; padding-top: 0; padding-left: 0; padding: 0; margin-right: 0; margin-left: 0; ">
        
            
           </div>  
       </section>


 <div class="container" style="padding-right: 0; padding-left: 0; padding: 0; padding-top: 0;">
       <div class="row">
       <div class="col-md-12 col-sm-12">
           <div class="row">
        
      <!--   <div class="row" > -->

  <div class="col-md-7 col-sm-7 pull-center img-responsive" style="margin-left: 0px;margin-right: 0px; height: 330px; padding-right: 0; padding-left: 0; padding: 0; padding-top: 0; background-color: black; border:gold 2px solid;border-left: black 2px solid; border-right: black 2px solid;">
                 
               <hr style="margin-top: 15px;">
               
              

              <h3  style="margin-left: 50px;"><FONT COLOR="#F1BE00"><STRONG>&nbsp&nbsp  RADIO UNNE 997 &nbsp&nbsp &nbsp&nbsp     En vivo</STRONG></FONT></h3>
             @include('layouts.IR')

             



                <hr>
               
   </div>
            
          
<div class="col-md-4  img-responsive" style="margin-left: 20px;" >
                       
                       

   <div class="row">   

      
      <div class="col-md-12 col-sm-12 "> 
                 <section class="text-center" style="background:grey" >
                        <h4><strong style="color: white">Últimas Noticias</strong></h4>
                </section>                

              
                
                       <a href="{{ url('/post/show/' . $POST->get(0)->id) }}">

                       <!-- <div class="col-md-3">                       
                         <img class="img-responsive " src="{{$POST->get(0)->cabeceraimagen}}" style="width: 40px; height: 35px;"></div> -->
                        <!--  <div class="col-md-8"> -->
                        <p><i class="glyphicon glyphicon-asterisk"></i>   {!! str_limit($POST->get(0)->titulo, $limit = 90, $end = '...') !!}</p>
                       <!--  </div> -->
                       </a>
                     
                              

              <div class="row">
                <div class="col-md-12">
                 
                     <a href="{{ url('/post/show/' . $POST->get(1)->id) }}">                       
                     <!--  <div class="col-md-3"><img class="img-responsive " src="{{$POST->get(1)->cabeceraimagen}}" style="width: 40px; height: 35px;"></div>   -->
                        <p><i class="glyphicon glyphicon-asterisk"></i>   {!! str_limit($POST->get(1)->titulo, $limit = 90, $end = '...') !!}</p>
                       
                    </a>
                  </div>
                </div> 

                 <div class="row">
                <div class="col-md-12">
                  
                   <a href="{{ url('/post/show/' . $POST->get(2)->id) }}">                   
                  <!--  <div class="col-md-3"><img class="img-responsive " src="{{$POST->get(2)->cabeceraimagen}}" style="width: 40px; height: 35px;"></div> -->
                        <p><i class="glyphicon glyphicon-asterisk"></i>   {!! str_limit($POST->get(2)->titulo, $limit = 90, $end = '...') !!} </p>
                    
                   </a>
                  </div>
                 </div> 
                

               <!--   <div class="row">
                    <div class="col-md-12">
                   <a href="{{ url('/post/show/' . $POST->get(3)->id) }}">
                    <div class="col-md-3"><img class="img-responsive " src="{{$POST->get(3)->cabeceraimagen}}" style="width: 40px; height: 35px;"></div>
                   
                        <p>{!! str_limit($POST->get(3)->titulo, $limit = 70, $end = '...') !!} </p>
                    
                   </a>
                </div>
        </div> -->
             

              <section class="text-center" style="background:grey">
                        <h4><strong style="color: white">Lo más visto</strong></h4>
              </section>

              <div class="row ">
                <div class="col-md-12">
                  <a href="{{ url('/post/show/' .  $TV->get(0)->id) }}">
                           <!--  <div class="col-md-3"><img class="img-responsive" src="{{$TV->get(0)->cabeceraimagen}}" style="width: 40px; height: 35px;">
                            </div> -->
                           
                                <p><i class="glyphicon glyphicon-ok"></i>   {!! str_limit($TV->get(0)->titulo, $limit = 90, $end = '...') !!} </p>
                            </a>
                          </div>
                        </div>


                        <div class="row ">
                <div class="col-md-12">
                  <a href="{{ url('/post/show/' .  $TV->get(1)->id) }}">
                           <!--  <div class="col-md-3"><img class="img-responsive" src="{{$TV->get(1)->cabeceraimagen}}" style="width: 40px; height: 35px;">
                            </div> -->
                           
                                <p><i class="glyphicon glyphicon-ok"></i>   {!! str_limit($TV->get(1)->titulo, $limit = 90, $end = '...') !!} </p>
                            </a>
                          </div>
                        </div>

              <div class="row ">
                <div class="col-md-12">
                  <a href="{{ url('/post/show/' .  $TV->get(2)->id) }}">
                           <!--  <div class="col-md-3"><img class="img-responsive" src="{{$TV->get(2)->cabeceraimagen}}" style="width: 40px; height: 35px;">
                            </div> -->
                           
                                <p><i class="glyphicon glyphicon-ok"></i>   {!! str_limit($TV->get(2)->titulo, $limit = 90, $end = '...') !!} </p>
                            </a>
                          </div>
                        </div>

                      <!--  <div class="row ">
                 <div class="col-md-12">
                  <a href="{{ url('/post/show/' .  $TV->get(3)->id) }}">
                            <div class="col-md-3"><img class="img-responsive" src="{{$TV->get(3)->cabeceraimagen}}" style="width: 40px; height: 35px;">
                            </div>
                           
                                <p>{!! str_limit($TV->get(3)->titulo, $limit = 70, $end = '...') !!} </p></div>
                            </a>
                          </div>
                        </div> -->
                 </div> 
          
              </div>            
            </div>
 </div>


   </div>
 </div>
    </div>

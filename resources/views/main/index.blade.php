@extends('main.master')
@section('content')
  
    <!-- =====start slider ===== -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
		
		
		 @foreach(  $slider as  $slider_val)

					 
						 
			               <li data-target="#carouselExampleIndicators" data-slide-to="0" class=" "></li> 
 
 			      @endforeach
				  
				  
			
			
        </ol>
        <div class="carousel-inner">
		
		
		
			 @foreach(  $slider as  $slider_val)

						 <div class="carousel-item slid-a  <?php  if($loop->iteration   == 1 ){echo "active";}  ?>   ">
						 			
                <img class="d-block w-100" src="{{ URL::to('/').'/images/'.$slider_val->single_photo}}" alt="<?php  
				
				
				 foreach(  $slider_val->get_slider_description  as  $slider_val_des)
				 {
					echo	  $slider_val_des->title  ;
				 }
						 
						 ?>">

            </div>
						 
			   
 			      @endforeach
				  
				  
           
			
			
			
        </div>

    </div>
    <!-- =====end slider ===== -->

    <!-- =====start about-dc ===== -->
    <div class="about-doct sections">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="box-img-about-doc">
                        <img src="./imags/about-doctor/doctor.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="box-title-about-doc">
                        <h3> {{  site_settings("doct_Name")  }}  </h3>
                        <p>   {{  site_settings("doct_About")  }}  </p>
                         
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- =====end about-dc ===== -->

    <!-- ===== start service ===== -->
    <div class="service sections">
        <div class="container">
            <div class="bar-hed text-center">
                <h2 class=" text-center"> خدماتنا </h2>
                <i class="minus fas fa-minus"></i>
                <i class="compress fas fa-user-md"></i>
                <!-- <i class="compress far fa-lightbulb"></i> -->
                <i class="minus fas fa-minus"></i>
            </div>
            <div class="row">
			 
				  
				  
			
			@foreach(  $services as  $services_val)
			
			
                    <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="box-service">
                                <a href="{!! $services_val->get_services_path()  !!} ">
                                    <img src="{{ URL::to('/').'/images/'.$services_val->image}}" alt="">
					 	@foreach(  $services_val->get_services_description  as  $services_val_dec)

                                    <h5>  {{  $services_val_dec->title}}  </h5>
                                    <p>   
									  <?php  $small = substr( $services_val_dec->description  ,0, 100);    ?> {!!  $small  !!} 
									  </p>
									 @endforeach
                                </a>
                            </div>
                        </div>
						
						 @endforeach
						
						
						
						
					
					

            </div>
        </div>
    </div>
    <!-- ===== end service ===== -->

    <!-- ===== start maps ===== -->
    <div class="maps sections">
        <div class="bar-hed text-center">
            <h2 class=" text-center"> موقعنا </h2>
            <i class="minus fas fa-minus"></i>
            <i class="compress fas fa-user-md"></i>
            <!-- <i class="compress far fa-lightbulb"></i> -->
            <i class="minus fas fa-minus"></i>
        </div>
       {!!  site_settings('google_maps') !!} 
    </div>
    <!-- ===== end maps ===== -->

   
  <!--======================start Testimonials ====================== -->
  <div class="testimonials text-center" id="testimon">
        <div class="container">
                <div class="bar-hed text-center " style="    z-index: 10;
                position: relative;">
                        <h2 class=" text-center"> اراء العملاء </h2>
                        <i class="minus fas fa-minus"></i>
                        <i class="compress fas fa-user-md"></i>
                        <!-- <i class="compress far fa-lightbulb"></i> -->
                        <i class="minus fas fa-minus"></i>
                    </div>
          <div class="owl-carousel owl-theme owl-loaded" id="testimonials">
		  
		  
		  
		  
		  
		  @foreach(  $types as  $types_val)
		  
		    <div class="testi">
              <img src="{{ URL::to('/').'/images/'.$types_val->single_photo}}">
			  
			   @foreach(  $types_val->get_types_description  as  $types_val_dec)
			   
			   
              <h5>   {{  $types_val_dec->title}}  </h5>
              <span>  {{  $types_val_dec->job_title}}  </span>
              <p>  {!! $types_val_dec->description   !!}  </p>
			  
			  
			  
   @endforeach 
   
   
   
            </div>
			
			
			
			
						 @endforeach
						 
						 
		  
          
			
			
			
			
			
			
			
          </div>
        </div>
        <div class="overlay"></div>
      </div>
      <!--====================== end Testimonials ======================  -->
    

    <!-- ===== start blog ===== -->
    <div class="blog sections">
        <div class="container">
            <div class="bar-hed text-center">
                <h2 class=" text-center"> اخر الاخبار </h2>
                <i class="minus fas fa-minus"></i>
                <i class="compress fas fa-user-md"></i>
                <i class="minus fas fa-minus"></i>
            </div>
            <div class="row"> 
			
			
			
			
			@foreach(  $NEWS as  $NEWS_val)
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card"">
                        <img class=" card-img-top" src="{{ URL::to('/').'/images/'.$NEWS_val->single_photo}}" alt="Card image cap">
                        <div class="card-body">
						
									   @foreach(  $NEWS_val->get_NEWS_description  as  $tNEWS_val_val_dec)

						
                            <h5 class="card-title">   {{  $tNEWS_val_val_dec->title}}  </h5>
                            <p class="card-text">   <?php  $small = substr(  $tNEWS_val_val_dec->description ,0, 125);    ?> {!!  $small  !!}   </p>
                            <a href="{!! $NEWS_val->get_NEWS_path()  !!} ">المزيد</a>
							   @endforeach 
							
							
                        </div>
                    </div>
                </div>
				
				
				   @endforeach 
				
						 
						 
						 
            </div>
        </div>
    </div>
    <!-- ===== end blog ===== -->

@endsection

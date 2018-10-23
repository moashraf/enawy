 <html lang="en">
    <title> {{  site_settings("Web site name")  }}    </title>
<?php  $locale = App::getLocale();  ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=Cairo" rel="stylesheet">
    <link rel="stylesheet" href=" {{ asset('/css/all.css')}} ">
    <!-- ===================owl slid=================== -->
    <link rel="stylesheet" href="{{ asset('/css/owl.carousel.min.css ')}}  ">
    <link rel="stylesheet" href=" {{ asset('/css/owl.theme.default.min.css')}}  ">
    <!-- ===================owl slid=================== -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- ===================bootstrap-rtl=================== -->
    <link rel="stylesheet" href=" {{ asset('/css/bootstrap-rtl.css')}}  ">
    <!-- ===================bootstrap-rtl=================== -->
    <!-- ===================bootstrap=================== -->
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css ')}}  ">
    <!-- ===================bootstrap=================== -->
    <link rel="stylesheet" href=" {{ asset('/css/style.css')}}  ">
</head>

<body>


    <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%% navbar %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
    <nav>
        <!-- Menu Toggle btn-->
        <div class="menu-toggle">
            <h3>Menu</h3>
            <button type="button" id="menu-btn">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <!-- Responsive Menu Structure-->

        <!-- logo nav-->
        <div class="logo">
            <img src="  {{ asset('/imags/logo-nav.png')}}">
        </div>
        <!-- logo nav-->
        <ul id="respMenu" class="ace-responsive-menu" data-menu-style="horizontal">
            <li>
                <a href="{{ URL::to('/'.$locale) }}/ "><span class="title">الرئيسية</span></a>
            </li>

            <li>
 			
                <a href="{{ URL::to($locale .'/About/' ) }}">
                    <span class="title">من نحن</span>
                </a>
                
            </li>
            <li>
                <a href="#">
                    <span class="title"> خدماتنا</span>
                </a>
                <ul>  


						@foreach(  $services as  $services_val)

						@foreach(  $services_val->get_services_description  as  $services_val_dec)
			<?php if($services_val->services_main_or_children_id ==  0 ){   ?>
						 <li>  <a href="{!!  $services_val->get_services_path()  !!} "> {{  $services_val_dec->title }}  </a>
                        <ul>
						
						
						
						@foreach(  $services_val->children  as  $services_val_dec_children)
						
												@foreach(  $services_val_dec_children->get_services_description  as  $services_val_dec_val)

						<li><a href="{!! $services_val_dec_children->get_services_path()  !!}">    {{  $services_val_dec_val->title }}  </a></li>
				    	 @endforeach
				    	 @endforeach

						
                        </ul>
                    </li>
					<?php } ?>

					 @endforeach
					 @endforeach
					
					
					
					
					
                </ul>
            </li>
            <li>
                    <a href="{{ URL::to($locale .'/news') }}">
                        <span class="title"> الاخبار</span>
                    </a>
                </li>
            <li>
                <a href="{{ URL::to($locale .'/Contact') }}"><span class="title">اتصل بنا </span></a>
            </li>
            <li>
			
			<?php   if (App::isLocale('ar')) {  ?>
                <a href="{{ URL::to('/en') }}">
                    <span class="title">EN</span>
                </a>
			<?php   } else { ?>
			
			<a href="{{ URL::to('/ar') }}">
                    <span class="title">Ar</span>
                </a>
			
						<?php   }  ?>


            </li>
        </ul>
    </nav>

    <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%% end navbar %%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->

    <!-- =====start slider ===== -->
    <div class="social-media-fixed">
        <aside id="sticky-social">
            <ul>
			 
							
                <li><a href="{{  site_settings('facebook')  }}" class="entypo-facebook" target="_blank">
                        <i class="fa fa-facebook"></i>
					   <span>Facebook</span></a></li>
					   
                <li><a href="{{  site_settings('twitter')  }}" class="entypo-twitter" target="_blank">
                        <i class="fa fa-twitter"></i>
                        <span>Twitter</span></a></li>
				 
						
                <li><a href="{{  site_settings('instagram')  }}" class="entypo-instagrem" target="_blank">
                        <i class="fab fa-instagram"></i>
                        <span>Instagram</span></a></li>
         
            </ul>
        </aside>
    </div>
    <!-- =====start slider ===== -->


	 		@yield('content')	
	
	
    <!-- ===== start footer ===== -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="logo-footer">
                        <img src=" {{ asset('/imags/logo-footer.png')}}  " alt="">
                        <p>{{  site_settings('About Us')  }}   </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="box-links">
                        <h3>روابط سريعة</h3>
                        <ul>
						
						
						 <li>
                <a href="{{ URL::to('/'.$locale) }}/ "><span class="title"> <i class="fas fa-chevron-left"></i>  الرئيسية</span></a>
            </li>

            <li> 
			<a href="{{ URL::to($locale .'/About/' ) }}">
             <span class="title">  <i class="fas fa-chevron-left"></i> من نحن</span>
            </a>
            </li>
			 
			   <li>
                    <a href="{{ URL::to($locale .'/news') }}">
                        <span class="title">   <i class="fas fa-chevron-left"></i> الاخبار</span>
                    </a>
                </li>
            <li>
                <a href="{{ URL::to($locale .'/Contact') }}"><span class="title">  <i class="fas fa-chevron-left"></i> اتصل بنا </span></a>
            </li>
			
                            

                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="box-cont">
                        <h3>تواصل معنا</h3>

                    <div class="box-location-new">
                            <h5>عنوان</h5>
                            <ul>
                                <li class=".lii"><i class="fa  fa-map-marker fa-fw"></i>  {{  site_settings('Location')  }}  </li>
                                <li class=".lii"><i class="fa fa-phone fa-fw"></i>     {{  site_settings('phone')  }}   </li>
                                <li class=".lii"><i class="fa fa-mobile fa-fw"></i>  {{  site_settings('phone')  }}  </li>
                                <li class=".lii"><i class="fa fa-envelope-o fa-fw"></i><a href="#">{{  site_settings('Mail')  }} </a></li>
                            </ul>
                        </div>
                        <ul class="soch">
                            <li><a href="{{  site_settings('facebook')  }}"> <i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="{{  site_settings('instagram')  }}"> <i class="fab fa-instagram"></i> </a></li>
                            <li><a href="{{  site_settings('twitter')  }}"> <i class="fab fa-twitter"></i></a></li>
 
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ===== end footer ===== -->

    <!-- ===== start copy ===== -->
    <div class="copy">
        Copyright © 2018 BE4 Egypt.
    </div>
    <!-- ===== end copy ===== -->






    <!-- =====************************************************************************ ===== -->
    <script src=" {{ asset('/js/jquery-3.3.1.min.js')}}  "></script>
    <script src=" {{ asset('/js/owl.carousel.min.js')}}  "></script>
    <script src=" {{ asset('/js/popper.js')}}  "></script>
    <script src=" {{ asset('/js/bootstrap.min.js')}}  "></script>
    <script src=" {{ asset('/js/ace-responsive-menu.js')}}  "></script>
    <script src=" {{ asset('/js/custom.js')}}  "></script>

</body>

</html>

  
		
		 
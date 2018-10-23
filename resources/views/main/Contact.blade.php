@extends('main.master')
@section('content') 

	
	<div class="cover-page">
        <h2 class="h1">اتصل بنا </h2>
    </div>
    <!-- =====end cover ===== -->

    <!-- =====start cntact ===== -->
    <div class="contaict-us sections ">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="box-form ">
                        <h4 class="text-center">ارسل لنا</h4>
                        <!-- {!! Form::open( [ 'route' =>  'orders', 'method' => 'post'] ) !!} -->
                        <input class="form-control" type="text" name="title" placeholder="الاسم" required="">
                        <input class="form-control" type="text" name="phone" placeholder="الهاتف" required="">
                        <input class="form-control" type="email" name="email" placeholder="الايميل" required="">
                        <input class="form-control" type="email" name="email" placeholder="الطول" required="">
                        <input class="form-control" type="email" name="email" placeholder="الوزن" required="">
                        <input class="form-control" type="email" name="email" placeholder="السن" required="">
                        <textarea name="body" id="textarea" rows="5" placeholder="ارسل لنا" required=""></textarea>
                        <button class="btn1">ارسل</button>
                        <!-- {!! Form::close() !!} -->
                    </div>
                </div>
                <div class="col-md-6">
                    <h4>تواصل معنا</h4>
                    <div class="icon-cont">
                        <div class="cont">
                            <ul>
                                <li><i class="fa  fa-map-marker fa-fw fa-1x"></i>  {{  site_settings('Location')  }}   </li>
                                <li><i class="fa fa-phone fa-fw fa-1x"></i>   {{  site_settings('phone')  }}</li>
                                <li><i class="fa fa-mobile fa-fw fa-1x"></i>   {{  site_settings('phone')  }}  </li>
                                <li><i class="fa fa-envelope-o fa-fw fa-1x"></i><a href="#"> {{  site_settings('Mail')  }} </a></li>
                            </ul>
                        </div>
                        <h4>تابعنا على</h4>
                        <ul class="soch">
                               <li><a href="{{  site_settings('facebook')  }}"> <i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="{{  site_settings('instagram')  }}"> <i class="fab fa-instagram"></i> </a></li>
                            <li><a href="{{  site_settings('twitter')  }}"> <i class="fab fa-twitter"></i></a></li>

                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- =====start cntact ===== -->


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






 
   @endsection

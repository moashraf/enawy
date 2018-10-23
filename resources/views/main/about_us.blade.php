@extends('main.master')
@section('content')
    
	
	
<div class="cover-page">
    <h2 class="h1">من نحن</h2>
</div>

<div class="about-us">
    <div class="container">
        <!-- <h3>الرؤية والرسالة</h3> -->
        <div class="bar-hed text-center " style="padding: 30px;">
                <h3> من نحن    </h3>
                <i class="minus fas fa-minus"></i>
                <i class="compress fas fa-user-md"></i>
                <i class="minus fas fa-minus"></i>
            </div>

            <p>   {{  site_settings("About Us")  }}  </p>
            
            <h6>نشكرك على قضاء هذا الوقت معنا ، ونأمل أن نراكم في العيادة.
                </h6>
    </div>
</div>

 <div class="certificate sections">
    <div class="container">
            <div class="bar-hed text-center " style="padding: 30px;">
                    <h3>الشهادات</h3>
                    <i class="minus fas fa-minus"></i>
                    <i class="compress fas fa-user-md"></i>
                    <i class="minus fas fa-minus"></i>
                </div>
       <div class="row">
	   
	    @foreach(  $image as  $image_val)
		
		
		 <div class="col-lg-4 col-md-6">
                        <img src="{{ URL::to('/').'/images/'.$image_val->single_photo}}" alt="">
                    </div>
					
  @endforeach 
	   
                   
					
					
					
					
       </div>
    </div>
</div>

 




 
   @endsection

@extends('main.master')
@section('content')
  
<div class="cv-dr">
    <div class="container">
        <div class="row">

            <div class="col-lg-8">
                <div class="box-title-cv">
                    <h3>{!! $types_id->title  !!}</h3>
                     <p>  {!! $types_id->body  !!}  </p>

                </div>
            </div>
            <div class="col-lg-4">
                    <div class="box-cv-img">
                        <img src="{{ URL::to('/').'/images/'.$types_id->single_photo}}" alt="">
                    </div>
                </div>
        </div>
    </div>
</div>

<div class="info-cv">
<div class="container">
    <div class="row">
            <div class="col-lg-6 appointment">
                    <div class="left">
                        <div class="box-left">
                            <h2>Make an Appointment</h2>
                            <select>
                                <option value="1">option 1</option>
                                <option value="2">option 2</option>
                                <option value="3">option 3</option>
                                <option value="4">option 4</option>
                                <option value="5">option 5</option>
                            </select>
                            <label for="">Name</label>
                            <input type="text" placeholder="Full Name">
                            <label for="">Phone Number</label>
                            <input type="text" placeholder="Phone Number">
                            <label for="">mm/dd/yyy</label>
                            <input type="text" placeholder="mm/dd/yyy">
                            <a href="#">Send request</a>
                        </div>
                    </div>
                </div>
        <div class="col-lg-6">
                <div class="accordion" id="accordionExample">
                        <div class="card">
                          <div class="card-header" id="headingOne">
                            <h5 class="mb-0">
                              <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Overview
                              </button>
                            </h5>
                          </div>
                      
                          <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                              <ul>
                                  <li><p>Programs + Specialties  <span>Newborn Medicine</span></p></li>
                          
                              </ul>
                            </div>
                          </div>
                        </div>
                        <div class="card">
                          <div class="card-header" id="headingTwo">
                            <h5 class="mb-0">
                              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Locations + Directions
                              </button>
                            </h5>
                          </div>
                          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                            <div class="card-body">{!! $types_id->body  !!}  							</div>
                          </div>
                        </div>
                        <div class="card">
                          <div class="card-header" id="headingThree">
                            <h5 class="mb-0">
                              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Honors + Awards
                              </button>
                            </h5>
                          </div>
                          <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                            <div class="card-body">{!! $types_id->body  !!} 
							</div>
                          </div>
                        </div>
                      </div>
        </div>

     
    </div>
</div>
</div>

   @endsection

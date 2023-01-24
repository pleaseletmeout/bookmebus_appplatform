@extends('layouts.main.master')

@section('styles')
<link rel="stylesheet" type="text/css" href="{{asset('/assets/')}}/library/font-awesome-4.3.0/css/font-awesome.min.css">


    <!-- [ PLUGIN STYLESHEET ]
        
=========================================================================================================================-->

    <link rel="shortcut icon" type="image/x-icon" href="{{asset('/assets/')}}/images/icon.png">

    <link rel="stylesheet" type="text/css" href="{{asset('/assets/')}}/css/animate.css">

    <link rel="stylesheet" type="text/css" href="{{asset('/assets/')}}/css/owl.carousel.css">

    <link rel="stylesheet" type="text/css" href="{{asset('/assets/')}}/css/owl.theme.css">

    <link rel="stylesheet" type="text/css" href="{{asset('/assets/')}}/css/magnific-popup.css">

    <!-- [ Boot STYLESHEET ]
        
=========================================================================================================================-->

    <link rel="stylesheet" type="text/css" href="{{asset('/assets/')}}/library/bootstrap/css/bootstrap-theme.min.css">

    <link rel="stylesheet" type="text/css" href="{{asset('/assets/')}}/library/bootstrap/css/bootstrap.css">

    <!-- [ DEFAULT STYLESHEET ] 
        
=========================================================================================================================-->

    <link rel="stylesheet" type="text/css" href="{{asset('/assets/')}}/css/style.css">

    <link rel="stylesheet" type="text/css" href="{{asset('/assets/')}}/css/responsive.css">

    <link rel="stylesheet" type="text/css" href="{{asset('/assets/')}}/css/color/themecolor.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        .form-control{
          height: 40px; 
          color: black; 
          border-radius:5px;
          text-align: center;
          width: 100%;
          background-color:white;
        }
        .row{
          position: sticky;
        }
        .form{
          -webkit-text-size-adjust: 100%;
          padding:40px;
          -webkit-tap-highlight-color: transparent;
          font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
          line-height: 1.42857143;
          color: #333333;
          -webkit-font-smoothing: antialiased;
          font-size: 20px;
          box-sizing: border-box;
          border-radius: 4px;
          background-color: #ffffff;
          box-shadow: 1px 1px 1px 0 rgba(204,204,204,0.5);
          border: 1px solid #ddd;
          border-top: 1px solid #eee;
          display: flex;"
        }
        p{
          margin-top: 20px;
        }
        [type=radio] { 
      position: absolute;
      opacity: 0;
      width: 0;
      height: 0;
      }

      /* IMAGE STYLES */
      [type=radio] + img {
        cursor: pointer;
      }

      /* CHECKED STYLES */
      [type=radio]:checked + img {
        outline: 2px solid #f00;
      }
      .logo{
        width: 70px;
        height: 70px;
        margin: 20px
      }
      </style>
    
    
@endsection

@section('content')
<section class="main-heading" id="home">

  <div class="overlay" style="height: fit-content;"> 
    <div class="row" style="padding-top:80px">
        <div class="col-md-12 col-sm-12 text-center">
            <h1 class="main-heading-title  ">Book Me Bus Search List</h1><br>
            <p class="main-heading-text"></p>
            <div class="btn-bar ">
                <div class="container">
                    <div class="col-sm-12 search-container-xs">
                        <form action="/searchSchedule" class="route-finder-form" method="get" >
                          
                            <div class="row form-group">
                                <div class="col-md-3 subject ">
                                    <div class="input-group origin-box" style="width: 100%">
                                        {{-- <input name="origin" class="form-controll search-controll" style="width: 100%;" type="text" placeholder="Select place of origin" > --}}
                                        <select name="origin" class="form-control search-controll"  id="select1" onchange="getSelectValue(this.value)" required>
                                          <option value="" selected disabled hidden>Select Origin</option>
                                          @foreach($locations as $location)
                                            <option value="{{$location->location_name}}">{{$location->location_name}}</option>
                                          @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3 subject">
                                    <div class="input-group origin-box" style="width: 100%;">
                                        <select name="destination" class="form-control search-controll"  id="select2" onchange="getSelectValue2(this.value)" required>
                                            <option value="" selected disabled hidden>Select Destination</option>
                                          @foreach($locations as $location)
                                            <option value="{{$location->location_name}}">{{$location->location_name}}</option>
                                          @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3 subject">
                                    <div class="input-group origin-box" style="width: 100%;">
                                        <input id="datePicker" name="date"  class="form-controll search-controll" type="date" placeholder="Select date" required style="height: 40px; color: rgb(109,109,109); width: 100%;text-align:center;">
                                    </div>
                                </div>
                                <div class="col-md-3  subject">
                                  <div class="input-group origin-box">
                                      <input id="" class="btn btn-custom-outline" type="submit" value="Search">
                                  </div>
                              </div>
                                
                                {{-- <a href="{{url('/showschedule')}}" class="btn btn-custom-outline" >Search</a> --}}
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

            {{--  --}}
            <div class="container" style="padding-top: 150px;">
                <div class="row center">

                    @foreach($schedules as $schedule)
                    <div class="form">
                        <div class="container-search-result seat-guaranteed">
                            <div class="col-md-12 container-box">
                              <div class="row">
                                <div class="col-md-9 col-sm-12 col-xs-12 pt-10">
                                  <div class="row pd-box-small">
                                    <div class="col-md-3 col-sm-3 hidden-xs departure-boder-right layout-operaotr-log">
                                      <div href="" class="container-logo-operator subtitle">
                                          <a href="#" data-target="#modal-detail" data-toggle="modal" data-value="10780-102-101" data-operator-id="8" title="Click to view details" style="padding-left: 15px">
                                            <img class="image-operator-lg" alt="Seila Angkor Khmer Express" src="https://avocado-app.s3.amazonaws.com/uploads/operator/logo/8/medium_seila-angkor-white.png">
                                          </a>                
                                          <p class="name-operator title label-operator">   {{$schedule->operator_name}}</p>
                                        <div class="rating subtitle mt--5">
                                          <a href="#"class="btnrating trackrable">
                                            <div>
                                                <i class="fa fa-star rated-star star-sm" style="cursor: default"></i>
                                                <i class="fa fa-star rated-star star-sm" style="cursor: default"></i>
                                                <i class="fa fa-star rated-star star-sm" style="cursor: default"></i>
                                                <i class="fa fa-star rated-star star-sm" style="cursor: default"></i>
                                                <i class="fa fa-star rated-star star-sm" style="cursor: default"></i>
                                            </div>
                                            <div class="title-board" style="padding-top: 15px">1012 Reviews</div>
                                          </a>
                                        </div>
                                      </div>
                                    </div>

                                    <div class="col-md-5 col-sm-5 col-xs-6 subtitle pl-left">
                                      <p>
                                        <span class="label" style="color: #333333">Departure :</span>
                                        <span class="title name">{{$schedule->origin}}</span>
                                      </p>
                                    </div>

                                    <div class="col-md-4 col-sm-4 col-xs-6 subtitle pd-right">
                                      <p>
                                        <span class="label" style="color: #333333">Arrival :</span>
                                        <span class="title name">{{$schedule->destination}}</span>
                                      </p>
                                    </div>

                                    <div class="col-md-3 col-sm-3 col-xs-4 subtitle departure-boder-right pl-left-depart" style="padding-top: 25px;">
                                      <p class="time">Departure Time: {{$schedule->departure_time}}</p>
                                      <div style="padding-top: 15px">
                                        <a href="#" data-target="#modal-detail" data-toggle="modal" data-tab-name="boarding-point" data-trackr-action="search-result-boarding-point" class="title-board trackrable" >
                                            <i class="fa fa-map-marker fa-lg icon-stop-point" ></i>Boarding Point
                                        </a>  
                                      </div>         
                                    </div>

                                    <div class="col-md-3 col-sm-3 col-xs-4 subtitle pd-duration" style="padding: 25px">
                                      <div class="text-center">
                                        <span class="title-duration"><span>6H 00</span> (Direct)</span>
                                      </div>
                                      <div class="text-center title-vehicle-name"  style="padding-top: 35px">
                                        <a href="#" data-toggle="modal" data-trackr-action="trip-info"  class="title-board trackrable">
                                          <i class="fa fa-exclamation-triangle">&nbsp;&nbsp;</i>Trip Info
                                        </a>              
                                      </div>
                                    </div>

                                    <div class="col-md-3 col-sm-3 col-xs-4 subtitle departure-boder-left pd-right" style="padding-top: 25px;">
                                      <p class="time">Arrival Time: <br> {{$schedule->arrival_time}}</p>
                                      <a href="#" data-target="#modal-detail" class="title-board trackrable">
                                        <i class="fa fa-map-marker fa-lg icon-stop-point" style="padding-top: 20px;"></i>Drop-off Point
                                      </a>       
                                    </div>

                                    <div class="row container-detail hidden-sm hidden-xs" style="margin-right: -2px; padding-top: 30px ">
                                      <div class="col-sm-6 pd pt-10 text-right pull-right pr-15" >
                                        <span>
                                          <img width="15px" height="20px" src="https://assets.bookmebus.com/assets/seats/seat_available_sample-780fc520e8fa339033c3a68ca2b273ba.png" alt="Seat available sample">
                                        </span>
                                        <span class="title-seat-avaible">Seat Available :</span>
                                        <span class="label-seat-avaible">{{$schedule->max_seat}}</span>
                                      </div>
                                    </div>

                                  </div>
                                </div>

                                <div class="col-md-3 col-sm-12 col-xs-12 layout-book">
                                  <div class="layout-bg-book">
                                    <div class="row">
                                      <div class="col-md-12">
                                        <div class="hidden-xs hidden-sm" >
                                          <a href="#" data-target="#modal-detail" data-toggle="modal" class="search-title-one-stop trackrable">
                                            <span class="underline">Type:  City Bus</span>
                                          </a>                
                                        </div>
                                      </div>
                                    </div>

                                
                                    
                                    <div class="row" style="padding-top: 25px; padding-left: 5px;">
                                      <div class="col-md-12 container-display">
                                        <div class="container-btn-book-search">
                                          <h4 class="title-price-book-search">
                                            <span class="campaign-fare">
                                                {{$schedule->price}}
                                            </span>
                                          </h4>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <button type="button" class="btn btn-success" data-toggle="modal"
                                data-target="#edit3">
                                    Booking Now
                                </button> 
                              </div>
                              <div class="modal fade" id ="edit3" style="margin-top:100px">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Booking</h4>
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="/addTicket" method="post">
                                                @csrf
                                                
                                                <input type="hidden" class="form-control" name="schedule_id"
                                                     required value="{{$schedule->schedule_id}}">
                                                <input type="hidden" class="form-control" name="date"
                                                required value="{{$date}}">
                                                <input type="hidden" class="form-control" name="user_id"
                                                required value="{{Auth::user()->id}}">
                                                <p>Select amount of seat : <input type="number" class="form-control"
                                                        name="seat" min="1" value=""
                                                        required  ></p>
                                                                                        
                                                <p>
                                                  <p>Choose payment method : <br>
                                                    <label>
                                                      <input type="radio" name="payment" value="small" checked>
                                                      <img src="{{asset('/assets/')}}/images/ABA.jpg" class="logo" alt="Option 1">
                                                    </label>
                                                    
                                                    <label>
                                                      <input type="radio" name="payment" value="big">
                                                      <img src="{{asset('/assets/')}}/images/acleda.png" class="logo" alt="Option 2">
                                                    </label>

                                                    <label>
                                                      <input type="radio" name="payment" value="big">
                                                      <img src="{{asset('/assets/')}}/images/Pipay.png" class="logo" alt="Option 2">
                                                    </label>

                                                    <label>
                                                      <input type="radio" name="payment" value="big">
                                                      <img src="{{asset('/assets/')}}/images/cash.png" class="logo" alt="Option 2">
                                                    </label>
                                                                                    
                                                  <p>

                                                    <input class="btn btn-success" style="margin-top:20px" type="submit" value="Make Booking"
                                                        name='edit'>
                                                </p>
                                            </form>
                                            <div class="modal-footer justify-content-between" style="text-align: center">
                                                <button type="button" class="btn btn-default"
                                                    data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                        <!-- /.modal-content -->
                                    </div>
                                    <!-- /.modal-dialog -->
                                </div>
                                <!-- /.modal -->
                            </div>
                          </div>
                    </div>
                  </div>
                    @endforeach
                    
                    
                    
                
            
        </div>
    </div>
</section>

<!-- [/MAIN-HEADING]

============================================================================================================================-->



<!-- [ABOUT US]

============================================================================================================================-->

<section class="aboutus white-background black" id="two">

    <div class="container">

        <div class="row">

            <div class="col-md-12 text-center black">

                <h3 class="title">ABOUT <span class="themecolor">US</span></h3>

                <p class="a-slog">Developed By Adelabu Oluwatoyin Simbiat (16/52HA016) and Supervised By Dr. A. O Ameen</p>

            </div>

        </div>

        <div class="gap">


        </div>


        <div class="row about-box">

            <div class="col-sm-4 text-center">

                <div class="margin-bottom">

                    <i class="fa fa-newspaper-o"></i>

                    <h4>Get Train Tickets from the comfort of your home</h4>

                    <p class="black">Book train tickets from anywhere using the robust ticketing platform exclusively built to provide the passengers with pleasant ticketing experience. </p>

                </div>
                <!-- / margin -->

            </div>
            <!-- /col -->

            <div class="col-sm-4 about-line text-center">

                <div class="margin-bottom">

                    <i class="fa fa-diamond"></i>

                    <h4>Train & Ticketing related information at your fingertips</h4>

                    <p class="black">Checkout available seats, route information, fare information on real time basis with Esheba Platform.</p>

                </div>
                <!-- / margin -->

            </div>
            <!-- /col -->

            <div class="col-sm-4 text-center">

                <div class="margin-bottom">

                    <i class="fa fa-dollar"></i>

                    <h4>Pay Securely</h4>

                    <p class="black">Online payment. (NO REFUND!)</p>

                </div>
                <!-- / margin -->

            </div>
            <!-- /col -->

        </div>
        <!-- /row -->





    </div>
</section>
<script>
  function getSelectValue(select1)
  {
      if(select1 != "")
      {
          $("#select2 option[value='"+select1+"']").hide();
          $("#select2 option[value!='"+select1+"']").show();
      }
  }
  function getSelectValue2(select2)
  {
      if(select2 != "")
      {
          $("#select1 option[value='"+select2+"']").hide();
          $("#select1 option[value!='"+select2+"']").show();
      }
  }
  var datePicker = document.getElementById('datePicker');
  datePicker.min = new Date().toLocaleDateString('en-ca');
  var maxDate = new Date();
  maxDate.setDate(maxDate.getDate() + 9);
  datePicker.max = maxDate.toLocaleDateString('en-ca');
</script>


@endsection




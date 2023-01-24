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
      </style>
    
    
@endsection

@section('content')
<section class="main-heading" id="home">

  <div class="overlay" style="height: fit-content;"> 
    <div class="row" style="padding-top:80px">
        <div class="col-md-12 col-sm-12 text-center">
            <h1 class="main-heading-title  ">Book Me Bus Search List</h1>
            @if(session('status'))
            <div class="alert alert-success">
                <h5 class="">{{session('status')}}</h5>
            </div>
            @endif
            <br>

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
            
            
            
        </div>
    </div>
            
            
        </div>
    </div>
</section>


<!-- [/MAIN-HEADING]

============================================================================================================================-->



<!-- [ABOUT US]

============================================================================================================================-->

<section class="aboutus white-background black" id="two" >

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
@if(session('status'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
@endif
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




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

    
    
@endsection

@section('content')
<section class="main-heading" id="home">

  <div class="overlay" style="height: 1800px;"> 
    <div class="container" style="padding-top: 100px; " >
        <div class="row" >
            <div class=" col-md-12 col-sm-12 text-center">
                <h1 class="main-heading-title"><span class="main-element themecolor" data-elements=" BOOK ME,BOOK ME,BOOK ME"></span></h1>
                <h1 class="main-heading-title"><span class="main-element themecolor" data-elements=" BUS,BUS,BUS"></span>
                </h1>
                <p class="main-heading-text">WELCOME TO,<br />E - TICKETING FOR BUS</p>
                <div class="btn-bar">
                    <a href="{{url('/schedule')}}" class="btn btn-custom theme_background_color">Make Your Booking Now</a> 
                </div>
            </div>
        </div>
    </div>

    

        <div class="page-content" style="    -webkit-text-size-adjust: 100%;
        -webkit-tap-highlight-color: transparent;
        font-family:Helvetica Neue, Helvetica, Arial, sans-serif;
        line-height: 1.42857143;
        color: #333333;
        -webkit-font-smoothing: antialiased;
        font-size: 14px;
        box-sizing: border-box;
        padding: 20px;
        margin-top: 130px;
        margin-left: 50px;
        margin-right: 50px;
        opacity: 0.9;
        border-radius: 8px;
        background-color:aliceblue">
            <div class="section-header" style="padding-left: 30px;">
              <h2 class="section-heading text-highlight">Popular Routes</h2>
            </div>
            <div class="row" style="padding-left: 30px; padding-right: 30px;">
                <div style="margin-top: 10px" class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                  <div class="card-populer" >
                    <img style="border-radius: 4px;" class="route-info-img img-responsive" src="https://avocado-app.s3.amazonaws.com/uploads/route_info/image/7/medium_sihanoukville-koh-rong-cambodia.jpg" alt="Transparent">
                    <div class="card-block p-20">
                      <h4 class="card-title-trip">Bus from Phnom Penh to Sihanoukville </h4>
                      <div class="card-text-popular">
                            Everybody knows about Sihanouk Ville. It is one of the most visited places by both locals and tourists alike. Mostly due to the fact that it is one of the best beachside areas in Cambodia. If you e...
                            <a class="trackrable fb-pixel-trackrable">Read More</a>
                      </div>
                      <div class="text-right">
                          <a class="btn btn-success trackrable fb-pixel-trackrable" style="border-radius: 4px;">View Trip</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div style="margin-top: 10px" class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                  <div class="card-populer">
                    <img style="border-radius: 4px;" class="route-info-img img-responsive" src="https://avocado-app.s3.amazonaws.com/uploads/route_info/image/8/medium_siem-reap-angkor-wat-cambodia.jpg" alt="Transparent">
                    <div class="card-block p-20">
                      <h4 class="card-title-trip">Bus from Phnom Penh to Siem Reap </h4>
                      <div class="card-text-popular">
                            Exploring Siem Reap gives you a unique glimpse into the rich, ancient past of the Kingdom of Wonder. Home to largest religious monument in the world, Angkor Wat, the city prides itself on celebrati...
                            <a class="trackrable fb-pixel-trackrable" data-fb-trackr-action="RouteInfoViewContent" >Read More</a>
                      </div>
                      <div class="text-right">
                          <a class="btn btn-success trackrable fb-pixel-trackrable"style="border-radius: 4px;">View Trip</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div style="margin-top: 10px" class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                  <div class="card-populer">
                    <img style="border-radius: 4px;" class="route-info-img img-responsive" src="https://avocado-app.s3.amazonaws.com/uploads/route_info/image/23/medium_pp2.2.jpg" alt="Transparent">
                    <div class="card-block p-20">
                      <h4 class="card-title-trip">Bus from Sihanoukville to Phnom Penh </h4>
                      <div class="card-text-popular">
                            Phnom Penh is the capital of Cambodia, and is situated where the three rivers meet: the Mekong River, Bassac, and Tonle Sap. The city was once considered as the Gem of Indochina, and is still known...
                            <a class="trackrable fb-pixel-trackrable" >Read More</a>
                      </div>
                      <div class="text-right">
                          <a class="btn btn-success trackrable fb-pixel-trackrable" style="border-radius: 4px;">View Trip</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div style="margin-top: 10px" class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                  <div class="card-populer">
                    <img style="border-radius: 4px;" class="route-info-img img-responsive" src="https://avocado-app.s3.amazonaws.com/uploads/route_info/image/24/medium_boat-1.3.jpg" alt="Transparent">
                    <div class="card-block p-20">
                      <h4 class="card-title-trip">Bus from Phnom Penh to Kampot </h4>
                      <div class="card-text-popular">
                            Kampot is the place to visit in Cambodia if you are hungry for some adventure. It is also ideal for those who are not quite ready for roughing it 100%. At Kampot, not only do you get to enjoy paddl...
                            <a class="trackrable fb-pixel-trackrable" data-fb-trackr-action="RouteInfoViewContent" >Read More</a>
                      </div>
                      <div class="text-right">
                          <a class="btn btn-success trackrable fb-pixel-trackrable" data-fb-trackr-action="RouteInfoViewTrip" style="border-radius: 4px;">View Trip</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div style="margin-top: 10px" class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                  <div class="card-populer">
                    <img style="border-radius: 4px;" class="route-info-img img-responsive" src="https://avocado-app.s3.amazonaws.com/uploads/route_info/image/39/medium_phnom-penh-royal-palace-cambodia.jpg" alt="Transparent">
                    <div class="card-block p-20">
                      <h4 class="card-title-trip">Bus from Siem Reap to Phnom Penh </h4>
                      <div class="card-text-popular">
                            Phnom Penh is the capital of Cambodia, and is situated where the three rivers meet: the Mekong River, Bassac, and Tonle Sap. The city was once considered as the Gem of Indochina, and is still known...
                            <a class="trackrable fb-pixel-trackrable" >Read More</a>
                      </div>
                      <div class="text-right">
                          <a class="btn btn-success trackrable fb-pixel-trackrable" style="border-radius: 4px;">View Trip</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div style="margin-top: 10px" class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                  <div class="card-populer">
                    <img style="border-radius: 4px;" class="route-info-img img-responsive" src="https://avocado-app.s3.amazonaws.com/uploads/route_info/image/81/medium_battambang-french-colonial-architecture-cambodia.jpg" alt="Transparent">
                    <div class="card-block p-20">
                      <h4 class="card-title-trip">Bus from Phnom Penh to Battambang </h4>
                      <div class="card-text-popular">
                            If you want to see another side of Cambodia, visit Battambang! The city is the second largest in the country, and it is located Northwest of Cambodia.
        
                            Battambang is one of the rarely visited place...
                            <a class="trackrable fb-pixel-trackrable" >Read More</a>
                      </div>
                      <div class="text-right">
                          <a class="btn btn-success trackrable fb-pixel-trackrable" style="border-radius: 4px;">View Trip</a>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
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
              <p class="a-slog">Developed By MenglySovan KimChhorngTry SovannaKongMoa YongHao </p>
          </div>
      </div>

      <div class="gap">
      </div>


      <div class="row about-box">
          <div class="col-sm-4 text-center">
              <div class="margin-bottom">
                  <i class="fa fa-newspaper-o"></i>
                  <h4>Get Bus Tickets from the comfort of your home</h4>
                  <p class="black">Book Bus tickets from anywhere using the robust ticketing platform exclusively built to provide the passengers with pleasant ticketing experience. </p>
              </div>
              <!-- / margin -->

          </div>
          <!-- /col -->

          <div class="col-sm-4 about-line text-center">
              <div class="margin-bottom">
                  <i class="fa fa-diamond"></i>
                  <h4>BUS & Ticketing related information at your fingertips</h4>
                  <p class="black">Checkout available seats, route information, fare information on real time basis with BOOK ME BUS.</p>
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



@endsection




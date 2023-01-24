@extends('layouts.user.dashboard')

@section('content')
    <!-- Navbar -->
    <nav class="main-header navbar  navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->

        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
            </li>
            <li class="navbar-nav">
                <a class="nav-link" href="#">User Dashboard</a>

            </li>
        </ul>


        <!-- Right navbar links -->

    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-success elevation-4">
        <!-- Brand Logo -->
        <a href="#" class="brand-link">

            <span class="brand-text font-weight-light">{{now()->format('Y-m-d')}}</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                {{-- <div class="image">
                    <img src="{{asset('/assets/')}}/uploads/404a6378027a553d980b99162a5b4ce8.png" class="img-circle elevation-2" alt="User Image">
                </div> --}}
                <div class="info"> 
                    <a href="{{url('/')}}" class="d-block">{{strtoupper(Auth::user()->name)}}</a>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
                    <li class="nav-item has-treeview menu-open">
                        <a href="{{url('user/profile')}}" class="nav-link active">
                            <i class="nav-icon fas fa-user-alt"></i>
                            <p>
                                Profiles
                            </p>
                        </a>

                    </li>
                    

                    
                    <li class="nav-item">
                        <a href="{{url('user/bookedHistory/'.Auth::user()->id)}}" class="nav-link ">
                            <i class="fa fa-book nav-icon"></i>
                            <p>View Bookings</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link ">
                            <i class="fa fa-mail-bulk nav-icon"></i>
                            <p>Feedback</p>
                        </a>
                    </li>

                    <li>
                    <li class="nav-item">
                        <a href="{{route('logout')}}" class="nav-link" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">
                            <i class="nav-icon fas fa-power-off"></i>
                            <p>
                                Logout
                            </p>
                        </a>
                    </li>
                    <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6" >
                        <h1 class="m-0 text-dark"> Passenger's Profile</h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        
<div class="content">
<div class="container-fluid">
            <div class="row">
        <div class="col-lg-12">

            {{-- <div class="card"> --}}
                {{-- <div class="card-header alert-success">
                    <h5 class="m-0">Quick Tips</h5>
                </div>
                <div class="card-body">
                    Use the links at the left.
                    <br />You can see list of schedules by clicking on "New Booking". The system will display list
                    of available schedules for you which you can view and make bookings from. <br>Before your
                    bookings are saved, you are redirected to make payment. <br>After a successful payment, system
                    generates your ticket ID for you which you are required to bring to the station. <br>You are
                    allowed to view all your booking history by clicking on "View Bookings".
                </div> --}}
                <section class="vh-100 profile_card" style="background-color: #f4f5f7;">
                    <div class="container py-5 h-100">
                      <div class="row d-flex   h-100">
                        <div class="col col-lg-6 mb-4 mb-lg-0" >
                          <div class="card mb-3" style="border-radius: .5rem; width: 1000px">
                            <div class="row g-0">
                              <div class="col-md-4 gradient-custom text-center text-white"
                                style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
                                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava1-bg.webp"
                                  alt="Avatar" class="img-fluid my-5" style="width: 80px;" />
                                <h5>Hello</h5>
                                <p>{{strtoupper(Auth::user()->name)}}</p>
                                <button type="button" style="background-color:transparent;border:none;" class="btn btn-primary" data-toggle="modal"
                                                data-target="#edit3">
                                    <i class="far fa-edit mb-5" id="edit_button"></i>
                                </button> 
                                
                              </div>
                              <div class="col-md-8">
                                <div class="card-body p-4">
                                  <h6>Information</h6>
                                  <hr class="mt-0 mb-4">
                                  <div class="row pt-1">
                                    <div class="col-6 mb-3">
                                      <h6>Email</h6>
                                      <p class="text-muted">{{Auth::user()->email}}</p>
                                    </div>
                                    <div class="col-6 mb-3">
                                      <h6>Phone</h6>
                                      <p class="text-muted">{{Auth::user()->phone_num}}</p>
                                    </div>
                                  </div>
                                  <h6>Address</h6>
                                  <hr class="mt-0 mb-4">
                                  <div class="row pt-1">
                                    <div class="col-6 mb-3">
                                      <p class="text-muted">{{Auth::user()->address}}</p>
                                    </div>
                                  </div>
                                  {{-- <div class="d-flex justify-content-start">
                                    <a href="#!"><i class="fab fa-facebook-f fa-lg me-3"></i></a>
                                    <a href="#!"><i class="fab fa-twitter fa-lg me-3"></i></a>
                                    <a href="#!"><i class="fab fa-instagram fa-lg"></i></a>
                                  </div> --}}
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </section>
                  <div class="modal fade" id ="edit3">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Editing </h4>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form method="POST" action="/user/updateProfile/{{Auth::user()->id}}">
                                                    <!-- Form Group (username)-->
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="mb-3">
                                                        <label class="small mb-1" for="inputUsername">Name (Input your full name ><)</label>
                                                        <input class="form-control" name="update_name" id="inputUsername" type="text" placeholder="Enter your username" value="{{Auth::user()->name}}">
                                                    </div>
                                                    
                                                    
                                                    
                                                    <!-- Form Row-->
                                                    <div class="row gx-3 mb-3">
                                                        <!-- Form Group (phone number)-->
                                                        <div class="col-md-6">
                                                            <label class="small mb-1" for="inputPhone">Phone number</label>
                                                            <input class="form-control" name="update_phone" id="inputphone" type="text" placeholder="Enter your phone number" value="{{Auth::user()->phone_num}}">
                                                        </div>
                                                        <!-- Form Group (birthday)-->
                                                        <div class="col-md-6">
                                                            <label class="small mb-1" for="inputBirthday">Email address</label>
                                                            <input class="form-control" id="inputBirthday" type="text" name="update_email" placeholder="Enter your birthday" value="{{Auth::user()->email}}">
                                                        </div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="small mb-1" for="inputEmailAddress">Address</label>
                                                        <input class="form-control" id="inputEmailAddress" name="update_address" type="text" placeholder="Enter your email address" value="{{Auth::user()->address}}">
                                                    </div>
                                                    <!-- Save changes button-->
                                                    <input type="submit" class="btn btn-primary" style="background-color: #28a745" value="Save changes">
                                                </form>
                                                <div class="modal-footer justify-content-between">
                                                    <button type="button" class="btn btn-default"
                                                        data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                            <!-- /.modal-content -->
                                        </div>
                                        <!-- /.modal-dialog -->
                                    </div>
                                    

            {{-- </div> --}}
        </div>            </div>
    </div>
</div>
</div>            <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
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
            <div class="user-panel  mt-3 pb-3 mb-3 d-flex">
                
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
                        <a href="{{url('user/profile')}}" class="nav-link">
                            <i class="nav-icon fas fa-user-alt"></i>
                            <p>
                                Profile
                            </p>
                        </a>

                    </li>
                    

                    
                    <li class="nav-item">
                        <a href="{{url('user/bookedHistory')}}" class="nav-link active">
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
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark"> Passenger's Dashboard</h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <!-- Content Header (Page header) -->


<section class="content">
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="callout callout-info">
                <h5><i class="fas fa-info"></i> Info:</h5>
                Payment History and Print Tickets
            </div>



            <div class="card">
                <div class="card-header alert-success">
                    <h5 class="m-0">Bookings - Purchased Tickets</h5>
                </div>
                <div class="card-body">
                    <table class="table table-bordered" id='example1'>
                        <thead>
                            <tr>
                                <th>Ticket ID</th>
                                <th>Trip Route</th>
                                <th>Trip Date</th>
                                <th>Amount</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tickets as $ticket)
                            
                            <tr>
                                <td>{{$ticket->ticket_id}}</td> 
                                <td>{{$ticket->origin}} to {{$ticket->destination}}</td>
                                <td>{{$ticket->date}}</td>
                                <td>{{$ticket->booked_seat}}</td>
                                <td>
                                <button type='button' class='btn btn-primary' data-toggle='modal'
                                data-target='#view{{$ticket->ticket_id}}'>
                                View
                            </button>
                                </td>

                                </tr>                                <div class="modal fade" id="view{{$ticket->ticket_id}}">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Details For - {{$ticket->origin}} to {{$ticket->destination}}
                                            <span class="">&#128669;</span></h4>
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">


                                            <p><b>Operator Name :</b>
                                                {{$ticket->operator_name}}                                               </p>
                                            
                                            <p><b>Payment Date :</b>
                                                {{$ticket->created_at}}                                              </p>
                                            <p><b>Price :</b> $
                                                {{$ticket->price}}                                                </p>
                                            

                                                                                              
                                                
<!-- Start -->


<!-- End -->
                              </div>
                                        <!-- /.modal-content -->
                                    </div>
                                    <!-- /.modal-dialog -->
                                    @endforeach
                                </div>
                                
                                </div>
                                                            </tbody>
                    </table>


                </div>

                <br />
            </div>
            <!-- /.invoice -->
        </div><!-- /.col -->
    </div><!-- /.row -->
</div><!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>

        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
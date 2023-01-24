@extends('layouts.user.master')

@section('content')
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">


        </div>
        <ul class="nav navbar-nav">
            <li class="">
                <a href="{{url('/signup')}}">Sign Up</a>
            </li>
            <li class="active">

                <a href="login">Sign In</a>

            <li>
                <a href="{{url('/')}}">Go Back</a>
            </li>
        </ul>
    </div>

</nav>
<div class="signup-page">
    <div class="form">
        <h2>Customer Panel</h2>
        <br>
        <form class="login-form" method="post" role="form" action="{{route('login')}}"  autocomplete="off">
            <!-- json response will be here -->
            @if(session('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
            @endif
            @csrf
            <div id="errorDiv"></div>
            <!-- json response will be here -->

            <div class="col-md-12">
                <div class="form-group">
                    <label>Email Address</label>
                    <input type="email" required name="email">
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" >
                    <span class="help-block" ></span>
                </div>
            </div>



            <div class="col-md-12">
                <div class="form-group">
                    <button type="submit" >
                        SIGN IN
                    </button>
                </div>
            </div>
            <p class="message">
                <a href="#">.</a><br>
            </p>
        </form>
    </div>
</div>
@endsection
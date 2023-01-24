@extends('layouts.user.master')

@section('content')
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">


        </div>
        <ul class="nav navbar-nav">
            <li class="active">
                <a href="{{url('/signup')}}">Sign Up</a>
            </li>
            <li class="">

                <a href="{{url('/login')}}">Sign In</a>

            <li>
                <a href="{{url('/')}}">Go Back</a>
            </li>
        </ul>
    </div>

</nav><div class="signup-page">
<div class="form">
    <h2>Create Account </h2>
    <br>
    <p class="alert alert-info">
        <marquee behavior="" scrollamount="2" direction="">You need to create an account to book/view Buses!
        </marquee>
    </p>
    <form class="login-form" method="post" role="form" action="{{route('signup')}}" enctype="multipart/form-data" id="signup-form"
        autocomplete="off">
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
                <label>Full Name</label>
                <input type="text" required minlength="5" name="name">
            </div>
        </div>

        
        <div class="col-md-6">
            <div class="form-group">
                <label>Email Address</label>
                <input type="email" required name="email">
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label>Contact Number</label>
                <input type="text" minlength="9"  required name="phone_num">
            </div>
        </div>

        {{-- <div class="col-md-6">
            <div class="form-group">
                <label>Select Picture</label>
                <input type="file" name='file' required>
            </div>
        </div> --}}
        <div class="col-md-12">
            <div class="form-group">
                <label>Address</label>
                <input type='text' name="address" class="form-group" required>
                </select>
                <span class="help-block" id="error"></span>
            </div>
        </div> 
        <div class="col-md-6">
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" id="pw" required >
                <span class="help-block" ></span>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label>Confirm Password</label>
                <input type="password" name="password" id="confirm_pw" required>
                <span class="help-block" ></span>
            </div>
        </div>
        {{-- <div class="col-md-6">
            <div class="form-group">
                <label>Confirm Password</label>
                <input type="password" name="cpassword" id="cpassword">
                <span class="help-block" id="error"></span>
            </div>
        </div> --}}
        <div class="col-md-12">
            <div class="form-group">
                <button type="submit" id="btn-signup">
                    CREATE ACCOUNT
                </button>
            </div>
        </div>
        <p class="message">
            <a href="#">.</a><br>
        </p>
    </form>
    
</div>
</div>
<script>
    var password = document.getElementById("pw")
  , confirm_password = document.getElementById("confirm_pw");

    function validatePassword(){
    if(password.value != confirm_password.value) {
        confirm_password.setCustomValidity("Passwords Don't Match");
    } else {
        confirm_password.setCustomValidity('');
    }
    }

    password.onchange = validatePassword;
    confirm_password.onkeyup = validatePassword;
</script>
@endsection
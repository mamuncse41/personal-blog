@extends('frontEnd.layouts.master')
@section('title','login')
@section('mainContent')
<div class="login">
    <div class="login-grids">
        <div class="col-md-6 log">
            <h3>Login</h3>
            <p>Welcome, please enter the following to continue.</p>
            <form>
                <h5>User Name:</h5>	
                <input type="text" value="">
                <h5>Password:</h5>
                <input type="password" value="">					
                <input type="submit" value="Login">

            </form>
            <a href="#">Forgot Password ?</a>
        </div>
        <div class="col-md-6 login-right">
            <h3>New Registration</h3>
            <p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
            <a href="{{url('/register-page')}}" class="hvr-bounce-to-bottom button">Create An Account</a>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
@endsection

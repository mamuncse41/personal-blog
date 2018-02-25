@extends('frontEnd.layouts.master')
@section('title','register')
@section('mainContent')
<div class="sign-up-form">
    <h3>Register Here</h3>
    <div class="sign-up">
        <h5>Personal Information</h5>
        <div class="sign-u">
            <div class="sign-up1">
                <h4 class="a">First Name* :</h4>
            </div>
            <div class="sign-up2">
                <form>
                    <input type="text" placeholder=" " required=" "/>
                </form>
            </div>
            <div class="clearfix"> </div>
        </div>
        <div class="sign-u">
            <div class="sign-up1">
                <h4 class="b">Last Name* :</h4>
            </div>
            <div class="sign-up2">
                <form>
                    <input type="text" placeholder=" " required=" "/>
                </form>
            </div>
            <div class="clearfix"> </div>
        </div>
        <div class="sign-u">
            <div class="sign-up1">
                <h4 class="c">Email Address* :</h4>
            </div>
            <div class="sign-up2">
                <form>
                    <input type="text" placeholder=" " required=" "/>
                </form>
            </div>
            <div class="clearfix"> </div>
        </div>
        <h6>Login Information</h6>
        <div class="sign-u">
            <div class="sign-up1">
                <h4 class="d">Password* :</h4>
            </div>
            <div class="sign-up2">
                <form>
                    <input type="password" placeholder=" " required=" "/>
                </form>
            </div>
            <div class="clearfix"> </div>
        </div>
        <div class="sign-u">
            <div class="sign-up1">
                <h4>Confirm Password* :</h4>
            </div>
            <div class="sign-up2">
                <form>
                    <input type="password" placeholder=" " required=" "/>
                </form>
            </div>
            <div class="clearfix"> </div>
        </div>
        <form>
            <input type="submit" value="Submit">
        </form>
    </div>
</div>
@endsection


@extends('template')
@section('content')

<style type="text/css">
   .sectionku{
    background-image: url("{{ URL ::asset('img/dyah/bg-landing.png')}}");
    background-size: 1370px 500px;
    background-repeat: repeat;
}
</style>

<div class="containerku">
    <div class="bar-1">
            <a href="{{ url('/partner/home') }}"><span><img src="{{ URL ::asset('img/dyah/home-icon-silhouette.png')}}">Home</span></a>
            <a href="{{ url('/partner') }}"><span style="margin-left: 40px;"><img src="{{ URL ::asset('img/dyah/ic-customer.png')}}">Customer</span></a>
            <a href="{{ url('/detail') }}"><span style="margin-left: 40px;"><img src="{{ URL::asset('img/dyah/settings.png')}}">Profile</span></a>
    </div>
</div>
<div class="bar-2">
    <b style="margin-left: 105px;">Home</b>
</div>
<div class="sectionku">
    <div class="container">
        <br>
        <h1 style="margin-top: 80px;font-weight: 900 ;font-size: 50px;color: #590D7A;font-family: arial;">WELCOME</h1>
        <h5 style="padding-top: 20px;padding-bottom: 10px;"> 
            Application to manage customer data Telkomsigma.<br>
            If there's data that doesn't match? You can modify the data in this application.<br>
            Make it easy.
        </h5>
        <div style="padding-bottom: 30px;">
           <a href="{{ url('/partner') }}"><button class="btn btn-round" style="background-image: linear-gradient(90deg,#9932CC, #E672C3);font-size: 14px;">GO TO CUSTOMER LIST</button></a> 
        </div>
        <br>
        <br>
        <br>
    </div>    

</div>            



@endsection
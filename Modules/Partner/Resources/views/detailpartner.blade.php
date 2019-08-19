@extends('partner::layouts.template')

@section('content')


{{-- formatin Rupiah PHP --}}
<?php
function rupiah($angka){
	
	$hasil_rupiah = "Rp. " . number_format($angka,0,',','.');
	return $hasil_rupiah;
   
}

function formatangka($angka){
	
	$halo = number_format($angka,0,',','.');
	return $halo;
   
}


?>

<div class="containerku">
    <div class="bar-1">
        <a href="{{ url('/partner/home') }}"><span><img src="{{ URL ::asset('img/dyah/home-icon-silhouette.png')}}">Home</span></a>
        <a href="{{ url('/partner') }}"><span style="margin-left: 40px;"><img src="{{ URL ::asset('img/dyah/ic-customer.png')}}">Customer</span></a>
        <a href="{{ url('/detail') }}"><span style="margin-left: 40px;"><img src="{{ URL::asset('img/dyah/settings.png')}}">Profile</span></a>
    </div>
    <div class="bar-2">
        <b><a style="color:white;" href="{{ url('/partner') }}">Customer List</a> > Edit Customer</b>
    </div>

    <div class="sectionku" >
        <div class="container__customer__edit row">
            <div class="col-md-6">
                <div class="form__customer">
                    <table  width="100%;">
                        <div style="float: left;">
                            <img src="{{ URL::asset('img/dyah/ic-id.png')}}"><span>Customer ID</span>
                        </div>
                        <br>
                        <label style="font-size: 14px;margin-top: 10px;">{{$Detail->id}}</label>
                        <br>

                        <div style="float: left;">
                            <img src="{{ URL::asset('img/dyah/002-pass.png')}}"><span>Customer Name</span>
                        </div>
                        <br>
                        <label style="font-size: 14px;margin-top: 10px;">{{$Detail->name}}</label>
                        <br>

                        <div style="float: left;">
                            <img src="{{ URL::asset('img/dyah/address.png')}}"><span>Address 1</span>
                        </div>
                        <br>
                        <label style="font-size: 14px;margin-top: 10px;">{{$Detail->street}}</label>
                        <br>

                        <div style="float: left;">
                            <img src="{{ URL::asset('img/dyah/address.png')}}"><span>Address 2</span>
                        </div>
                        <br>
                        <label style="font-size: 14px;margin-top: 10px;">{{$Detail->street2}}</label>
                        <br>

                        <div style="float: left;">
                            <img src="{{ URL::asset('img/dyah/calen.png')}}"><span>Company Date of Estabilished</span>
                        </div>
                        <br>
                        <label style="font-size: 14px;margin-top: 10px;">{{$Detail->company_doe}}</label>
                        <br>

                        <div style="float: left; ">
                            <img src="{{ URL::asset('img/dyah/007.png')}}"><span>Bussiness Type</span>
                        </div>
                        <br>
                        <label style="font-size: 14px;margin-top: 10px;">{{-- dinamic select --}}</label>
                        <br>

                        <div style="float: left;">
                            <img src="{{ URL::asset('img/dyah/006-number-1.png')}}"><span>Employee Number</span>
                        </div>
                        <br>
                        <label style="font-size: 14px;margin-top: 10px;">{{formatangka($Detail->number_of_employee) }}</label>
                        <br>

                        <div style="float: left;">
                            <img src="{{ URL::asset('img/dyah/call-answer.png')}}"><span>Company Phone</span>
                        </div>
                        <br>
                        <label style="font-size: 14px;margin-top: 10px;">{{$Detail->company_phone }}</label>
                        <br>

                        <div style="float: left;">
                            <img src="{{ URL::asset('img/dyah/web.png')}}"><span>Company Website</span>
                        </div>
                        <br>
                        <label style="font-size: 14px;margin-top: 10px;">{{$Detail->company_website }}</label>
                        <br>

                        <div style="float: left;">
                            <img src="{{ URL::asset('img/dyah/coin-stack.png')}}"><span>Assets Value</span>
                        </div>
                        <br>
                        <label style="font-size: 14px;margin-top: 10px;">{{rupiah($Detail->asset_value)}}</label>
                        <br>

                        <div style="float: left;" >
                            <img src="{{ URL::asset('img/dyah/004-money.png')}}"><span>Company Income</span>
                        </div>
                        <br>
                        <label style="font-size: 14px;margin-top: 10px;">{{rupiah($Detail->company_annual_income)}}</label>
                        <br>

                        <div style="float: left;">
                            <img src="{{ URL::asset('img/dyah/envelope.png')}}"><span>Company Email</span>
                        </div>
                        <br>
                        <label style="font-size: 14px;margin-top: 10px;">{{$Detail->company_email}}</label>
                        <br>
                    </table>
                </div>
            </div>
            <div class="col-md-6">
               <div class="form__customer">
                <table width="100%;">
                    <div style="float: left;">
                        <img src="{{ URL::asset('img/dyah/coin-stack.png')}}"><span>Product Sold Permonth</span>
                    </div>
                    <br>
                    <label style="font-size: 14px;margin-top: 10px;">{{formatangka($Detail->product_sold_permonth)}}</label>
                    <br>

                    <div style="float: left;">
                        <img src="{{ URL::asset('img/dyah/004-money.png')}}"><span>Company Revenue</span>
                    </div>
                    <br>
                    <label style="font-size: 14px;margin-top: 10px;">{{rupiah($Detail->company_revenue)}}</label>
                    <br>

                    <div style="float: left;">
                        <img src="{{ URL::asset('img/dyah/005-user.png')}}"><span>Company Competitor</span>
                    </div>
                    <br>
                    <label style="font-size: 14px;margin-top: 10px;">{{$Detail->company_competitor}}</label>
                    <br>

                    <div style="float: left;">
                        <img src="{{ URL::asset('img/dyah/controls.png')}}"><span>ID Segment</span>
                    </div>
                    <br>
                    <label style="font-size: 14px;margin-top: 10px;">{{-- dinamic select --}}</label>
                    <br>

                    <div style="float: left;">
                        <img src="{{ URL::asset('img/dyah/001-clock.png')}}"><span>Company History</span>
                    </div>
                    <br>
                    <label style="font-size: 14px;margin-top: 10px;">{{$Detail->company_history }}</label>
                    <br>

                    <div style="float: left;">
                        <img src="{{ URL::asset('img/dyah/005-user.png')}}"><span>Customer Number</span>
                    </div>
                    <br>
                    <label style="font-size: 14px;margin-top: 10px;">{{formatangka($Detail->company_num_customer)}}</label>
                    <br>

                    <div style="float: left;">
                        <img src="{{ URL::asset('img/dyah/theatre-masks.png')}}"><span>Company Culture</span>
                    </div>
                    <br>
                    <label style="font-size: 14px;margin-top: 10px;">{{$Detail->company_culture}}</label>
                    <br>

                    <div style="float: left;">
                        <img src="{{ URL::asset('img/dyah/history (2).png')}}"><span>Company Working Hours</span>
                    </div>
                    <br>
                    <label style="font-size: 14px;margin-top: 10px;">{{$Detail->company_workinghours}}</label>
                    <br>

                    <div style="float: left;">
                        <img src="{{ URL::asset('img/dyah/004-money.png')}}"><span>Company Budget</span>
                    </div>
                    <br>
                    <label style="font-size: 14px;margin-top: 10px;">{{rupiah($Detail->company_budget_permonth)}}</label>
                    <br>

                    <div style="float: left;">
                        <img src="{{ URL::asset('img/dyah/008-product.png')}}"><span>Company Product Needs</span>
                    </div>
                    <br>
                    <label style="font-size: 14px;margin-top: 10px;">{{$Detail->company_product_needs}}</label>
                    <br>

                    <div style="float: left;">
                        <img src="{{ URL::asset('img/dyah/001-clock.png')}}"><span>Last AM</span>
                    </div>
                    <br>
                    <label style="font-size: 14px;margin-top: 10px;">{{$Detail->company_last_am}}</label>
                    <br>
                </td>
            </tr>
        </table>
    </div>
</div>



</div>



</div>
</div>
<div class="bar-3" style="padding: 0">
    <a href="{{ url('/partner') }}"><button class="btn btn-danger btn-round">back</button></a>
    {{-- <button onclick="SubmitAll()" data-toggle="modal" data-target="#succesafterclick" class="btn btn-info btn-round">Save</button> --}}
</div>
</div>





@stop



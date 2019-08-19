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

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css">

<div class="containerku">
    <div class="bar-1">
        <a href="{{ url('/partner/home') }}"><span><img src="{{ URL ::asset('img/dyah/home-icon-silhouette.png')}}">Home</span></a>
        <a href="{{ url('/partner') }}"><span style="margin-left: 40px;"><img src="{{ URL ::asset('img/dyah/ic-customer.png')}}">Customer</span></a>
        <a href="{{ url('/detail') }}"><span style="margin-left: 40px;"><img src="{{ URL::asset('img/dyah/settings.png')}}">Profile</span></a>
    </div>
    <div class="bar-2">
        <b><a style="color:white;" href="{{ url('/partner') }}">Customer List</a> > Edit Customer</b>
    </div>

    <div class="sectionku">
         <div class="button group">
    <a href="{{ url('partner/download/allpartner') }}"> <button class="btn btn-round btn-sm" style="background-color: #006400; float: right;text-align: center;margin-right: 30px;margin-bottom: 10px;margin-top: 20px;"><i id="eye" class="fas fa-download"></i>&nbsp; Excel</button></a>
    </div>
        <div class="container__customer__detil">
            <h4>General Information</h4>
            <hr>
            <div class="form__customer">
                <table width="100%;">
                    <tr>
                        <td width="25%">
                            <div>
                                <img src="{{ URL::asset('img/dyah/ic-id.png')}}"><span>Customer ID</span>
                            </div>
                        </td>
                        <td width="40%">
                            <span class="item-span">: {{$Detail->id}}</span>
                        </td>
                    </tr>
                    <tr>
                        <td width="25%">
                            <div style="float: left;">
                                <img src="{{ URL::asset('img/dyah/002-pass.png')}}"><span>Customer Name</span>
                            </div>
                        </td>
                        <td width="40%">
                            <span class="item-span">: {{$Detail->name}}</span>
                        </td>
                    </tr>
                    <tr>
                        <td width="25%">
                            <div style="float: left;">
                                <img src="{{ URL::asset('img/dyah/address.png')}}"><span>Address 1</span>
                            </div>
                        </td>
                        <td width="40%">
                            <span class="item-span">: {{$Detail->street}}</span>
                        </td>
                    </tr>
                    <tr>
                        <td width="25%">
                            <div style="float: left;">
                                <img src="{{ URL::asset('img/dyah/address.png')}}"><span>Address 2</span>
                            </div>
                        </td>
                        <td width="40%">
                            <span class="item-span">: {{$Detail->street2}}</span>
                        </td>
                    </tr>
                    <tr>
                        <td width="25%">
                            <div style="float: left;">
                                <img src="{{ URL::asset('img/dyah/calen.png')}}"><span>Company Date of Estabilished</span>
                            </div>
                        </td>
                        <td width="40%">
                            <span class="item-span">: {{$Detail->company_doe}}</span>
                        </td>
                    </tr>
                    <tr>
                        <td width="25%">
                            <div style="float: left;">
                                <img src="{{ URL::asset('img/dyah/007.png')}}"><span>Bussiness Type</span>
                            </div>
                        </td>
                        <td width="40%">
                            <span class="item-span">: {{-- dinamic select --}}</span>
                        </td>
                    </tr>
                    <tr>
                        <td width="25%">
                            <div style="float: left;">
                                <img src="{{ URL::asset('img/dyah/006-number-1.png')}}"><span>Employee Number</span>
                            </div>
                        </td>
                        <td width="40%">
                            <span class="item-span">: {{formatangka($Detail->number_of_employee) }}</span>
                        </td>
                    </tr>
                    <tr>
                        <td width="25%">
                            <div style="float: left;">
                                <img src="{{ URL::asset('img/dyah/call-answer.png')}}"><span>Company Phone</span>
                            </div>
                        </td>
                        <td width="40%">
                            <span class="item-span">: {{$Detail->company_phone }}</span>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <div class="section-2">
        <div class="container__customer__detil">
            <h4>PIC Information</h4>
            <hr>
            <div class="form__customer">
                <table width="100%;">
                    <tr>
                        <td width="25%">
                            <div style="float: left;">
                                <img src="{{ URL::asset('img/dyah/web.png')}}"><span>Company Website</span>
                            </div>
                        </td>
                        <td width="40%">
                            <span class="item-span">: {{$Detail->company_website }}</span>
                        </td>
                    </tr>
                    <tr>
                        <td width="25%">
                            <div style="float: left;">
                                <img src="{{ URL::asset('img/dyah/coin-stack.png')}}"><span>Assets Value</span>
                            </div>
                        </td>
                        <td width="40%">
                            <span class="item-span">: {{rupiah($Detail->asset_value)}}</span>
                        </td>
                    </tr>
                    <tr>
                        <td width="25%">
                            <div style="float: left;">
                                <img src="{{ URL::asset('img/dyah/004-money.png')}}"><span>Company Income</span>
                            </div>
                        </td>
                        <td width="40%">
                            <span class="item-span">: {{rupiah($Detail->company_annual_income)}}</span>
                        </td>
                    </tr>
                    <tr>
                        <td width="25%">
                            <div style="float: left;">
                                <img src="{{ URL::asset('img/dyah/envelope.png')}}"><span>Company Email</span>
                            </div>
                        </td>
                        <td width="40%">
                            <span class="item-span">: {{$Detail->company_email}}</span>
                        </td>
                    </tr>
                    <tr>
                        <td width="25%">
                            <div style="float: left;">
                                <img src="{{ URL::asset('img/dyah/coin-stack.png')}}"><span>Product Sold Permonth</span>
                            </div>
                        </td>
                        <td width="40%">
                            <span class="item-span">: {{formatangka($Detail->product_sold_permonth)}}</span>
                        </td>
                    </tr>
                    <tr>
                        <td width="25%">
                            <div style="float: left;">
                                <img src="{{ URL::asset('img/dyah/004-money.png')}}"><span>Company Revenue</span>
                            </div>
                        </td>
                        <td width="40%">
                            <span class="item-span">: {{rupiah($Detail->company_revenue)}}</span>
                        </td>
                    </tr>
                    <tr>
                        <td width="25%">
                            <div style="float: left;">
                                <img src="{{ URL::asset('img/dyah/005-user.png')}}"><span>Company Competitor</span>
                            </div>
                        </td>
                        <td width="40%">
                            <span class="item-span">: {{$Detail->company_competitor}}</span>
                        </td>
                    </tr>
                    <tr>
                        <td width="25%">
                            <div style="float: left;">
                                <img src="{{ URL::asset('img/dyah/controls.png')}}"><span>ID Segment</span>
                            </div>
                        </td>
                        <td width="40%">
                            <span class="item-span">: {{-- dinamic select --}}</span>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <div class="section-2">
        <div class="container__customer__detil">
            <h4>Additional Information</h4>
            <hr>
            <div class="form__customer">
                <table width="100%;">
                    <tr>
                        <td width="25%">
                            <div style="float: left;">
                                <img src="{{ URL::asset('img/dyah/001-clock.png')}}"><span>Company History</span>
                            </div>
                        </td>
                        <td width="40%">
                            <span class="item-span">: {{$Detail->company_history }}</span>
                        </td>
                    </tr>
                    <tr>
                        <td width="25%">
                            <div style="float: left;">
                                <img src="{{ URL::asset('img/dyah/005-user.png')}}"><span>Customer Number</span>
                            </div>
                        </td>
                        <td width="40%">
                            <span class="item-span">: {{formatangka($Detail->company_num_customer)}}</span>
                        </td>
                    </tr>
                    <tr>
                        <td width="25%">
                            <div style="float: left;">
                                <img src="{{ URL::asset('img/dyah/theatre-masks.png')}}"><span>Company Culture</span>
                            </div>
                        </td>
                        <td width="40%">
                            <span class="item-span">: {{$Detail->company_culture}}</span>
                        </td>
                    </tr>
                    <tr>
                        <td width="25%">
                            <div style="float: left;">
                                <img src="{{ URL::asset('img/dyah/history (2).png')}}"><span>Company Working Hours</span>
                            </div>
                        </td>
                        <td width="40%">
                            <span class="item-span">: {{$Detail->company_workinghours}}</span>
                        </td>
                    </tr>
                    <tr>
                        <td width="25%">
                            <div style="float: left;">
                                <img src="{{ URL::asset('img/dyah/004-money.png')}}"><span>Company Budget</span>
                            </div>
                        </td>
                        <td width="40%">
                            <span class="item-span">: {{rupiah($Detail->company_budget_permonth)}}</span>
                        </td>
                    </tr>
                    <tr>
                        <td width="25%">
                            <div style="float: left;">
                                <img src="{{ URL::asset('img/dyah/008-product.png')}}"><span>Company Product Needs</span>
                            </div>
                        </td>
                        <td width="40%">
                            <span class="item-span">: {{$Detail->company_product_needs}}</span>
                        </td>
                    </tr>
                    <tr>
                        <td width="25%">
                            <div style="float: left;">
                                <img src="{{ URL::asset('img/dyah/001-clock.png')}}"><span>Last AM</span>
                            </div>
                        </td>
                        <td width="40%">
                            <span class="item-span">: {{$Detail->company_last_am}}</span>
                        </td>
                    </tr> 
                </table>
            </div>
        </div>
                <ul style="align-content: center; margin-left:20px; margin-top:20px;" class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                    <li><a class="active nav-item nav-link " data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">BOD</a></li>
                    <li><a class=" nav-item nav-link" data-toggle="tab" href="#menu1" role="tab" aria-controls="nav-profile" aria-selected="false">Branch</a></li>
                    <li><a class=" nav-item nav-link" data-toggle="tab" href="#menu2" role="tab" aria-controls="nav-profile" aria-selected="false">Division</a></li>
                    <li><a class=" nav-item nav-link" data-toggle="tab" href="#menu3" role="tab" aria-controls="nav-profile" aria-selected="false">Partner</a></li>
                    <li><a class=" nav-item nav-link" data-toggle="tab" href="#menu4" role="tab" aria-controls="nav-profile" aria-selected="false">Product</a></li>
                    <li><a class=" nav-item nav-link" data-toggle="tab" href="#menu5" role="tab" aria-controls="nav-profile" aria-selected="false">Socmed</a></li>
                    <li><a class=" nav-item nav-link" data-toggle="tab" href="#menu6" role="tab" aria-controls="nav-profile" aria-selected="false">Subsidiary</a></li>
                    <li><a class=" nav-item nav-link" data-toggle="tab" href="#menu7" role="tab" aria-controls="nav-profile" aria-selected="false">History</a></li>

                </ul>

                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">

                        <div style="padding: 0px 40px 10px 40px;">
                            <div style="text-align: right;">
                                <button style="text-align: right;" data-toggle="modal" data-target="#addBod" class="btn btn-primary btn-round" >Add</button>
                            </div>
                            <br>
                            <table id="Bodstableid" class="table border" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th style="width:5%;">No.</th>
                                        <th>BOD Name</th>
                                        <th>Position</th>
                                        <th>Date of Birth</th>
                                        <th>Phone Number</th>
                                        <th>Email Address</th>
                                        <th style="width:10%;" colspan="2">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  {{-- dinamical table --}}                                        
                              </tbody>
                          </table>
                      </div>


                  </div>

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



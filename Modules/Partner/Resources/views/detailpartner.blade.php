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
                        <input type="text" id="inputan_id" class="form-control" name="" style="margin-bottom: 15px;width: 340px;border-radius: 3px;" readonly="" placeholder="" value="{{$Detail->id}}" maxlength="32">
                        <div style="float: left;">
                            <img src="{{ URL::asset('img/dyah/002-pass.png')}}"><span>Customer Name</span>
                        </div>
                        <input type="text" class="form-control " name="" style="margin-bottom: 15px;width: 340px;border-radius: 3px;" readonly="" placeholder="Dyah Group" value="{{$Detail->name}}">

                        <div style="float: left;">
                            <img src="{{ URL::asset('img/dyah/address.png')}}"><span>Address 1</span>
                        </div>
                        <textarea rows="4" class="form-control" placeholder="Address 1" style="margin-bottom: 15px;width: 340px;border-radius: 3px;" readonly="">{{$Detail->street}}</textarea>

                        <div style="float: left;">
                            <img src="{{ URL::asset('img/dyah/address.png')}}"><span>Address 2</span>
                        </div>
                        <textarea rows="4" class="form-control" placeholder="Address 2" style="margin-bottom: 15px;width: 340px;border-radius: 3px;" readonly="">{{$Detail->street2}}</textarea>

                        <div style="float: left;">
                            <img src="{{ URL::asset('img/dyah/calen.png')}}"><span>Company Date of Estabilished</span>
                        </div>
                        <input id="inputan_company_doe" class="form-control unstyled" type="date" name="" value="{{$Detail->company_doe}}" style="margin-bottom: 15px;width: 340px;border-radius: 3px;">
                        

                        <div style="float: left; ">
                            <img src="{{ URL::asset('img/dyah/007.png')}}"><span>Bussiness Type</span>
                        </div>
                        <div  class="select"  style="width: 340px;">
                            <select  id="inputan_id_businesstype" style="border:solid 1px lightgrey;border-radius: 3px;" >
                              <!-- <option value="0">Select</option> -->
                              {{-- dinamic select --}}
                          </select>
                      </div>

                      <div style="float: left;">
                        <img src="{{ URL::asset('img/dyah/006-number-1.png')}}"><span>Employee Number</span>
                    </div>
                    <input id="inputan_number_of_employee" class="form-control unstyled numbering" value="{{formatangka($Detail->number_of_employee) }}" type="text" name="" style="margin-bottom: 15px;width: 340px;border-radius: 3px;"  onkeypress="return isNumber(event)" maxlength="20">

                    <div style="float: left;">
                        <img src="{{ URL::asset('img/dyah/call-answer.png')}}"><span>Company Phone</span>
                    </div>
                    <input id="inputan_company_phone" pattern="[0-9]" class="form-control" type="text" name="" value="{{$Detail->company_phone }}" style="margin-bottom: 15px;width: 340px;border-radius: 3px;"  onkeypress="return isNumber(event)" maxlength="20">

                    <div style="float: left;">
                        <img src="{{ URL::asset('img/dyah/web.png')}}"><span>Company Website</span>
                    </div>
                    <input id="inputan_company_website" class="form-control" type="text" name="" value="{{$Detail->company_website }}" style="margin-bottom: 15px;width: 340px;border-radius: 3px;" maxlength="200">

                    <div style="float: left;">
                        <img src="{{ URL::asset('img/dyah/coin-stack.png')}}"><span>Assets Value</span>
                    </div>
                    <input id="inputan_asset_value" class="form-control uang" type="text" name="" value="{{rupiah($Detail->asset_value)}}" style="margin-bottom: 15px;width: 340px;border-radius: 3px;"  onkeypress="return isNumber(event)" maxlength="20">

                    <div style="float: left;" >
                        <img src="{{ URL::asset('img/dyah/004-money.png')}}"><span>Company Income</span>
                    </div>
                    <input id="inputan_company_annual_income"  class="form-control uang" type="text" name="" value="{{rupiah($Detail->company_annual_income)}}" style="margin-bottom: 15px;width: 340px;border-radius: 3px;"  onkeypress="return isNumber(event)" maxlength="20">
                    
                    <div style="float: left;">
                        <img src="{{ URL::asset('img/dyah/envelope.png')}}"><span>Company Email</span>
                    </div>
                    <input id="inputan_company_email" class="form-control"  type="email" name="" value="{{$Detail->company_email}}" style="margin-bottom: 15px;width: 340px;border-radius: 3px;" maxlength="200">
                </table>
            </div>
        </div>
        <div class="col-md-6">
         <div class="form__customer">
            <table width="100%;">
                <div style="float: left;">
                    <img src="{{ URL::asset('img/dyah/coin-stack.png')}}"><span>Product Sold Permonth</span>
                </div>
                <input id="inputan_product_sold_permonth"  class="form-control numbering" type="text" name="" value="{{formatangka($Detail->product_sold_permonth)}}" style="margin-bottom: 15px;width: 340px;border-radius: 3px;"  onkeypress="return isNumber(event)" maxlength="20">

                <div style="float: left;">
                    <img src="{{ URL::asset('img/dyah/004-money.png')}}"><span>Company Revenue</span>
                </div>
                <input id="inputan_company_revenue"  class="form-control uang" type="text" name="" value="{{rupiah($Detail->company_revenue)}}" style="margin-bottom: 15px;width: 340px;border-radius: 3px;" onkeypress="return isNumber(event)" maxlength="20" >

                <div style="float: left;">
                    <img src="{{ URL::asset('img/dyah/005-user.png')}}"><span>Company Competitor</span>
                </div>
                <input id="inputan_company_competitor" class="form-control" type="text" name="" value="{{$Detail->company_competitor}}" style="margin-bottom: 15px;width: 340px;border-radius: 3px;" maxlength="200">

                <div style="float: left;">
                    <img src="{{ URL::asset('img/dyah/controls.png')}}"><span>ID Segment</span>
                </div>
                <div class="select "  style="width: 340px;">
                    <select  id="inputan_id_segment" style="border:solid 1px lightgrey;border-radius: 3px;" >
                         {{-- dinamic select --}}
                    </select>
                </div>

                <div style="float: left;">
                    <img src="{{ URL::asset('img/dyah/001-clock.png')}}"><span>Company History</span>
                </div>
                <textarea id="inputan_company_history" rows="4" class="form-control" placeholder="Company History"  style="margin-bottom: 15px;width: 340px;border:solid 1px lightgrey;border-radius: 3px;">{{$Detail->company_history }}</textarea>

                <div style="float: left;">
                    <img src="{{ URL::asset('img/dyah/005-user.png')}}"><span>Customer Number</span>
                </div>
                <input id="inputan_company_num_customer"  class="form-control numbering" type="text" name="" value="{{formatangka($Detail->company_num_customer)}}" style="margin-bottom: 15px;width: 340px;border-radius: 3px;"  onkeypress="return isNumber(event)" maxlength="10">

                <div style="float: left;">
                    <img src="{{ URL::asset('img/dyah/theatre-masks.png')}}"><span>Company Culture</span>
                </div>
                <textarea id="inputan_company_culture" rows="4" class="form-control" placeholder=" Company Culture" style="margin-bottom: 15px;width: 340px;border:solid 1px lightgrey;border-radius: 3px;"> {{$Detail->company_culture}}</textarea>

                <div style="float: left;">
                    <img src="{{ URL::asset('img/dyah/history (2).png')}}"><span>Company Working Hours</span>
                </div>
                <textarea id="inputan_company_workinghours" rows="4" class="form-control" placeholder="Company Working Hours" style="margin-bottom: 15px;width: 340px;border:solid 1px lightgrey;border-radius: 3px;">{{$Detail->company_workinghours}}</textarea>

                <div style="float: left;">
                    <img src="{{ URL::asset('img/dyah/004-money.png')}}"><span>Company Budget</span>
                </div>
                <input id="inputan_company_budget_permonth" class="form-control uang" type="text" name="" value="{{rupiah($Detail->company_budget_permonth)}}" style="margin-bottom: 15px;width: 340px;border-radius: 3px;"  onkeypress="return isNumber(event)" maxlength="20">

                <div style="float: left;">
                    <img src="{{ URL::asset('img/dyah/008-product.png')}}"><span>Company Product Needs</span>
                </div>
                <textarea id="inputan_company_product_needs" rows="4" class="form-control" placeholder="Company Product Needs" style="margin-bottom: 15px;width: 340px;border:solid 1px lightgrey;border-radius: 3px;">{{$Detail->company_product_needs}}</textarea>

                <div style="float: left;">
                    <img src="{{ URL::asset('img/dyah/001-clock.png')}}"><span>Last AM</span>
                </div>
                <input id="inputan_company_last_am" class="form-control" type="text" name="" value="{{$Detail->company_last_am}}" style="margin-bottom: 15px;width: 340px;border-radius: 3px;" maxlength="200">

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



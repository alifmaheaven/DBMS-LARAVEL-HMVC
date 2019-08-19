@extends('partner::layouts.template')

@section('content')
<style type="text/css">
    .unstyled::-webkit-inner-spin-button{
        display: none;
        -webkit-appearance:none;
    }
</style>

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




<ul style="align-content: center; margin-left:20px; margin-top:20px;" class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
    <li><a class="active nav-item nav-link " data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">BOD</a></li>
    <li><a class=" nav-item nav-link" data-toggle="tab" href="#menu1" role="tab" aria-controls="nav-profile" aria-selected="false">Branch</a></li>
    <li><a class=" nav-item nav-link" data-toggle="tab" href="#menu2" role="tab" aria-controls="nav-profile" aria-selected="false">Division</a></li>
    <li><a class=" nav-item nav-link" data-toggle="tab" href="#menu3" role="tab" aria-controls="nav-profile" aria-selected="false">Partner</a></li>
    <li><a class=" nav-item nav-link" data-toggle="tab" href="#menu4" role="tab" aria-controls="nav-profile" aria-selected="false">Product</a></li>
    <li><a class=" nav-item nav-link" data-toggle="tab" href="#menu5" role="tab" aria-controls="nav-profile" aria-selected="false">Socmed</a></li>
    <li><a class=" nav-item nav-link" data-toggle="tab" href="#menu6" role="tab" aria-controls="nav-profile" aria-selected="false">Subsidiary</a></li>
    <li><a class=" nav-item nav-link" data-toggle="tab" href="#menu7" role="tab" aria-controls="nav-profile" aria-selected="false">History</a></li>
    <li><a class=" nav-item nav-link" data-toggle="tab" href="#menu8" role="tab" aria-controls="nav-profile" aria-selected="false">Competitor</a></li>
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

  {{-- Add Data Bod --}}
  <div class="modal" id="addBod" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel" style="font-weight: bold;">Add BOD</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
          </button>
      </div>
      <div class="modal-body">

            
        <div id="allertBodadd"></div>
           


        <form id="form-Bod">
          <div class="form-group has-error">
            <label style="color: black;font-weight: bold;"> BOD Name</label>
            <div class="input-group">

              <input  type="text" class="form-control" id="add_Bodname" placeholder="Input Name" name="add_Bodname" style="margin-bottom: 15px;">
          </div>
      </div>
      <div class="form-group">
        <label style="color: black;font-weight: bold;">Position</label>
        <div class="input-group">

          <div class="select"  style="width:470px;">
            <select id="add_Bodposition" style="border:solid 1px lightgrey;border-radius: 3px;">
              {{-- dinamic select --}}
          </select>
      </div>
  </div>
</div>

<div class="form-group" style="width: 470px;">
    <label style="color: black;font-weight: bold;">Date of Birth</label>
    <div class="input-group">

        <input type="date" class="form-control unstyled" id="add_Bodbirthday" name="bday" style="margin-bottom: 15px;border:solid 1px lightgrey;border-radius: 3px;">
    </div>
</div>

<div class="form-group">
    <label style="color: black;font-weight: bold;">BOD Phone</label>
    <div class="input-group">
      <input type="text" pattern="[0-9]" class="form-control unstyled" id="add_Bodphone" placeholder="Input Phone Number" name="username" style="margin-bottom: 15px;" onkeypress="return isNumber(event)" maxlength="20">
  </div>
</div>

<div class="form-group">
    <label style="color: black;font-weight: bold;">Email</label>
    <div class="input-group">
      <input type="email" class="form-control" id="add_Bodemail" placeholder="Input Email" name="username" style="margin-bottom: 15px;">
  </div>
</div>   


</form>

</div>
<div class="modal-footer">

    <button id="addBodbutton" form="form-daftar" type="button" class="btn btn-primary">Add</button>
</div>
</div>
</div>
</div>

{{-- edit Data BOD --}}
<div class="modal" id="editBod" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel" style="font-weight: bold;">Edit BOD</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                    <div id="allertBodedit"></div>

        <form id="form-Bod">
          <div class="form-group ">
            <label style="color: black;font-weight: bold;"> BOD Name</label>
            <div class="input-group">
                <input type="hidden" class="form-control" id="edit_Bodarray" >
              <input type="text" class="form-control" id="edit_Bodname" placeholder="Input Name" name="add_Bodname" required style="margin-bottom: 15px;">
          </div>
      </div>
      <div class="form-group">
        <label style="color: black;font-weight: bold;">Position</label>
        <div class="input-group">

          <div class="select"  style="width:470px;">
            <select id="edit_Bodposition" style="border:solid 1px lightgrey;border-radius: 3px;">
              {{-- dinamic select --}}
          </select>
      </div>
  </div>
</div>

<div class="form-group" style="width: 470px;">
    <label style="color: black;font-weight: bold;">Date of Birth</label>
    <div class="input-group">

        <input type="date" class="form-control unstyled" id="edit_Bodbirthday" name="bday" style="margin-bottom: 15px;border:solid 1px lightgrey;border-radius: 3px;">
    </div>
</div>

<div class="form-group">
    <label style="color: black;font-weight: bold;">BOD Phone</label>
    <div class="input-group">
      <input type="text" pattern="[0-9]" class="form-control unstyled" id="edit_Bodphone" placeholder="Input Phone Number" name="username" style="margin-bottom: 15px;" onkeypress="return isNumber(event)" maxlength="20">
  </div>
</div>

<div class="form-group">
    <label style="color: black;font-weight: bold;">Email</label>
    <div class="input-group">
      <input type="email" class="form-control" id="edit_Bodemail" placeholder="Input Email" name="username" style="margin-bottom: 15px;">
  </div>
</div>   


</form>

</div>
            <div class="modal-footer">

                <button id="editBodbutton" form="form-daftar" type="button" class="btn btn-primary">Edit</button>
            </div>
        </div>
    </div>
</div>


<script> 
    var Bodstable = @JSON($Bods);
    var remBodstable = [];
    var position = @JSON($Positions);   
</script>
<script src="{{ URL::asset('js/function/companybod.js') }}"></script>




<div class="tab-pane fade" id="menu1"role="tabpanel" aria-labelledby="nav-contact-tab">

            <div style="padding: 0px 40px 10px 40px;">
                <div style="text-align: right;">
                   <button data-toggle="modal" data-target="#addBranch" class="btn btn-primary btn-round" >Add</button>
                        </div>
       <br>
    <table class="table border" id="Branchstableid" >
        <thead>
            <tr>
                <th style="width: 5%;">No.</th>
                <th style="width: 20%;">Company Branch</th>
                <th style="width: 60%;">Address</th>
                <th style="width: 15%;" colspan="2">Action</th>
            </tr>
        </thead>
        <tbody>

        </tbody>
    </table>
</div>
    
</div>


{{-- Add Data Branch --}}
<div class="modal" id="addBranch" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel" style="font-weight: bold;">Add Branch</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                    <div id="allertBranchadd"></div>


                <form id="form-Branch">
                    <div class="form-group">
                        <label style="color: black;font-weight: bold;"> Branch Name</label>
                        <div class="input-group">
                            <input type="text" maxlenght="50" class="form-control" id="add_Branchname" placeholder="Masukan Nama" name="add_Bodname" style="margin-bottom: 15px;">
                        </div>
                    </div>

                    <div class="form-group">
                        <label style="color: black;font-weight: bold;">Branch Address</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="add_Branchaddress" placeholder="Masukan alamat" name="username" style="margin-bottom: 15px;">
                        </div>
                    </div>   

                 

                </form>

            </div>
            <div class="modal-footer">

                <button id="addBranchbutton" form="form-daftar" type="button" class="btn btn-primary">Add</button>
            </div>
        </div>
    </div>
</div>

{{-- edit Data Branch --}}
<div class="modal" id="editBranch" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel" style="font-weight: bold;">Edit Branch</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                    <div id="allertBranchedit"></div>

                <form id="form-Bod">
                    <input type="hidden" class="form-control" id="edit_Brancharray" >

                    <div class="form-group">
                        <label style="color: black;font-weight: bold;"> Branch Name</label>
                        <div class="input-group">
                            <input type="text" maxlenght="50" class="form-control" style="margin-bottom: 15px;" id="edit_Branchname" placeholder="Masukan Nama" name="edit_Bodname">
                        </div>
                    </div>

                    <div class="form-group">
                        <label style="color: black;font-weight: bold;">Branch Address</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="edit_Branchaddress" placeholder="Masukan alamat" name="username" style="margin-bottom: 15px;">
                        </div>
                    </div>   

                </form>

            </div>
            <div class="modal-footer">

                <button id="editBranchbutton" form="form-daftar" type="button" class="btn btn-primary">Edit</button>
            </div>
        </div>
    </div>
</div>


<script> 
    var Branchstable = @JSON($Branchs);
    var remBranchstable = [];
</script>
<script src="{{ URL::asset('js/function/companybranch.js') }}"></script>



<div class="tab-pane fade" id="menu2" role="tabpanel" aria-labelledby="nav-contact-tab">

            <div style="padding: 0px 40px 10px 40px;">
                <div style="text-align: right;">
                    <button data-toggle="modal" data-target="#addDivision" class="btn btn-primary btn-round" >Add</button>
                        </div>
       <br>
    <table class="table border" cellspacing="0" id="Divisionstableid">
        <thead>
            <tr>
                <th style="width:5%">No.</th>
                <th style="width:80%">Division Name</th>
                
                <th colspan="2"style="width:15%">Action</th>
            </tr>
        </thead>
        <tbody>

        </tbody>
    </table>
    
</div>
</div>


{{-- Add Data Division --}}
<div class="modal" id="addDivision" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel" style="font-weight: bold;">Add Division</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                    <div id="allertDevisionadd"></div>


                <form id="form-Bod">
                    <div class="form-group">
                        <label style="color: black;font-weight: bold;"> Division Name</label>
                        <div class="input-group">

                            <input type="text" maxlenght="50" class="form-control" id="add_Divisionname" placeholder="Masukan Nama" name="add_Bodname" style="margin-bottom: 15px;">
                        </div>
                    </div>


                   
                </form>

            </div>
            <div class="modal-footer">

                <button id="addDivisionbutton" form="form-daftar" type="button" class="btn btn-primary">Add</button>
            </div>
        </div>
    </div>
</div>

{{-- edit Data Division --}}
<div class="modal" id="editDivision" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel" style="font-weight: bold;">Edit Division</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                    <div id="allertDevisionedit"></div>

                <form id="form-Bod">
                    <div class="form-group">
                        <input type="hidden" class="form-control" id="edit_Divisionarray" >
                        <label style="color: black;font-weight: bold;"> Division Name</label>
                        <div class="input-group">
                            <input type="text" maxlenght="50" class="form-control" id="edit_Divisionname" placeholder="Masukan Nama" name="edit_Bodname" style="margin-bottom: 15px;">
                        </div>
                    </div>


                   

                </form>

            </div>
            <div class="modal-footer">

                <button id="editDivisionbutton" form="form-daftar" type="button" class="btn btn-primary">Edit</button>
            </div>
        </div>
    </div>
</div>


<script> 
    var Divisionstable = @JSON($Divisions);
    var remDivisionstable = [];

</script>
<script src="{{ URL::asset('js/function/companydivision.js') }}"></script>



<div class="tab-pane fade" id="menu3" role="tabpanel" aria-labelledby="nav-profile-tab">

            <div style="padding: 0px 40px 10px 40px;">
                <div style="text-align: right;">
                   <button data-toggle="modal" data-target="#addPartner" class="btn btn-primary btn-round" >Add</button>
                        </div>
       <br>
    <table class="table border" cellspacing="0" id="Partnerstableid">
        <thead>
            <tr>
                <th style="width:5%">No.</th>
                <th style="width:80%">Partner Name</th>
                
                <th style="width:15%" colspan="2">Action</th>
            </tr>
        </thead>
        <tbody>
            {{-- dinamical table partner --}}
        </tbody>
    </table>
   
</div>
</div>


{{-- Add Data Partner --}}
<div class="modal" id="addPartner" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel" style="font-weight: bold;">Add Partner</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                    <div id="allertPartneradd"></div>

                <form id="form-Partner">
                    <div class="form-group">
                        <label style="color: black;font-weight: bold;"> Partner Name</label>
                        <div class="input-group">

                            <input type="text" maxlenght="50" class="form-control" id="add_Partnername" placeholder="Masukan Nama" name="add_Partnername" style="margin-bottom: 15px;">
                        </div>
                    </div>



                </form>

            </div>
            <div class="modal-footer">

                <button id="addPartnerbutton" form="form-daftar" type="button" class="btn btn-primary">Add</button>
            </div>
        </div>
    </div>
</div>

{{-- edit Data Partner --}}
<div class="modal" id="editPartner" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel" style="font-weight: bold;">Edit Partner</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                    <div id="allertPartneredit"></div>

                <form id="form-Partner">
                    <div class="form-group">
                        <input type="hidden" class="form-control" id="edit_Partnerarray" >
                        <label style="color: black;font-weight: bold;"> Partner Name</label>
                        <div class="input-group">
                            <input type="text" maxlenght="50" class="form-control" id="edit_Partnername" placeholder="Masukan Nama" name="edit_Partnername" style="margin-bottom: 15px;">
                        </div>
                    </div>


                    

                </form>

            </div>
            <div class="modal-footer">

                <button id="editPartnerbutton" form="form-daftar" type="button" class="btn btn-primary">Edit</button>
            </div>
        </div>
    </div>
</div>


<script> 
    var Partnerstable = @JSON($Partners);
    var remPartnerstable = [];
</script>
<script src="{{ URL::asset('js/function/companypartner.js') }}"></script>



<div class="tab-pane fade" id="menu4" role="tabpanel" aria-labelledby="nav-profile-tab">

            <div style="padding: 0px 40px 10px 40px;">
                <div style="text-align: right;">
                   <button data-toggle="modal" data-target="#addProduct" class="btn btn-primary btn-round" >Add</button>
                        </div>
       <br>
    <table class="table border" cellspacing="0" id="Productstableid">
        <thead>
            <tr>
                <th style="width:5%">No.</th>
                <th style="width:80%">Product Name</th>
               
                <th style="width:15%" colspan="2">Action</th>
            </tr>
        </thead>
        <tbody>
            {{-- dinamical product --}}
        </tbody>
    </table>
   
</div>
</div>

{{-- Add Data Product --}}
<div class="modal" id="addProduct" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel" style="font-weight: bold;">Add Product</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="modal-body">
            <div id="allertProductadd"></div>


      <form id="form-Product">
        <div class="form-group">
            <label  style="color: black;font-weight: bold;"> Sigma Product</label>
            <div class="input-group">

              <div class="select"  style="width:470px;">
                <select id="add_sigmaproduct" style="border:solid 1px lightgrey;border-radius: 3px;">
                  {{-- dinamic select --}}
              </select>
          </div>
      </div>
  </div>


 

</form>

</div>
<div class="modal-footer">

  <button id="addProductbutton" form="form-daftar" type="button" class="btn btn-primary">Add</button>
</div>
</div>
</div>
</div>

{{-- edit Data Product --}}
<div class="modal" id="editProduct" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
  <div class="modal-dialog" role="document">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel" style="font-weight: bold;">Edit Product</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <div class="modal-body">

                <div id="allertProductedit"></div>
              <form id="form-Product">
                  <div class="form-group">
                      <input type="hidden" class="form-control" id="edit_Productarray" >
                      <label  style="color: black;font-weight: bold;"> Sigma Product</label>
                      <div class="select"  style="width:470px;">
                        <select id="edit_sigmaproduct" style="border:solid 1px lightgrey;border-radius: 3px;">
                          {{-- dinamic select --}}
                      </select>
                  </div>
              </div>


             

          </form>

      </div>
      <div class="modal-footer">

          <button id="editProductbutton" form="form-daftar" type="button" class="btn btn-primary">Edit</button>
      </div>
  </div>
</div>
</div>


<script> 
  var Productstable = @JSON($Products);
  var remProductstable = [];
  var Sigmaproduct = @JSON($Sigmaproducts);   
</script>
<script src="{{ URL::asset('js/function/companyproduct.js') }}"></script>



<div class="tab-pane fade" id="menu5" role="tabpanel" aria-labelledby="nav-profile-tab">

            <div style="padding: 0px 40px 10px 40px;">
                <div style="text-align: right;">
                   <button data-toggle="modal" data-target="#addSocmed" class="btn btn-primary btn-round" >Add</button>
                        </div>
       <br>
    <table class="table border" cellspacing="0" id="Socmedstableid">
        <thead>
            <tr>
                <th style="width:5%;">No.</th>
                <th style="width:40%;">Socmed Type</th>
                <th style="width:40%;">Socmed Name</th>
               
                <th style="width:15%;" colspan="2">Action</th>
            </tr>
        </thead>
        <tbody>

        </tbody>
    </table>
  </div>
</div>

{{-- Add Data Socmed --}}
<div class="modal" id="addSocmed" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel" style="font-weight: bold;">Add Socmed</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                    <div id="allertSocmedadd"></div>

                <form id="form-Socmed">

                    <div class="form-group">
                        <label style="color: black;font-weight: bold;">Socmed</label>
                        <div class="input-group">

                            <div class="select"  style="width:470px;">
                                <select id="add_socmedtype" style="border:solid 1px lightgrey;border-radius: 3px;">
                                    {{-- dinamic select --}}
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label style="color: black;font-weight: bold;"> Socmed Name</label>
                        <div class="input-group">

                            <input type="text" maxlenght="50" class="form-control" id="add_Socmedname" placeholder="Masukan Nama" name="add_Socmedname" style="margin-bottom: 15px;">
                        </div>
                    </div>

                    

                </form>

            </div>
            <div class="modal-footer">

                <button id="addSocmedbutton" form="form-daftar" type="button" class="btn btn-primary">Add</button>
            </div>
        </div>
    </div>
</div>

{{-- edit Data Socmed --}}
<div class="modal" id="editSocmed" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel" style="font-weight: bold;">Edit Socmed</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                    <div id="allertSocmededit"></div>

                <form id="form-Socmed">

                    <div class="form-group">
                        <label style="color: black;font-weight: bold;">Socmed</label>
                        <div class="input-group">

                            <div class="select" style="width:470px;">
                                <select id="edit_socmedtype" style="border:solid 1px lightgrey;border-radius: 3px;">
                                    {{-- dinamic select --}}
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <input type="hidden" class="form-control" id="edit_Socmedarray" >
                        <label style="color: black;font-weight: bold;"> Socmed Name</label>
                        <div class="input-group">
                            <input type="text" maxlenght="50" class="form-control" id="edit_Socmedname" placeholder="Masukan Nama" name="edit_Socmedname" style="margin-bottom: 15px;">
                        </div>
                    </div>

                    

                </form>

            </div>
            <div class="modal-footer">

                <button id="editSocmedbutton" form="form-daftar" type="button" class="btn btn-primary">Edit</button>
            </div>
        </div>
    </div>
</div>


<script> 
    var Socmedstable = @JSON($Socmeds);
    var remSocmedstable = [];
    var Socmedtype = @JSON($Socmedtypes);   
</script>
<script src="{{ URL::asset('js/function/companysocmed.js') }}"></script>



<div class="tab-pane fade" id="menu6" role="tabpanel" aria-labelledby="nav-profile-tab">

            <div style="padding: 0px 40px 10px 40px;">
                <div style="text-align: right;">
                   <button data-toggle="modal" data-target="#addSubsidiary" class="btn btn-primary btn-round" >Add</button>
                        </div>
       <br>
    <table class="table border" cellspacing="0" id="Subsidiarystableid">
        <thead>
            <tr>
                <th style="width:5%;">No.</th>
                <th style="width:80%;">Subsidiary Name</th>
               
                <th style="width:15%;" colspan="2">Action</th>
            </tr>
        </thead>
        <tbody>
         {{-- dinamical table subsidiary --}}
     </tbody>
 </table>
 </div>
</div>


{{-- Add Data Subsidiary --}}
<div class="modal" id="addSubsidiary" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel" style="font-weight: bold;">Add Subsidiary</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                    <div id="allertSubsidiaryadd"></div>

                <form id="form-Subsidiary">
                    <div class="form-group">
                        <label style="color: black;font-weight: bold;"> Subsidiary Name</label>
                        <div class="input-group">

                            <input type="text" maxlenght="50" class="form-control" id="add_Subsidiaryname" placeholder="Masukan Nama" name="add_Subsidiaryname" style="margin-bottom: 15px;">
                        </div>
                    </div>


                   
                </form>

            </div>
            <div class="modal-footer">

                <button id="addSubsidiarybutton" form="form-daftar" type="button" class="btn btn-primary">Add</button>
            </div>
        </div>
    </div>
</div>

{{-- edit Data Subsidiary --}}
<div class="modal" id="editSubsidiary" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel" style="font-weight: bold;">Edit Subsidiary</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                    <div id="allertSubsidiaryedit"></div>

                <form id="form-Subsidiary">
                    <div class="form-group">
                        <input type="hidden" class="form-control" id="edit_Subsidiaryarray" >
                        <label style="color: black;font-weight: bold;"> Subsidiary Name</label>
                        <div class="input-group">
                            <input type="text" maxlenght="50" class="form-control" id="edit_Subsidiaryname" placeholder="Masukan Nama" name="edit_Subsidiaryname" style="margin-bottom: 15px;">
                        </div>
                    </div>


                   

                </form>

            </div>
            <div class="modal-footer">

                <button id="editSubsidiarybutton" form="form-daftar" type="button" class="btn btn-primary">Edit</button>
            </div>
        </div>
    </div>
</div>


<script> 
    var Subsidiarystable = @JSON($Subsidiarys);
    var remSubsidiarystable = [];
    var position = @JSON($Positions);   
</script>
<script src="{{ URL::asset('js/function/companysubsidiary.js') }}"></script>



<div class="tab-pane fade" id="menu7" role="tabpanel" aria-labelledby="nav-profile-tab">

            <div style="padding: 0px 40px 10px 40px;">
                <div style="text-align: right;">
                    <button data-toggle="modal" data-target="#addHists" class="btn btn-primary btn-round" >Add</button>
                        </div>
       <br>
    <table class="table border" cellspacing="0" id="Histsstableid">
        <thead>
            <tr>
                <th style="width:5%;">No.</th>
                <th style="width:80%;">History Name</th>
                
                <th style="width:15%;" colspan="2">Action</th>
            </tr>
        </thead>
        <tbody>

        </tbody>
    </table>
  </div>
</div>


{{-- Add Data Hists --}}
<div class="modal" id="addHists" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel" style="font-weight: bold;">Add History</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="modal-body">
            <div id="allertHistsadd"></div>


      <form id="form-Hists">
        <div class="form-group">
          <label style="color: black;font-weight: bold;"> History Name</label>
          <div class="input-group">

            <input type="text" maxlenght="50" class="form-control" id="add_Histsname" placeholder="Masukan Nama" name="add_Histsname" style="margin-bottom: 15px;">
        </div>
    </div>



</form>

</div>
<div class="modal-footer">

  <button id="addHistsbutton" form="form-daftar" type="button" class="btn btn-primary">Add</button>
</div>
</div>
</div>
</div>



{{-- edit Data Hists --}}
<div class="modal" id="editHists" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
  <div class="modal-dialog" role="document">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel" style="font-weight: bold;">Edit History</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <div class="modal-body">
                <div id="allertHistsedit"></div>

              <form id="form-Hists">
                  <div class="form-group">
                      <input type="hidden" class="form-control" id="edit_Histsarray" >
                      <label style="color: black;font-weight: bold;"> History Name</label>
                      <div class="input-group">
                          <input type="text" maxlenght="50" class="form-control" id="edit_Histsname" placeholder="Masukan Nama" name="edit_Histsname" style="margin-bottom: 15px;">
                      </div>
                  </div>


               

              </form>
              
          </div>
          <div class="modal-footer">

              <button id="editHistsbutton" form="form-daftar" type="button" class="btn btn-primary">Edit</button>
          </div>
      </div>
  </div>
</div>


<script> 
  var Histsstable = @JSON($Hists);
  var remHistsstable = [];
  var position = @JSON($Positions);   
</script>
<script src="{{ URL::asset('js/function/histam.js') }}"></script>


{{-- competitor --}}

<div class="tab-pane fade" id="menu8" role="tabpanel" aria-labelledby="nav-profile-tab">

    <div style="padding: 0px 40px 10px 40px;">
        <div style="text-align: right;">
            <button data-toggle="modal" data-target="#addCompetitors" class="btn btn-primary btn-round" >Add</button>
                </div>
<br>
<table class="table border" cellspacing="0" id="Competitorsstableid">
<thead>
    <tr>
        <th style="width:5%;">No.</th>
        <th style="width:80%;">Competitor Name</th>
        
        <th style="width:15%;" colspan="2">Action</th>
    </tr>
</thead>
<tbody>

</tbody>
</table>
</div>
</div>


{{-- Add Data Competitors --}}
<div class="modal" id="addCompetitors" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
  <h5 class="modal-title" id="exampleModalLabel" style="font-weight: bold;">Add Competitor</h5>
  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">
    <div id="allertCompetitorsadd"></div>


<form id="form-Competitors">
<div class="form-group">
  <label style="color: black;font-weight: bold;"> Competitor Name</label>
  <div class="input-group">

    <input type="text" maxlenght="50" class="form-control" id="add_Competitorsname" placeholder="Masukan Nama" name="add_Competitorsname" style="margin-bottom: 15px;">
</div>
</div>



</form>

</div>
<div class="modal-footer">

<button id="addCompetitorsbutton" form="form-daftar" type="button" class="btn btn-primary">Add</button>
</div>
</div>
</div>
</div>



{{-- edit Data Competitors --}}
<div class="modal" id="editCompetitors" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
<div class="modal-dialog" role="document">
<div class="modal-content">
  <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel" style="font-weight: bold;">Edit Competitor</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
      </button>
  </div>
  <div class="modal-body">
        <div id="allertCompetitorsedit"></div>

      <form id="form-Competitors">
          <div class="form-group">
              <input type="hidden" class="form-control" id="edit_Competitorsarray" >
              <label style="color: black;font-weight: bold;"> Competitor Name</label>
              <div class="input-group">
                  <input type="text" maxlenght="50" class="form-control" id="edit_Competitorsname" placeholder="Masukan Nama" name="edit_Competitorsname" style="margin-bottom: 15px;">
              </div>
          </div>


       

      </form>
      
  </div>
  <div class="modal-footer">

      <button id="editCompetitorsbutton" form="form-daftar" type="button" class="btn btn-primary">Edit</button>
  </div>
</div>
</div>
</div>


<script> 
var Competitorsstable = @JSON($Competitors);
var remCompetitorsstable = [];
var position = @JSON($Positions);   
</script>
<script src="{{ URL::asset('js/function/companycompetitor.js') }}"></script>



</div>              
</div>
</div>
<div class="bar-3" style="padding: 0">
    <a href="{{ url('/partner') }}"><button class="btn btn-danger btn-round">Cancel</button></a>
    <button onclick="SubmitAll()" data-toggle="modal" data-target="#succesafterclick" class="btn btn-info btn-round">Save</button>
</div>
</div>

{{-- Success after poping up --}}
<div class="modal" id="succesafterclick" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
        <div class="modal-dialog" role="document">
                <div class="modal-content">
                        
                        <div class="modal-body">
                           
                            <div class="thank-you-pop">
                                <img src="http://goactionstations.co.uk/wp-content/uploads/2017/03/Green-Round-Tick.png" alt="">
                                <h1>Success!</h1>
                                <p>Data Hasbeen Update!</p>
                                {{-- <h3 class="cupon-pop">Your Id: <span>12345</span></h3> --}}
                                
                             </div>
                             
                        </div>
                        
                    </div>
        </div>
</div>


<script>

    function SubmitAll() {  

        let inputannya = [ 'id', 'company_doe', 'id_businesstype', 'number_of_employee', 'company_phone', 'company_website', 'asset_value', 'company_annual_income', 'company_email', 'product_sold_permonth', 'company_revenue', 'company_competitor', 'id_segment', 'company_history', 'company_num_customer', 'company_culture', 'company_workinghours', 'company_budget_permonth', 'company_product_needs', 'company_last_am', 'is_active']

        var data = {}


        for (let i = 0; i < inputannya.length; i++) {
            var halo = document.getElementById("inputan_"+inputannya[i])
            if ( halo !== 'undefined' && halo !== null) {
                data[inputannya[i]] = halo.value;
            }

        }


        data.Bodstable = Bodstable
        data.remBodstable = remBodstable
        data.Branchstable = Branchstable
        data.remBranchstable = remBranchstable
        data.Divisionstable = Divisionstable
        data.remDivisionstable = remDivisionstable
        data.Partnerstable = Partnerstable
        data.remPartnerstable = remPartnerstable
        data.Productstable = Productstable
        data.remProductstable = remProductstable
        data.Socmedstable = Socmedstable
        data.remSocmedstable = remSocmedstable
        data.Subsidiarystable = Subsidiarystable
        data.remSubsidiarystable = remSubsidiarystable
        data.Histsstable = Histsstable
        data.remHistsstable = remHistsstable     
        data.Competitorsstable = Competitorsstable
        data.remCompetitorsstable = remCompetitorsstable   

        $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });

      $.ajax({
            type: 'POST',
            url: '{{ url('/partner/update') }}',
            data: data,
            beforeSend: function() {
          //  $('#succesafterclick').show();             
        },

            success: function(resp) {
           
              console.log(resp);
              window.location = '{{ url('/partner') }}'

          }
      })

    }

</script>



<script>
    var segment = @JSON($Segments); 
    var businesstype = @JSON($Businesstypes);
    var autoselected = @JSON($Detail);

    $('<option value="" selected disabled hidden>Select Segment types</option>').appendTo('#inputan_id_segment');

    segment.forEach(data => {
        //console.log(data);
        $('<option value="'+data.id_segment+'">'+data.segment_industry+'</option>').appendTo('#inputan_id_segment');
    });

    $('<option value="" selected disabled hidden> Select Business Types </option>').appendTo('#inputan_id_businesstype');

    businesstype.forEach(data => {
        //console.log(data);
        $('<option value="'+data.id_businesstype+'">'+data.businesstype+'</option>').appendTo('#inputan_id_businesstype');
    });

    //  auto select when data is added
    $("#inputan_id_businesstype").val(autoselected["id_businesstype"]);
    $("#inputan_id_segment").val(autoselected["id_segment"]);
    console.log(autoselected);


</script>


<script>
  function isNumber(evt) {
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
      return false;
  }
  return true;
}
</script>

{{-- number formating --}}
<script src="https://cdn.rawgit.com/igorescobar/jQuery-Mask-Plugin/1ef022ab/dist/jquery.mask.min.js"></script>
<script>
$(document).ready(function(){
// Format mata uang.
$( '.numbering' ).mask('0.000.000.000', {reverse: true});
})

let rupiah = document.getElementById("inputan_company_annual_income");
//rupiah.value = formatRupiah(this.value, "Rp. ");

rupiah.addEventListener("keyup", function(e) {
  // tambahkan 'Rp.' pada saat form di ketik
  // gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
  rupiah.value = formatRupiah(this.value, "Rp. ");
});

let rupiah1 = document.getElementById("inputan_company_revenue");
rupiah1.addEventListener("keyup", function(e) {
  // tambahkan 'Rp.' pada saat form di ketik
  // gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
  rupiah1.value = formatRupiah(this.value, "Rp. ");
});


let rupiah2 = document.getElementById("inputan_company_budget_permonth");
rupiah2.addEventListener("keyup", function(e) {
  // tambahkan 'Rp.' pada saat form di ketik
  // gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
  rupiah2.value = formatRupiah(this.value, "Rp. ");
});

let rupiah3 = document.getElementById("inputan_asset_value");
rupiah3.addEventListener("keyup", function(e) {
  // tambahkan 'Rp.' pada saat form di ketik
  // gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
  rupiah3.value = formatRupiah(this.value, "Rp. ");
});



/* Fungsi formatRupiah */
function formatRupiah(angka, prefix) {
  var number_string = angka.replace(/[^,\d]/g, "").toString(),
    split = number_string.split(","),
    sisa = split[0].length % 3,
    rupiah = split[0].substr(0, sisa),
    ribuan = split[0].substr(sisa).match(/\d{3}/gi);

  // tambahkan titik jika yang di input sudah menjadi angka ribuan
  if (ribuan) {
    separator = sisa ? "." : "";
    rupiah += separator + ribuan.join(".");
  }

  rupiah = split[1] != undefined ? rupiah + "," + split[1] : rupiah;
  return prefix == undefined ? rupiah : rupiah ? "Rp. " + rupiah : "";
}

</script>
    

@stop



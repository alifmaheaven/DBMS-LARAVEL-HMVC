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
        <b><a style="color:white;" href="{{ url('/partner') }}">Customer List</a> > Detail Customer</b>
    </div>

    <div class="sectionku">
         <div class="button group">
    <a href="{{ url('partner/download/partner/'.$Detail->id) }}">  <button class="btn btn-round btn-sm" style="background-color: #006400; float: right;text-align: center;margin-right: 30px;margin-bottom: 10px;margin-top: 20px;"><i id="eye" class="fas fa-download"></i>&nbsp; Excel</button></a>
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
                            <div id="inputan_id_businesstype"></div>
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
                            <div id="inputan_id_segment"></div>
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
              

                <div class="tab-content" id="nav-tabContent">
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
                                         {{-- <button style="text-align: right;" data-toggle="modal" data-target="#addBod" class="btn btn-primary btn-round" >Add</button> --}}
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
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                  {{-- dinamical table --}}                                        
                              </tbody>
                          </table>
                      </div>
                    
                          
                      </div>
                    
                      
                    
                    
                    <script> 
                        var Bodstable = @JSON($Bods);
                        var remBodstable = [];
                        var position = @JSON($Positions);   
                        let htmlbods = '';
                        let nomorbods = 0;
                        Bodstable.forEach(data => {
                                //console.log(data);
                                for (let i = 0; i < position.length; i++) {
                                    if (position[i].id_position == data.id_position) {
                                        var companybodpositionname = position[i].position_name
                                    }
                                }
                            
                                var arrayBods = nomorbods
                                nomorbods += 1
                                htmlbods += '<tr><td style="text-align:center;">'+nomorbods+'</td><td style="text-align:center;">'+data.companybod_name+'</td><td style="text-align:center;">'+companybodpositionname+'</td><td style="text-align:center;">'+data.companybod_birthday+'</td><td style="text-align:center;">'+data.companybod_phone+'</td><td style="text-align:center;">'+data.companybod_email+'</td></tr>'
                                $("#Bodstableid").find('tbody').html(htmlbods).show();

                            
                            });
                    </script>
                    
                    
                    
                    
                    
                    <div class="tab-pane fade" id="menu1"role="tabpanel" aria-labelledby="nav-contact-tab">
                    
                                <div style="padding: 0px 40px 10px 40px;">
                                    <div style="text-align: right;">
                                        {{-- <button data-toggle="modal" data-target="#addBranch" class="btn btn-primary btn-round" >Add</button> --}}
                                            </div>
                           <br>
                        <table class="table border" id="Branchstableid" >
                            <thead>
                                <tr>
                                    <th style="width: 5%;">No.</th>
                                    <th style="width: 20%;">Company Branch</th>
                                    <th style="width: 60%;">Address</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                    
                            </tbody>
                        </table>
                    </div>
                        
                    </div>
                    
                    
                   
                    
                    
                    <script> 
                        var Branchstable = @JSON($Branchs);
                        var remBranchstable = [];
                        Branchstable.forEach(data => {
                        //console.log(data);
                        let htmlBranchs = ''
                        let nomorBranchs = 0

                        if (data.is_active == 1) {
                            var companyBranchisactive = "aktif"
                        } else{
                            var companyBranchisactive = "non aktif"
                        }
                        var arrayBranchs = nomorBranchs
                        nomorBranchs += 1
                        htmlBranchs += '<tr><td style="text-align:center;">'+nomorBranchs+'</td><td  style="text-align:center;">'+data.companybranch+'</td><td  style="text-align:center;">'+data.companybranch_addr+'</td></tr>'
                        $("#Branchstableid").find('tbody').html(htmlBranchs).show();

                        
                        });
                    </script>
                    
                    
                    
                    
                    <div class="tab-pane fade" id="menu2" role="tabpanel" aria-labelledby="nav-contact-tab">
                    
                                <div style="padding: 0px 40px 10px 40px;">
                                    <div style="text-align: right;">
                                         {{-- <button data-toggle="modal" data-target="#addDivision" class="btn btn-primary btn-round" >Add</button> --}}
                                            </div>
                           <br>
                        <table class="table border" cellspacing="0" id="Divisionstableid">
                            <thead>
                                <tr>
                                    <th style="width:5%">No.</th>
                                    <th style="width:80%">Division Name</th>
                                    
                                    
                                </tr>
                            </thead>
                            <tbody>
                    
                            </tbody>
                        </table>
                        
                    </div>
                    </div>
                    
                    
                  
                    
                    
                    <script> 
                        var Divisionstable = @JSON($Divisions);
                        var remDivisionstable = [];
                        let htmlDivisions = ''
                        let nomorDivisions = 0

                        Divisionstable.forEach(data => {
                        //console.log(data);
                    
                        if (data.is_active == 1) {
                            var companyDivisionisactive = "aktif"
                        } else{
                            var companyDivisionisactive = "non aktif"
                        }
                        var arrayDivisions = nomorDivisions
                        nomorDivisions += 1
                        htmlDivisions += '<tr><td style="text-align:center;">'+nomorDivisions+'</td><td style="text-align:center;">'+data.companydivision_name +'</td></tr>'
                        $("#Divisionstableid").find('tbody').html(htmlDivisions).show();

                    
                    });
                    </script>
                   
                    
                    
                    
                    <div class="tab-pane fade" id="menu3" role="tabpanel" aria-labelledby="nav-profile-tab">
                    
                                <div style="padding: 0px 40px 10px 40px;">
                                    <div style="text-align: right;">
                                        {{-- <button data-toggle="modal" data-target="#addPartner" class="btn btn-primary btn-round" >Add</button> --}}
                                            </div>
                           <br>
                        <table class="table border" cellspacing="0" id="Partnerstableid">
                            <thead>
                                <tr>
                                    <th style="width:5%">No.</th>
                                    <th style="width:80%">Partner Name</th>
                                    
                                    
                                </tr>
                            </thead>
                            <tbody>
                                {{-- dinamical table partner --}}
                            </tbody>
                        </table>
                       
                    </div>
                    </div>
                    
                    
                   
                    
                    
                    <script> 
                        var Partnerstable = @JSON($Partners);
                        var remPartnerstable = [];

                        let htmlPartners = ''
                        let nomorPartners = 0

                        Partnerstable.forEach(data => {
                        //console.log(data);

                        if (data.is_active == 1) {
                            var companyPartnerisactive = "aktif"
                        } else{
                            var companyPartnerisactive = "non aktif"
                        }
                        var arrayPartners = nomorPartners
                        nomorPartners += 1
                        htmlPartners += '<tr><td style="text-align:center;">'+nomorPartners+'</td><td style="text-align:center;">'+data.companypartner_name+'</td></tr>'
                        $("#Partnerstableid").find('tbody').html(htmlPartners).show();


                        });
                    </script>
                   
                    
                    
                    
                    <div class="tab-pane fade" id="menu4" role="tabpanel" aria-labelledby="nav-profile-tab">
                    
                                <div style="padding: 0px 40px 10px 40px;">
                                    <div style="text-align: right;">
                                        {{-- <button data-toggle="modal" data-target="#addProduct" class="btn btn-primary btn-round" >Add</button> --}}
                                            </div>
                           <br>
                        <table class="table border" cellspacing="0" id="Productstableid">
                            <thead>
                                <tr>
                                    <th style="width:5%">No.</th>
                                    <th style="width:80%">Product Name</th>
                                   
                                   
                                </tr>
                            </thead>
                            <tbody>
                                {{-- dinamical product --}}
                            </tbody>
                        </table>
                       
                    </div>
                    </div>
                    
                  
                    
                    
                    <script> 
                      var Productstable = @JSON($Products);
                      var remProductstable = [];
                      var Sigmaproduct = @JSON($Sigmaproducts);   
                      let htmlProducts = ''
                        let nomorProducts = 0

                        Productstable.forEach(data => {
                        //console.log(data);
                        for (let i = 0; i < Sigmaproduct.length; i++) {
                            if (Sigmaproduct[i].id_sigmaproduct == data.id_sigmaproduct) {
                                var companyProductSigmaproductname = Sigmaproduct[i].sigmaproduct_name
                            }
                        }
                        if (data.is_active == 1) {
                            var companyProductisactive = "aktif"
                        } else{
                            var companyProductisactive = "non aktif"
                        }
                        var arrayProducts = nomorProducts
                        nomorProducts += 1
                        htmlProducts += '<tr><td style="text-align:center;">'+nomorProducts+'</td><td style="text-align:center;">'+companyProductSigmaproductname+'</td></tr>'
                        $("#Productstableid").find('tbody').html(htmlProducts).show();

                    
                    });
                    </script>
                   
                    
                    
                    
                    <div class="tab-pane fade" id="menu5" role="tabpanel" aria-labelledby="nav-profile-tab">
                    
                                <div style="padding: 0px 40px 10px 40px;">
                                    <div style="text-align: right;">
                                        {{-- <button data-toggle="modal" data-target="#addSocmed" class="btn btn-primary btn-round" >Add</button> --}}
                                            </div>
                           <br>
                        <table class="table border" cellspacing="0" id="Socmedstableid">
                            <thead>
                                <tr>
                                    <th style="width:5%;">No.</th>
                                    <th style="width:40%;">Socmed Type</th>
                                    <th style="width:40%;">Socmed Name</th>
                                   
                                   
                                </tr>
                            </thead>
                            <tbody>
                    
                            </tbody>
                        </table>
                      </div>
                    </div>
                    
                 
                    
                    <script> 
                        var Socmedstable = @JSON($Socmeds);
                        var remSocmedstable = [];
                        var Socmedtype = @JSON($Socmedtypes); 
                        let htmlSocmeds = ''
                        let nomorSocmeds = 0

                        Socmedstable.forEach(data => {
                        //console.log(data);
                        for (let i = 0; i < Socmedtype.length; i++) {
                            if (Socmedtype[i].id_socmedtype == data.id_socmedtype) {
                                var companySocmedpositionname = Socmedtype[i].socmedtype_name
                            }
                        }
                        if (data.is_active == 1) {
                            var companySocmedisactive = "aktif"
                        } else{
                            var companySocmedisactive = "non aktif"
                        }
                        var arraySocmeds = nomorSocmeds
                        nomorSocmeds += 1
                        htmlSocmeds += '<tr><td style="text-align:center;">'+nomorSocmeds+'</td><td style="text-align:center;">'+companySocmedpositionname+'</td><td style="text-align:center;">'+data.socmed_name+'</td></tr>'
                        $("#Socmedstableid").find('tbody').html(htmlSocmeds).show();

                    
                    });  
                    </script>
                   
                    
                    
                    
                    <div class="tab-pane fade" id="menu6" role="tabpanel" aria-labelledby="nav-profile-tab">
                    
                                <div style="padding: 0px 40px 10px 40px;">
                                    <div style="text-align: right;">
                                        {{-- <button data-toggle="modal" data-target="#addSubsidiary" class="btn btn-primary btn-round" >Add</button> --}}
                                            </div>
                           <br>
                        <table class="table border" cellspacing="0" id="Subsidiarystableid">
                            <thead>
                                <tr>
                                    <th style="width:5%;">No.</th>
                                    <th style="width:80%;">Subsidiary Name</th>
                                   
                                    
                                </tr>
                            </thead>
                            <tbody>
                             {{-- dinamical table subsidiary --}}
                         </tbody>
                     </table>
                     </div>
                    </div>
                    
                    
                   
                    
                    
                    <script> 
                        var Subsidiarystable = @JSON($Subsidiarys);
                        var remSubsidiarystable = [];
                        
                        let htmlSubsidiarys = ''
                        let nomorSubsidiarys = 0
                        
                        Subsidiarystable.forEach(data => {
                        //console.log(data);
                        
                        if (data.is_active == 1) {
                            var companySubsidiaryisactive = "aktif"
                        } else{
                            var companySubsidiaryisactive = "non aktif"
                        }
                        var arraySubsidiarys = nomorSubsidiarys
                        nomorSubsidiarys += 1
                        htmlSubsidiarys += '<tr><td style="text-align:center;">'+nomorSubsidiarys+'</td><td style="text-align:center;">'+data.companysubsidiary_name+'</td></tr>'
                        $("#Subsidiarystableid").find('tbody').html(htmlSubsidiarys).show();
                        
                        
                        });
     
                    </script>
                    
                    
                    
                    
                    <div class="tab-pane fade" id="menu7" role="tabpanel" aria-labelledby="nav-profile-tab">
                    
                                <div style="padding: 0px 40px 10px 40px;">
                                   <div style="text-align: right;">
                                         {{-- <button data-toggle="modal" data-target="#addHists" class="btn btn-primary btn-round" >Add</button> --}}
                                            </div>
                           <br>
                        <table class="table border" cellspacing="0" id="Histsstableid">
                            <thead>
                                <tr>
                                    <th style="width:5%;">No.</th>
                                    <th style="width:80%;">History Name</th>
                                    
                                   
                                </tr>
                            </thead>
                            <tbody>
                    
                            </tbody>
                        </table>
                      </div>
                    </div>
                    
                    
                 
                    
                    <script> 
                      var Histsstable = @JSON($Hists);
                      var remHistsstable = [];
                     
                       
                        let htmlHistss = ''
                        let nomorHistss = 0

                        Histsstable.forEach(data => {
                        //console.log(data);

                        if (data.is_active == 1) {
                            var companyHistsisactive = "aktif"
                        } else{
                            var companyHistsisactive = "non aktif"
                        }
                        var arrayHistss = nomorHistss
                        nomorHistss += 1
                        htmlHistss += '<tr><td style="text-align:center;">'+nomorHistss+'</td><td style="text-align:center;">'+data.hist_am_name+'</td></tr>'
                        $("#Histsstableid").find('tbody').html(htmlHistss).show();


                        });
                    </script>
                   
                    
                    
                    {{-- competitor --}}
                    
                    <div class="tab-pane fade" id="menu8" role="tabpanel" aria-labelledby="nav-profile-tab">
                    
                        <div style="padding: 0px 40px 10px 40px;">
                            <div style="text-align: right;">
                                 {{-- <button data-toggle="modal" data-target="#addCompetitors" class="btn btn-primary btn-round" >Add</button> --}}
                                    </div>
                    <br>
                    <table class="table border" cellspacing="0" id="Competitorsstableid">
                    <thead>
                        <tr>
                            <th style="width:5%;">No.</th>
                            <th style="width:80%;">Competitor Name</th>
                            
                            
                        </tr>
                    </thead>
                    <tbody>
                    
                    </tbody>
                    </table>
                    </div>
                    </div>
                    
                    
                  
                    
                    
                    <script> 
                    var Competitorsstable = @JSON($Competitors);
                    var remCompetitorsstable = [];
                    let htmlCompetitorss = ''
                    let nomorCompetitorss = 0
                    
                    Competitorsstable.forEach(data => {
                    //console.log(data);
                    
                    if (data.is_active == 1) {
                        var companyCompetitorsisactive = "aktif"
                    } else{
                        var companyCompetitorsisactive = "non aktif"
                    }
                    var arrayCompetitorss = nomorCompetitorss
                    nomorCompetitorss += 1
                    htmlCompetitorss += '<tr><td style="text-align:center;">'+nomorCompetitorss+'</td><td style="text-align:center;">'+data.competitor_name +'</td></tr>'
                    $("#Competitorsstableid").find('tbody').html(htmlCompetitorss).show();
                    
                    
                    });
                    </script>

<script>
    var segment = @JSON($Segments); 
    var businesstype = @JSON($Businesstypes);
    var autoselected = @JSON($Detail);
    console.log(segment);
    console.log(businesstype);

    for (let i = 0; i < segment.length; i++) {
       if (segment[i].id_segment == autoselected['id_segment']) {
         $('<span class="item-span">: '+segment[i].segment_industry+'</span>').appendTo('#inputan_id_segment');
       }
    }
    for (let k = 0; k < businesstype.length; k++) {
        if (businesstype[k].id_businesstype == autoselected['id_businesstype']) {
            $('<span class="item-span">: '+businesstype[k].businesstype+'</span>').appendTo('#inputan_id_businesstype');
        }
       
        
    }
   
    
    </script>
    
                    
                    
                    

                  </div>

              </div>



          </div>
      
  



</div>



</div>
</div>
<div class="bar-3" style="padding: 0">
    <a href="{{ url('/partner') }}"> <button class="btn btn-danger btn-round">back</button></a>
    <form action="{{url('/partner/update')}}" method="get">          
        <input align="center" type="hidden" name="id_partner" value="{{$Detail->id}}">
        <button style="margin-right: 70px;" class="btn btn-primary btn-round" >Edit</button>
    </form>
</div>
</div>




@stop



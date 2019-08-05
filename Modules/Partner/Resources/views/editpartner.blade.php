@extends('partner::layouts.template')

@section('content')
<div class="containerku">
    <div class="bar-1">
        <img src="{{ URL::asset('img/dyah/ic-customer.png')}}"><span>Customer</span>
    </div>
    <div class="bar-2">
        <b>Customer List > Edit Customer</b>
    </div>

    <div class="sectionku" >
        <div class="container__customer__edit row">
            <div class="col-md-6">
                  <h4>General Information</h4>
                  <hr>
                    <div class="form__customer">
                        <table  width="100%;">
                            <tr>
                                <td width="15%">
                                    <div style="float: left;">
                                        <img src="{{ URL::asset('img/dyah/ic-id.png')}}"><span>Customer ID</span>
                                    </div>
                                </td>
                                <td width="40%">
                                    <input type="text" name="" disabled placeholder="" value="{{$Detail->id}}">
                                </td>
                            </tr>
                            <tr>
                                <td width="15%">
                                    <div style="float: left;">
                                        <img src="{{ URL::asset('img/dyah/ic-name.png')}}"><span>Customer Name</span>
                                    </div>
                                </td>
                                <td width="40%">
                                    <input type="text" name="" disabled placeholder="Dyah Group" value="{{$Detail->name}}">
                                </td>
                            </tr>
                            <tr>
                                <td width="15%">
                                    <div style="float: left;">
                                        <img src="{{ URL::asset('img/dyah/ic-email.png')}}"><span>Email</span>
                                    </div>
                                </td>
                                <td width="40%">
                                    <input type="text" name="">
                                </td>
                            </tr>
                            <tr>
                                <td width="15%">
                                    <div style="float: left;">
                                        <img src="{{ URL::asset('img/dyah/ic-phone.png')}}"><span>Mobile</span>
                                    </div>
                                </td>
                                <td width="40%">
                                    <input type="text" name="">
                                </td>
                            </tr>
                            <tr>
                                <td width="15%">
                                    <div style="float: left;">
                                        <img src="{{ URL::asset('img/dyah/ic-phone1.png')}}"><span>Phone</span>
                                    </div>
                                </td>
                                <td width="40%">
                                    <input type="text" name="">
                                </td>
                            </tr>
                            <tr>
                                <td width="15%">
                                    <div style="float: left;">
                                        <img src="{{ URL::asset('img/dyah/ic-location.png')}}"><span>Address</span>
                                    </div>
                                </td>
                                <td width="40%">
                                    <textarea rows="4" placeholder="lorem ipsum dolor sit amet dyah jalan danau towuti g5 a17 malang urea malang asd lorem ipsum dolor ist amet" disabled></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td width="15%">
                                    <div style="float: left;">
                                        <img src="{{ URL::asset('img/dyah/ic-web.png')}}"><span>Website</span>
                                    </div>
                                </td>
                                <td width="40%">
                                    <input type="text" name="">
                                </td>
                            </tr>
                        </table>
                    </div>
            </div>
            <div class="col-md-6">
                  <h4>PIC Information</h4>
                  <hr>
                       <div class="form__customer">
                        <table width="100%;">
                            <tr>
                                <td width="15%">
                                    <div style="float: left;">
                                        <img src="{{ URL::asset('img/dyah/ic-name.png')}}"><span>Name</span>
                                    </div>
                                </td>
                                <td width="40%">
                                    <input type="text" name="">
                                </td>
                            </tr>
                            <tr>
                                <td width="15%">
                                    <div style="float: left;">
                                        <img src="{{ URL::asset('img/dyah/ic-title.png')}}"><span>Title</span>
                                    </div>
                                </td>
                                <td width="40%">
                                    <input type="text" name="">
                                </td>
                            </tr>
                            <tr>
                                <td width="15%">
                                    <div style="float: left;">
                                        <img src="{{ URL::asset('img/dyah/ic-email.png')}}"><span>Email</span>
                                    </div>
                                </td>
                                <td width="40%">
                                    <input type="text" name="">
                                </td>
                            </tr>
                            <tr>
                                <td width="15%">
                                    <div style="float: left;">
                                        <img src="{{ URL::asset('img/dyah/ic-phone.png')}}"><span>Mobile</span>
                                    </div>
                                </td>
                                <td width="40%">
                                    <input type="text" name="">
                                </td>
                            </tr>
                            <tr>
                                <td width="15%">
                                    <div style="float: left;">
                                        <img src="{{ URL::asset('img/dyah/ic-phone1.png')}}"><span>Phone</span>
                                    </div>
                                </td>
                                <td width="40%">
                                    <input type="text" name="">
                                </td>
                            </tr>
                            <tr>
                                <td width="15%">
                                    <div style="float: left;">
                                        <img src="{{ URL::asset('img/dyah/ic-web.png')}}"><span>Comment</span>
                                    </div>
                                </td>
                                <td width="40%">
                                    <input type="text" name="">
                                </td>
                            </tr>
                        </table>
                    </div>
            </div>

        </div>
           
            <div class="container__customer__edit ">
                    <div class="col-md-6">
                    <h4>Additional Information</h4>
                    <hr>
                    <div class="form__customer">
                        <table width="100%;">
                        <tr>
                            <td width="15%">
                                <div style="float: left;">
                                    <img src="{{ URL::asset('img/dyah/ic-name.png')}}"><span>Name</span>
                                </div>
                            </td>
                            <td width="40%">
                                <input type="text" name="">
                            </td>
                        </tr>
                        <tr>
                            <td width="15%">
                                <div style="float: left;">
                                    <img src="{{ URL::asset('img/dyah/ic-title.png')}}"><span>Title</span>
                                </div>
                            </td>
                            <td width="40%">
                                <input type="text" name="">
                            </td>
                        </tr>
                        <tr>
                            <td width="15%">
                                <div style="float: left;">
                                    <img src="{{ URL::asset('img/dyah/ic-date.png')}}"><span>Date of Birth</span>
                                </div>
                            </td>
                            <td width="40%">
                                <input type="text" name="" style="width: 50%">
                                <input type="text" name="" style="width: 30%">
                            </td>
                        </tr>
                        <tr>
                            <td width="15%">
                                <div style="float: left;">
                                    <img src="{{ URL::asset('img/dyah/ic-email.png')}}"><span>Email</span>
                                </div>
                            </td>
                            <td width="40%">
                                <input type="text" name="">
                            </td>
                        </tr>
                        <tr>
                            <td width="15%">
                                <div style="float: left;">
                                    <img src="{{ URL::asset('img/dyah/ic-phone.png')}}"><span>Mobile</span>
                                </div>
                            </td>
                            <td width="40%">
                                <input type="text" name="">
                            </td>
                        </tr>
                        <tr>
                            <td width="15%">
                                <div style="float: left;">
                                    <img src="{{ URL::asset('img/dyah/ic-phone1.png')}}"><span>Phone</span>
                                </div>
                            </td>
                            <td width="40%">
                                <input type="text" name="">
                            </td>
                        </tr>
                        <tr>
                            <td width="15%">
                                <div style="float: left;">
                                    <img src="{{ URL::asset('img/dyah/ic-location.png')}}"><span>Address</span>
                                </div>
                            </td>
                            <td width="40%">
                                <textarea rows="4"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td width="15%">
                                <div style="float: left;">
                                    <img src="{{ URL::asset('img/dyah/ic-period.png')}}"><span>Period</span>
                                </div>
                            </td>
                            <td width="40%">
                                <input type="text" name="" style="width: 40%">
                                <input type="text" name="" style="width: 40%">
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            </div>
        
    
 <ul style="align-content: center; margin-left:20px; margin-top:20px;" class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
            <li><a class="active nav-item nav-link " data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Bod</a></li>
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
                                <table id="Bodstableid" class="table" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Detail</th>
                                            <th>Company Name</th>
                                            <th>Position</th>
                                            <th>Company Birthday</th>
                                            <th>Company Phone</th>
                                            <th>Company Email</th>
                                            <th>Active</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      {{-- dinamical table --}}                                        
                                    </tbody>
                                </table>
                                <button data-toggle="modal" data-target="#addBod" class="btn btn-success btn-round" >Add</button>
                            </div>

                                {{-- Add Data Bod --}}
                                <div class="modal" id="addBod" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
                                      <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Tambah Bod</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                            </button>
                                          </div>
                                          <div class="modal-body">


                                            <form id="form-Bod">
                                                  <div class="form-group">
                                                    <label> Bod Name</label>
                                                    <div class="input-group">
                                                    
                                                      <input type="text" class="form-control" id="add_Bodname" placeholder="Masukan Nama" name="add_Bodname">
                                                    </div>
                                                  </div>
                                                  <div class="form-group">
                                                    <label>Position</label>
                                                    <div class="input-group">
                                                     
                                                      <div class="select"  style="width:200px;">
                                                        <select id="add_Bodposition">
                                                          {{-- dinamic select --}}
                                                        </select>
                                                      </div>
                                                    </div>
                                                  </div>
                                                  
                                                  <div class="form-group">
                                                    <label>Birth Day</label>
                                                    <div class="input-group">
                                                      
                                                        <input type="date" id="add_Bodbirthday" name="bday">
                                                    </div>
                                                  </div>
                                              
                                                  <div class="form-group">
                                                    <label>Bod Phone</label>
                                                    <div class="input-group">
                                                      <input type="number" class="form-control" id="add_Bodphone" placeholder="Masukan nomor telpon" name="username">
                                                    </div>
                                                  </div>

                                                  <div class="form-group">
                                                    <label>Email</label>
                                                    <div class="input-group">
                                                      <input type="email" class="form-control" id="add_Bodemail" placeholder="Masukan Username" name="username">
                                                    </div>
                                                  </div>   
                                                                
                                                  <div class="form-group">
                                                    <label>Active</label>
                                                    <div class="input-group">
                                                        <div class="select" style="width:200px;">
                                                            <select id="add_Bodactif">
                                                              <option value="0">Non Actif</option>
                                                              <option value="1">Actif</option>
                                                            </select>
                                                          </div>
                                                    </div>
                                                  </div>   
                                              
                                            </form>
                                        
                                          </div>
                                          <div class="modal-footer">

                                            <button id="addBodbutton" form="form-daftar" type="button" class="btn btn-primary">Daftar</button>
                                          </div>
                                        </div>
                                      </div>
                                    </div>

                                    {{-- edit Data BOD --}}
                                    <div class="modal" id="editBod" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
                                            <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Tambah Bod</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                </div>
                                                <div class="modal-body">


                                                <form id="form-Bod">
                                                        <div class="form-group">
                                                        <input type="hidden" class="form-control" id="edit_Bodarray" >
                                                        <label> Bod Name</label>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" id="edit_Bodname" placeholder="Masukan Nama" name="edit_Bodname">
                                                        </div>
                                                        </div>
                                                        <div class="form-group">
                                                        <label>Position</label>
                                                        <div class="input-group">
                                                        
                                                            <div class="select"  style="width:200px;">
                                                            <select id="edit_Bodposition">
                                                                {{-- dinamic select --}}
                                                            </select>
                                                            </div>
                                                        </div>
                                                        </div>
                                                        
                                                        <div class="form-group">
                                                        <label>Birth Day</label>
                                                        <div class="input-group">
                                                            
                                                            <input type="date" id="edit_Bodbirthday" name="bday">
                                                        </div>
                                                        </div>
                                                    
                                                        <div class="form-group">
                                                        <label>Bod Phone</label>
                                                        <div class="input-group">
                                                            <input type="number" class="form-control" id="edit_Bodphone" placeholder="Masukan nomor telpon" name="username">
                                                        </div>
                                                        </div>

                                                        <div class="form-group">
                                                        <label>Email</label>
                                                        <div class="input-group">
                                                            <input type="email" class="form-control" id="edit_Bodemail" placeholder="Masukan Username" name="username">
                                                        </div>
                                                        </div>   
                                                                    
                                                        <div class="form-group">
                                                        <label>Active</label>
                                                        <div class="input-group">
                                                            <div class="select" style="width:200px;">
                                                                <select id="edit_Bodactif">
                                                                    <option value="0">Non Actif</option>
                                                                    <option value="1">Actif</option>
                                                                </select>
                                                                </div>
                                                        </div>
                                                        </div>   
                                                    
                                                </form>
                                            
                                                </div>
                                                <div class="modal-footer">

                                                <button id="editBodbutton" form="form-daftar" type="button" class="btn btn-primary">Daftar</button>
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
                                <table class="table" id="Branchstableid" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ID Branch</th>
                                            <th>Company Branch</th>
                                            <th>Address</th>
                                            <th>Active</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                    </tbody>
                                </table>
                                <button data-toggle="modal" data-target="#addBranch" class="btn btn-success btn-round" >Add</button>
                            </div>


                                {{-- Add Data Branch --}}
                                <div class="modal" id="addBranch" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
                                    <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Tambah Branch</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        </div>
                                        <div class="modal-body">


                                        <form id="form-Branch">
                                                <div class="form-group">
                                                <label> Branch Name</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" id="add_Branchname" placeholder="Masukan Nama" name="add_Bodname">
                                                </div>
                                                </div>
                                                
                                                <div class="form-group">
                                                <label>Branch Address</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" id="add_Branchaddress" placeholder="Masukan alamat" name="username">
                                                </div>
                                                </div>   
                                                            
                                                <div class="form-group">
                                                <label>Active</label>
                                                <div class="input-group">
                                                    <div class="select" style="width:200px;">
                                                        <select id="add_Branchactif">
                                                            <option value="0">Non Actif</option>
                                                            <option value="1">Actif</option>
                                                        </select>
                                                        </div>
                                                </div>
                                                </div>   
                                            
                                        </form>
                                    
                                        </div>
                                        <div class="modal-footer">

                                        <button id="addBranchbutton" form="form-daftar" type="button" class="btn btn-primary">Daftar</button>
                                        </div>
                                    </div>
                                    </div>
                                </div>

                                {{-- edit Data BOD --}}
                                <div class="modal" id="editBranch" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
                                        <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Tambah Bod</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                            </div>
                                            <div class="modal-body">


                                            <form id="form-Bod">
                                                    <input type="hidden" class="form-control" id="edit_Brancharray" >
                                                    
                                                    <div class="form-group">
                                                            <label> Branch Name</label>
                                                            <div class="input-group">
                                                                <input type="text" class="form-control" id="edit_Branchname" placeholder="Masukan Nama" name="edit_Bodname">
                                                            </div>
                                                            </div>
                                                            
                                                            <div class="form-group">
                                                            <label>Branch Address</label>
                                                            <div class="input-group">
                                                                <input type="text" class="form-control" id="edit_Branchaddress" placeholder="Masukan alamat" name="username">
                                                            </div>
                                                            </div>   
                                                                        
                                                            <div class="form-group">
                                                            <label>Active</label>
                                                            <div class="input-group">
                                                                <div class="select" style="width:200px;">
                                                                    <select id="edit_Branchactif">
                                                                        <option value="0">Non Actif</option>
                                                                        <option value="1">Actif</option>
                                                                    </select>
                                                                    </div>
                                                            </div>
                                                            </div>      
                                                
                                            </form>
                                        
                                            </div>
                                            <div class="modal-footer">

                                            <button id="editBranchbutton" form="form-daftar" type="button" class="btn btn-primary">Daftar</button>
                                            </div>
                                        </div>
                                        </div>
                                    </div>


                                    <script> 
                                    var Branchstable = @JSON($Bods);
                                    var remBranchstable = [];
                                    </script>
                                    <script src="{{ URL::asset('js/function/companybranch.js') }}"></script>
                                    


                            <div class="tab-pane fade" id="menu2" role="tabpanel" aria-labelledby="nav-contact-tab">
                                <table class="table" cellspacing="0" id="Divisionstableid">
                                    <thead>
                                        <tr>
                                            <th>ID Division</th>
                                            <th>Division Name</th>
                                            <th>Active</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       
                                    </tbody>
                                </table>
                                <button data-toggle="modal" data-target="#addDivision" class="btn btn-success btn-round" >Add</button>
                            </div>


                                {{-- Add Data Division --}}
                                <div class="modal" id="addDivision" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
                                        <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Tambah Bod</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                            </div>
                                            <div class="modal-body">


                                            <form id="form-Bod">
                                                    <div class="form-group">
                                                    <label> Bod Name</label>
                                                    <div class="input-group">
                                                    
                                                        <input type="text" class="form-control" id="add_Divisionname" placeholder="Masukan Nama" name="add_Bodname">
                                                    </div>
                                                    </div>
                                                    
                                                                
                                                    <div class="form-group">
                                                    <label>Active</label>
                                                    <div class="input-group">
                                                        <div class="select" style="width:200px;">
                                                            <select id="add_Divisionactif">
                                                                <option value="0">Non Actif</option>
                                                                <option value="1">Actif</option>
                                                            </select>
                                                            </div>
                                                    </div>
                                                    </div>   
                                                
                                            </form>
                                        
                                            </div>
                                            <div class="modal-footer">

                                            <button id="addDivisionbutton" form="form-daftar" type="button" class="btn btn-primary">Daftar</button>
                                            </div>
                                        </div>
                                        </div>
                                    </div>

                                    {{-- edit Data Division --}}
                                    <div class="modal" id="editDivision" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
                                            <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Tambah Bod</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                </div>
                                                <div class="modal-body">


                                                <form id="form-Bod">
                                                        <div class="form-group">
                                                        <input type="hidden" class="form-control" id="edit_Divisionarray" >
                                                        <label> Bod Name</label>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" id="edit_Divisionname" placeholder="Masukan Nama" name="edit_Bodname">
                                                        </div>
                                                        </div>
                                                        
                                                                    
                                                        <div class="form-group">
                                                        <label>Active</label>
                                                        <div class="input-group">
                                                            <div class="select" style="width:200px;">
                                                                <select id="edit_Divisionactif">
                                                                    <option value="0">Non Actif</option>
                                                                    <option value="1">Actif</option>
                                                                </select>
                                                                </div>
                                                        </div>
                                                        </div>   
                                                    
                                                </form>
                                            
                                                </div>
                                                <div class="modal-footer">

                                                <button id="editDivisionbutton" form="form-daftar" type="button" class="btn btn-primary">Daftar</button>
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
                                <table class="table" cellspacing="0" id="Partnerstableid">
                                    <thead>
                                        <tr>
                                            <th>ID Partner</th>
                                            <th>Partner Name</th>
                                            <th>Active</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {{-- dinamical table partner --}}
                                    </tbody>
                                </table>
                                <button data-toggle="modal" data-target="#addPartner" class="btn btn-success btn-round" >Add</button>
                            </div>


                            {{-- Add Data Partner --}}
                            <div class="modal" id="addPartner" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
                                    <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Tambah Partner</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        </div>
                                        <div class="modal-body">


                                        <form id="form-Partner">
                                                <div class="form-group">
                                                <label> Partner Name</label>
                                                <div class="input-group">
                                                
                                                    <input type="text" class="form-control" id="add_Partnername" placeholder="Masukan Nama" name="add_Partnername">
                                                </div>
                                                </div>
                                               
                                                            
                                                <div class="form-group">
                                                <label>Active</label>
                                                <div class="input-group">
                                                    <div class="select" style="width:200px;">
                                                        <select id="add_Partneractif">
                                                            <option value="0">Non Actif</option>
                                                            <option value="1">Actif</option>
                                                        </select>
                                                        </div>
                                                </div>
                                                </div>   
                                            
                                        </form>
                                    
                                        </div>
                                        <div class="modal-footer">

                                        <button id="addPartnerbutton" form="form-daftar" type="button" class="btn btn-primary">Daftar</button>
                                        </div>
                                    </div>
                                    </div>
                                </div>

                                {{-- edit Data Partner --}}
                                <div class="modal" id="editPartner" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
                                        <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Tambah Partner</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                            </div>
                                            <div class="modal-body">


                                            <form id="form-Partner">
                                                    <div class="form-group">
                                                    <input type="hidden" class="form-control" id="edit_Partnerarray" >
                                                    <label> Partner Name</label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" id="edit_Partnername" placeholder="Masukan Nama" name="edit_Partnername">
                                                    </div>
                                                    </div>
                                                    
                                                                
                                                    <div class="form-group">
                                                    <label>Active</label>
                                                    <div class="input-group">
                                                        <div class="select" style="width:200px;">
                                                            <select id="edit_Partneractif">
                                                                <option value="0">Non Actif</option>
                                                                <option value="1">Actif</option>
                                                            </select>
                                                            </div>
                                                    </div>
                                                    </div>   
                                                
                                            </form>
                                        
                                            </div>
                                            <div class="modal-footer">

                                            <button id="editPartnerbutton" form="form-daftar" type="button" class="btn btn-primary">Daftar</button>
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
                                <table class="table" cellspacing="0" id="Productstableid">
                                    <thead>
                                        <tr>
                                            <th>ID Product</th>
                                            <th>Product Name</th>
                                            <th>Active</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {{-- dinamical product --}}
                                    </tbody>
                                </table>
                                <button data-toggle="modal" data-target="#addProduct" class="btn btn-success btn-round" >Add</button>
                            </div>


                            {{-- Add Data Product --}}
                            <div class="modal" id="addProduct" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
                                    <div class="modal-dialog" role="document">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title" id="exampleModalLabel">Tambah Product</h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                          </button>
                                        </div>
                                        <div class="modal-body">


                                          <form id="form-Product">
                                                <div class="form-group">
                                                        <label>Sigma Product</label>
                                                        <div class="input-group">
                                                         
                                                          <div class="select"  style="width:200px;">
                                                            <select id="add_sigmaproduct">
                                                              {{-- dinamic select --}}
                                                            </select>
                                                          </div>
                                                        </div>
                                                      </div>
                                               
                                                              
                                                <div class="form-group">
                                                  <label>Active</label>
                                                  <div class="input-group">
                                                      <div class="select" style="width:200px;">
                                                          <select id="add_Productactif">
                                                            <option value="0">Non Actif</option>
                                                            <option value="1">Actif</option>
                                                          </select>
                                                        </div>
                                                  </div>
                                                </div>   
                                            
                                          </form>
                                      
                                        </div>
                                        <div class="modal-footer">

                                          <button id="addProductbutton" form="form-daftar" type="button" class="btn btn-primary">Daftar</button>
                                        </div>
                                      </div>
                                    </div>
                                  </div>

                                  {{-- edit Data Product --}}
                                  <div class="modal" id="editProduct" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
                                          <div class="modal-dialog" role="document">
                                          <div class="modal-content">
                                              <div class="modal-header">
                                              <h5 class="modal-title" id="exampleModalLabel">Tambah Product</h5>
                                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                  <span aria-hidden="true">&times;</span>
                                              </button>
                                              </div>
                                              <div class="modal-body">


                                              <form id="form-Product">
                                                      <div class="form-group">
                                                      <input type="hidden" class="form-control" id="edit_Productarray" >
                                                      <label> Sigma Product</label>
                                                      <div class="select"  style="width:200px;">
                                                            <select id="edit_sigmaproduct">
                                                              {{-- dinamic select --}}
                                                            </select>
                                                          </div>
                                                      </div>
                                                      
                                                                  
                                                      <div class="form-group">
                                                      <label>Active</label>
                                                      <div class="input-group">
                                                          <div class="select" style="width:200px;">
                                                              <select id="edit_Productactif">
                                                                  <option value="0">Non Actif</option>
                                                                  <option value="1">Actif</option>
                                                              </select>
                                                              </div>
                                                      </div>
                                                      </div>   
                                                  
                                              </form>
                                          
                                              </div>
                                              <div class="modal-footer">

                                              <button id="editProductbutton" form="form-daftar" type="button" class="btn btn-primary">Daftar</button>
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
                                <table class="table" cellspacing="0" id="Socmedstableid">
                                    <thead>
                                        <tr>
                                            <th>ID Socmed</th>
                                            <th>Socmed Type</th>
                                            <th>Socmed Name</th>
                                            <th>Active</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       
                                    </tbody>
                                </table>
                                <button data-toggle="modal" data-target="#addSocmed" class="btn btn-success btn-round" >Add</button>
                            </div>

                        {{-- Add Data Socmed --}}
                        <div class="modal" id="addSocmed" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
                                <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Tambah Socmed</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    </div>
                                    <div class="modal-body">


                                    <form id="form-Socmed">
                                           
                                            <div class="form-group">
                                            <label>Position</label>
                                            <div class="input-group">
                                            
                                                <div class="select"  style="width:200px;">
                                                <select id="add_socmedtype">
                                                    {{-- dinamic select --}}
                                                </select>
                                                </div>
                                            </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                    <label> Socmed Name</label>
                                                    <div class="input-group">
                                                    
                                                        <input type="text" class="form-control" id="add_Socmedname" placeholder="Masukan Nama" name="add_Socmedname">
                                                    </div>
                                                    </div>
                                                        
                                            <div class="form-group">
                                            <label>Active</label>
                                            <div class="input-group">
                                                <div class="select" style="width:200px;">
                                                    <select id="add_Socmedactif">
                                                        <option value="0">Non Actif</option>
                                                        <option value="1">Actif</option>
                                                    </select>
                                                    </div>
                                            </div>
                                            </div>   
                                        
                                    </form>
                                
                                    </div>
                                    <div class="modal-footer">

                                    <button id="addSocmedbutton" form="form-daftar" type="button" class="btn btn-primary">Daftar</button>
                                    </div>
                                </div>
                                </div>
                            </div>

                            {{-- edit Data Socmed --}}
                            <div class="modal" id="editSocmed" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
                                    <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Tambah Socmed</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        </div>
                                        <div class="modal-body">


                                        <form id="form-Socmed">
                                                
                                                <div class="form-group">
                                                <label>Position</label>
                                                <div class="input-group">
                                                
                                                    <div class="select"  style="width:200px;">
                                                    <select id="edit_socmedtype">
                                                        {{-- dinamic select --}}
                                                    </select>
                                                    </div>
                                                </div>
                                                </div>
                                                
                                                <div class="form-group">
                                                        <input type="hidden" class="form-control" id="edit_Socmedarray" >
                                                        <label> Socmed Name</label>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" id="edit_Socmedname" placeholder="Masukan Nama" name="edit_Socmedname">
                                                        </div>
                                                        </div>
                                                            
                                                <div class="form-group">
                                                <label>Active</label>
                                                <div class="input-group">
                                                    <div class="select" style="width:200px;">
                                                        <select id="edit_Socmedactif">
                                                            <option value="0">Non Actif</option>
                                                            <option value="1">Actif</option>
                                                        </select>
                                                        </div>
                                                </div>
                                                </div>   
                                            
                                        </form>
                                    
                                        </div>
                                        <div class="modal-footer">

                                        <button id="editSocmedbutton" form="form-daftar" type="button" class="btn btn-primary">Daftar</button>
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
                                <table class="table" cellspacing="0" id="Subsidiarystableid">
                                    <thead>
                                        <tr>
                                            <th>ID Subsidiary</th>
                                            <th>Subsidiary Name</th>
                                            <th>Active</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       {{-- dinamical table subsidiary --}}
                                    </tbody>
                                </table>
                                <button data-toggle="modal" data-target="#addSubsidiary" class="btn btn-success btn-round" >Add</button>
                            </div>


                        {{-- Add Data Subsidiary --}}
                        <div class="modal" id="addSubsidiary" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
                                <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Tambah Subsidiary</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    </div>
                                    <div class="modal-body">


                                    <form id="form-Subsidiary">
                                            <div class="form-group">
                                            <label> Subsidiary Name</label>
                                            <div class="input-group">
                                            
                                                <input type="text" class="form-control" id="add_Subsidiaryname" placeholder="Masukan Nama" name="add_Subsidiaryname">
                                            </div>
                                            </div>
                                           
                                                        
                                            <div class="form-group">
                                            <label>Active</label>
                                            <div class="input-group">
                                                <div class="select" style="width:200px;">
                                                    <select id="add_Subsidiaryactif">
                                                        <option value="0">Non Actif</option>
                                                        <option value="1">Actif</option>
                                                    </select>
                                                    </div>
                                            </div>
                                            </div>   
                                        
                                    </form>
                                
                                    </div>
                                    <div class="modal-footer">

                                    <button id="addSubsidiarybutton" form="form-daftar" type="button" class="btn btn-primary">Daftar</button>
                                    </div>
                                </div>
                                </div>
                            </div>

                            {{-- edit Data Subsidiary --}}
                            <div class="modal" id="editSubsidiary" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
                                    <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Tambah Subsidiary</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        </div>
                                        <div class="modal-body">


                                        <form id="form-Subsidiary">
                                                <div class="form-group">
                                                <input type="hidden" class="form-control" id="edit_Subsidiaryarray" >
                                                <label> Subsidiary Name</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" id="edit_Subsidiaryname" placeholder="Masukan Nama" name="edit_Subsidiaryname">
                                                </div>
                                                </div>
                                                 
                                                            
                                                <div class="form-group">
                                                <label>Active</label>
                                                <div class="input-group">
                                                    <div class="select" style="width:200px;">
                                                        <select id="edit_Subsidiaryactif">
                                                            <option value="0">Non Actif</option>
                                                            <option value="1">Actif</option>
                                                        </select>
                                                        </div>
                                                </div>
                                                </div>   
                                            
                                        </form>
                                    
                                        </div>
                                        <div class="modal-footer">

                                        <button id="editSubsidiarybutton" form="form-daftar" type="button" class="btn btn-primary">Daftar</button>
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
                                <table class="table" cellspacing="0" id="Histsstableid">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>History Name</th>
                                            <th>Active</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                    </tbody>
                                </table>
                                <button data-toggle="modal" data-target="#addHists" class="btn btn-success btn-round" >Add</button>
                            </div>


{{-- Add Data Hists --}}
<div class="modal" id="addHists" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Tambah Hists</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">


              <form id="form-Hists">
                    <div class="form-group">
                      <label> Hists Name</label>
                      <div class="input-group">
                      
                        <input type="text" class="form-control" id="add_Histsname" placeholder="Masukan Nama" name="add_Histsname">
                      </div>
                    </div>
                   
                                  
                    <div class="form-group">
                      <label>Active</label>
                      <div class="input-group">
                          <div class="select" style="width:200px;">
                              <select id="add_Histsactif">
                                <option value="0">Non Actif</option>
                                <option value="1">Actif</option>
                              </select>
                            </div>
                      </div>
                    </div>   
                
              </form>
          
            </div>
            <div class="modal-footer">

              <button id="addHistsbutton" form="form-daftar" type="button" class="btn btn-primary">Daftar</button>
            </div>
          </div>
        </div>
      </div>

      {{-- edit Data Hists --}}
      <div class="modal" id="editHists" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
              <div class="modal-dialog" role="document">
              <div class="modal-content">
                  <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Tambah Hists</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
                  </div>
                  <div class="modal-body">


                  <form id="form-Hists">
                          <div class="form-group">
                          <input type="hidden" class="form-control" id="edit_Histsarray" >
                          <label> Hists Name</label>
                          <div class="input-group">
                              <input type="text" class="form-control" id="edit_Histsname" placeholder="Masukan Nama" name="edit_Histsname">
                          </div>
                          </div>
                         
                                      
                          <div class="form-group">
                          <label>Active</label>
                          <div class="input-group">
                              <div class="select" style="width:200px;">
                                  <select id="edit_Histsactif">
                                      <option value="0">Non Actif</option>
                                      <option value="1">Actif</option>
                                  </select>
                                  </div>
                          </div>
                          </div>   
                      
                  </form>
              
                  </div>
                  <div class="modal-footer">

                  <button id="editHistsbutton" form="form-daftar" type="button" class="btn btn-primary">Daftar</button>
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
          



          </div>              
</div>
</div>
<div class="bar-3" style="padding: 0">
    <button class="btn btn-danger btn-round">Cancel</button>
    <button class="btn btn-info btn-round">Save</button>
</div>
</div>



@stop



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
                                    <input type="text" name="" disabled placeholder="" value="{{$getpartner->id}}">
                                </td>
                            </tr>
                            <tr>
                                <td width="15%">
                                    <div style="float: left;">
                                        <img src="{{ URL::asset('img/dyah/ic-name.png')}}"><span>Customer Name</span>
                                    </div>
                                </td>
                                <td width="40%">
                                    <input type="text" name="" disabled placeholder="Dyah Group" value="{{$getpartner->name}}">
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
                                <table class="table" cellspacing="0">
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
                                        <tr>
                                            <td>Work 1</td>
                                            <td>Doe</td>
                                            <td>john@example.com</td>
                                            <td>jgraeg</td>
                                            <td>jfbd</td>
                                            <td>joerg</td>
                                            <td>joegrg</td>
                                            <td><button class="btn btn-primary btn-round" >Delete</button><button class="btn btn-warning btn-round" >Edit</button></td>
                                        </tr>
                                        <tr>
                                            <td>Work 1</td>
                                            <td>Doe</td>
                                            <td>john@example.com</td>
                                            <td>jgraeg</td>
                                            <td>jfbd</td>
                                            <td>joerg</td>
                                            <td>joegrg</td>
                                            <td><button class="btn btn-primary btn-round" >Delete</button><button class="btn btn-warning btn-round" >Edit</button></td>
                                        </tr>
                                        <tr>
                                            <td>Work 1</td>
                                            <td>Doe</td>
                                            <td>john@example.com</td>
                                            <td>jgraeg</td>
                                            <td>jfbd</td>
                                            <td>joerg</td>
                                            <td>joegrg</td>
                                            <td><button class="btn btn-primary btn-round" >Delete</button><button class="btn btn-warning btn-round" >Edit</button></td>
                                        </tr>
                                        <tr>
                                            <td><button class="btn btn-success btn-round" >Add</button></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane fade" id="menu1"role="tabpanel" aria-labelledby="nav-contact-tab">
                                <table class="table" cellspacing="0">
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
                                        <tr>
                                            <td>Work 1</td>
                                            <td>Doe</td>
                                            <td>john@example.com</td>
                                            <td>jgraeg</td>
                                            <td><button class="btn btn-primary btn-round" >Delete</button><button class="btn btn-warning btn-round" >Edit</button></td>
                                        </tr>
                                        <tr>
                                            <td>Work 1</td>
                                            <td>Doe</td>
                                            <td>john@example.com</td>
                                            <td>jgraeg</td>
                                            <td><button class="btn btn-primary btn-round" >Delete</button><button class="btn btn-warning btn-round" >Edit</button></td>
                                        </tr>
                                        <tr>
                                            <td>Work 1</td>
                                            <td>Doe</td>
                                            <td>john@example.com</td>
                                            <td>jgraeg</td>
                                            <td><button class="btn btn-primary btn-round" >Delete</button><button class="btn btn-warning btn-round" >Edit</button></td>
                                        <tr>
                                            <td><button class="btn btn-success btn-round" >Add</button></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane fade" id="menu2" role="tabpanel" aria-labelledby="nav-contact-tab">
                                <table class="table" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ID Division</th>
                                            <th>Division Name</th>
                                            <th>Active</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Work 1</td>
                                            <td>Doe</td>
                                            <td>jgraeg</td>
                                            <td><button class="btn btn-primary btn-round" >Delete</button><button class="btn btn-warning btn-round" >Edit</button></td>
                                        </tr>
                                        <tr>
                                            <td>Work 1</td>
                                            <td>Doe</td>
                                            <td>jgraeg</td>
                                            <td><button class="btn btn-primary btn-round" >Delete</button><button class="btn btn-warning btn-round" >Edit</button></td>
                                        </tr>
                                        <tr>
                                            <td>Work 1</td>
                                            <td>Doe</td>
                                            <td>jgraeg</td>
                                            <td><button class="btn btn-primary btn-round" >Delete</button><button class="btn btn-warning btn-round" >Edit</button></td>
                                        </tr>
                                        <tr>
                                            <td><button class="btn btn-success btn-round" >Add</button></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane fade" id="menu3" role="tabpanel" aria-labelledby="nav-profile-tab">
                                <table class="table" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ID Partner</th>
                                            <th>Partner Name</th>
                                            <th>Active</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Work 1</td>
                                            <td>Doe</td>
                                            <td>jgraeg</td>
                                            <td><button class="btn btn-primary btn-round" >Delete</button><button class="btn btn-warning btn-round" >Edit</button></td>
                                        </tr>
                                        <tr>
                                            <td>Work 1</td>
                                            <td>Doe</td>
                                            <td>jgraeg</td>
                                            <td><button class="btn btn-primary btn-round" >Delete</button><button class="btn btn-warning btn-round" >Edit</button></td>
                                        </tr>
                                        <tr>
                                            <td>Work 1</td>
                                            <td>Doe</td>
                                            <td>jgraeg</td>
                                            <td><button class="btn btn-primary btn-round" >Delete</button><button class="btn btn-warning btn-round" >Edit</button></td>
                                        </tr>
                                        <tr>
                                            <td><button class="btn btn-success btn-round" >Add</button></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane fade" id="menu4" role="tabpanel" aria-labelledby="nav-profile-tab">
                                <table class="table" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ID Product</th>
                                            <th>Product Name</th>
                                            <th>Active</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Work 1</td>
                                            <td>Doe</td>
                                            <td>jgraeg</td>
                                            <td><button class="btn btn-primary btn-round" >Delete</button><button class="btn btn-warning btn-round" >Edit</button></td>
                                        </tr>
                                        <tr>
                                            <td>Work 1</td>
                                            <td>Doe</td>
                                            <td>jgraeg</td>
                                            <td><button class="btn btn-primary btn-round" >Delete</button><button class="btn btn-warning btn-round" >Edit</button></td>
                                        </tr>
                                        <tr>
                                            <td>Work 1</td>
                                            <td>Doe</td>
                                            <td>jgraeg</td>
                                            <td><button class="btn btn-primary btn-round" >Delete</button><button class="btn btn-warning btn-round" >Edit</button></td>
                                        </tr>
                                        <tr>
                                            <td><button class="btn btn-success btn-round" >Add</button></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane fade" id="menu5" role="tabpanel" aria-labelledby="nav-profile-tab">
                                <table class="table" cellspacing="0">
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
                                        <tr>
                                            <td>Work 1</td>
                                            <td>Doe</td>
                                            <td>john@example.com</td>
                                            <td>jgraeg</td>
                                            <td><button class="btn btn-primary btn-round" >Delete</button><button class="btn btn-warning btn-round" >Edit</button></td>
                                        </tr>
                                        <tr>
                                            <td>Work 1</td>
                                            <td>Doe</td>
                                            <td>john@example.com</td>
                                            <td>jgraeg</td>
                                            <td><button class="btn btn-primary btn-round" >Delete</button><button class="btn btn-warning btn-round" >Edit</button></td>
                                        </tr>
                                        <tr>
                                            <td>Work 1</td>
                                            <td>Doe</td>
                                            <td>john@example.com</td>
                                            <td>jgraeg</td>
                                            <td><button class="btn btn-primary btn-round" >Delete</button><button class="btn btn-warning btn-round" >Edit</button></td>
                                        <tr>
                                            <td><button class="btn btn-success btn-round" >Add</button></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane fade" id="menu6" role="tabpanel" aria-labelledby="nav-profile-tab">
                                <table class="table" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ID Subsidiary</th>
                                            <th>Subsidiary Name</th>
                                            <th>Active</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Work 1</td>
                                            <td>Doe</td>
                                            <td>jgraeg</td>
                                            <td><button class="btn btn-primary btn-round" >Delete</button><button class="btn btn-warning btn-round" >Edit</button></td>
                                        </tr>
                                        <tr>
                                            <td>Work 1</td>
                                            <td>Doe</td>
                                            <td>jgraeg</td>
                                            <td><button class="btn btn-primary btn-round" >Delete</button><button class="btn btn-warning btn-round" >Edit</button></td>
                                        </tr>
                                        <tr>
                                            <td>Work 1</td>
                                            <td>Doe</td>
                                            <td>jgraeg</td>
                                            <td><button class="btn btn-primary btn-round" >Delete</button><button class="btn btn-warning btn-round" >Edit</button></td>
                                        </tr>
                                        <tr>
                                            <td><button class="btn btn-success btn-round" >Add</button></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane fade" id="menu7" role="tabpanel" aria-labelledby="nav-profile-tab">
                                <table class="table" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>History Name</th>
                                            <th>Active</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Work 1</td>
                                            <td>jgraeg</td>
                                            <td><button class="btn btn-primary btn-round" >Delete</button><button class="btn btn-warning btn-round" >Edit</button></td>
                                        </tr>
                                        <tr>
                                            <td>Work 1</td>
                                            <td>jgraeg</td>
                                            <td><button class="btn btn-primary btn-round" >Delete</button><button class="btn btn-warning btn-round" >Edit</button></td>
                                        </tr>
                                        <tr>
                                            <td>Work 1</td>
                                            <td>jgraeg</td>
                                            <td><button class="btn btn-primary btn-round" >Delete</button><button class="btn btn-warning btn-round" >Edit</button></td>
                                        </tr>
                                        <tr>
                                            <td><button class="btn btn-success btn-round" >Add</button></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
          </div>              
</div>
</div>
<div class="bar-3" style="padding: 0">
    <button class="btn btn-danger btn-round">Cancel</button>
    <button class="btn btn-info btn-round">Save</button>
</div>
</div>


@stop



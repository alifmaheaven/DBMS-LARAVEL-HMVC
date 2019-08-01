@extends('partner::layouts.template')

@section('content')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<div class="containerku">
    <div class="bar-1">
        <img src="{{ URL::asset('img/dyah/ic-customer.png')}}"><span>Customer</span>
    </div>
    <div class="bar-2">
        <b>Customer List > Edit Customer</b>
    </div>

    <div class="sectionku" >

        <ul style="align-content: center;" class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
            <li><a class="active nav-item nav-link " data-toggle="tab" href="#home" role="tab" aria-controls="nav-home" aria-selected="true">General Information</a></li>
            <li><a class=" nav-item nav-link" data-toggle="tab" href="#menu1" role="tab" aria-controls="nav-profile" aria-selected="false">PIC Information</a></li>
            <li><a class=" nav-item nav-link" data-toggle="tab" href="#menu2" role="tab" aria-controls="nav-profile" aria-selected="false">Additional Information</a></li>
        </ul>

        <div class="tab-content">
            <div id="home" class="tab-pane in active">
                <div id="nav-home" class="container__customer__edit">
                    <h4>General Information</h4>
                    <hr>
                    <div class="form__customer">
                        <table width="100%;">
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
            </div>
            <div id="menu1" class="tab-pane fade">
              <div class="section-2">
                <div id="nav-profile" class="container__customer__edit ">
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
        </div>
        <div id="menu2" class="tab-pane fade">
          <div class="section-2" >
            <div id="nav-contact" class="container__customer__edit ">
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
    </div>
</div>

</div>
<div class="bar-3" style="padding: 0">
    <button class="btn btn-danger btn-round">Cancel</button>
    <button class="btn btn-info btn-round">Save</button>
</div>
</div>


@stop



@extends('partner::layouts.template')

@section('content')
<div class="containerku">
        <div class="bar-1">
            <img src="{{ URL::asset('img/dyah/ic-customer.png')}}"><span>Customer</span>
        </div>
        <div class="bar-2">
            <b>Customer List > Edit Customer</b>
        </div>
        <div class="sectionku">
             <nav>
                            <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Home</a>
                                <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">PIC Information</a>
                                <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Additional Information</a>
                            </div>
                        </nav>
            <div class="container__customer__edit">
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
        <div class="section-2">
            <div class="container__customer__edit">
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
        <div class="section-2">
            <div class="container__customer__edit">
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
        <div class="bar-3" style="padding: 0">
            <button class="btn btn-danger btn-round">Cancel</button>
            <button class="btn btn-info btn-round">Save</button>
        </div>
    </div>
    
@stop



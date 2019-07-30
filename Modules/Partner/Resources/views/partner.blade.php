@extends('partner::layouts.template')

@section('content')
    


<div class="containerku">
        <div class="bar-1">
            <img src="{{ URL::asset('img/dyah/ic-customer.png')}}"><span>Customer</span>
        </div>
        
        <div class="bar-2">
            <b>Customer List</b> <input class="searchku" placeholder="Search.." type="search" name=""><i class="fa fa-search icon-search"></i>
        </div>
        <div class="sectionku">
            <div class="container container__customer">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <th style="width: 15%;">
                                Customer ID
                            </th>
                            <th style="width: 25%;">
                                Customer Name
                            </th>
                            <th style="width: 45%;">
                                Address
                            </th>
                            <th style="width: 15%;">
                                Action
                            </th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    1
                                </td>
                                <td>
                                    Dakota Rice
                                </td>
                                <td>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing
                                </td>
                                <td>
                                    <button class="btn btn-primary btn-round">Edit</button>
                                    <button class="btn btn-danger btn-round">Detail</button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    2
                                </td>
                                <td>
                                    Minerva Hooper
                                </td>
                                <td>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing
                                </td>
                                <td>
                                    <button class="btn btn-primary btn-round">Edit</button>
                                    <button class="btn btn-danger btn-round">Detail</button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    3
                                </td>
                                <td>
                                    Sage Rodriguez
                                </td>
                                <td>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing
                                </td>
                                <td>
                                    <button class="btn btn-primary btn-round">Edit</button>
                                    <button class="btn btn-danger btn-round">Detail</button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    4
                                </td>
                                <td>
                                    Philip Chaney
                                </td>
                                <td>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing
                                </td>
                                <td>
                                    <button class="btn btn-primary btn-round">Edit</button>
                                    <button class="btn btn-danger btn-round">Detail</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="footer__customer">
                <div class="footer__customer__container">
                    <span>Show</span>
                    <select>
                        <option>10</option>
                    </select>
                    <center>
                        <div style="margin-top: -40px;">
                            <button class="btn btn-round">Previous</button>
                            <span>1</span>
                            <span>2</span>
                            <span>3</span>
                            <span>4</span>
                            <span>5</span>
                            <button class="btn btn-round">Next</button>
                        </div>
                    </center>
                    <div style="margin-top: -50px;" class="text-right">Showing 4 of 10</div>
                </div>
            </div>
        </div>
    </div>





@stop

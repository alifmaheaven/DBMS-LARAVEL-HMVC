@extends('partner::layouts.template')

@section('content')
    


<div class="containerku">
        <div class="bar-1">
            <img src="{{ URL::asset('img/dyah/ic-customer.png')}}"><span>Customer</span>
        </div>
        
        <div class="bar-2">
            <b>Customer List</b> 

            <form class="form_search" >
             </form>
        </div>
        <div class="sectionku">
            <div class="container container__customer">
                <div class="table-responsive">
                    <table class="table display" id="data-table">
                        <thead style="font-weight: bold">
                            <th style="width: 5%;">
                                No.
                            </th>
                            <th style="width: 15%;">
                                Customer ID
                            </th>
                            <th style="width: 30%;">
                                Customer Name
                            </th>
                            <th style="width: 40%;">
                                Address
                            </th>
                            <th style="width: 15%;">
                                Action
                            </th>
                        </thead>
                        <tbody>
                                {{-- @foreach($data as $index => $d)
                                <tr>
                                    <td style="text-align: center;">{{ $index + 1}}</td>
                                    <td style="text-align: center;">{{ $d->id }}</td>
                                    <td>{{ $d->name }}</td>
                                    <td>{{ $d->street }}</td>
                                    <td>
                                        <center>
                                            <form action="{{ url('/partner/update') }}" method="get">
                                               
                                                <input align="center" type="hidden" name="id_partner" value="{{$d->id}}">
                                                <button style="margin-right: 15px;" class="btn btn-primary btn-round" >Edit</button>
                                            </form>
                                        </center>
                                    </td>
                                </tr>
                                @endforeach --}}
                            
                        </tbody>
                    </table>
                    
                </div>
            </div>
            <div class="footer__customer">
                <div class="footer__customer__container">
                    
                    
                    <div id="length"></div>
                    
                    <center>
                       
                            
                             <div style="margin-top: -40px;" id="pagination"></div>
                            
                        
                    </center>
                  
                    <div id="showing" style="margin-top: -50px;" class="text-right"></div>
                    
                   
      
                </div>
            </div>
        </div>
    </div>





@stop

@push('scripts')
<script>
    var dataset = @JSON($data); 
$(function() {
    $('#data-table').DataTable({
        data: dataset,
        columns: [
            { data: 'indexing', name: 'indexing' },
            { data: 'id', name: 'id' },
            { data: 'name', name: 'name' },
            { data: 'street', name: 'street' },
            { data: 'action', name: 'action' },
            
        ]
    //    // stateSave: true
    //     processing: true,
    //     serverSide: true,
    //     ajax: 'partner/json',
    //     columns: [
    //         { data: 'DT_RowIndex', name: 'DT_RowIndex' },
    //         { data: 'id', name: 'id' },
    //         { data: 'name', name: 'name' },
    //         { data: 'street', name: 'street' },
    //          { data: 'action', name: 'action' },
            
    //     ]
    });
});

$( document ).ready(function() {
    $( $( "#data-table_filter" )).appendTo( $( ".form_search" ) );
    //$( "#data-table_filter" ).addClass( "searchku" );
    // $('').text('');
     $( "#data-table_filter" ).find( "label" ).find("input").addClass("searchku");
     $('<i class="fa fa-search icon-search"></i>').appendTo($( "#data-table_filter" ).find( "label" ))
     $( "#data-table_filter" ).find( "label" ).find("input").attr('placeholder','search..');
     // $( "#data-table_filter" ).find( "label" ).remove();
    // $(  '<label><input type="search" class="searchku" placeholder="" aria-controls="data-table"><i class="fa fa-search icon-search"></i></label>' ).appendTo( $( "#data-table_filter" ) );
     $( "#data-table_filter" ).find( "label" ).css({"float": "right","color": "#8c7aec"});

    $( $( "#data-table_length" )).appendTo( $( "#length" ) );
    $( $( "#data-table_info" )).appendTo( $( "#showing" ) );
    $( $( "#data-table_paginate" )).appendTo( $( "#pagination" ) );
    
});



</script>
@endpush

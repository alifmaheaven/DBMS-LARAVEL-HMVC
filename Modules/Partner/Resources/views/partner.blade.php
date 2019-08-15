@extends('partner::layouts.template')

@section('content')

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css">

<div class="containerku">
    <div class="bar-1">
        <a href="#"><span><img src="{{ URL ::asset('img/dyah/home-icon-silhouette.png')}}">Home</span></a>
        <a href="http://localhost:8000/partner"><span style="margin-left: 40px;"><img src="{{ URL ::asset('img/dyah/ic-customer.png')}}">Customer</span></a>
        <a href="http://localhost:8000/detail"><span style="margin-left: 40px;"><img src="{{ URL::asset('img/dyah/settings.png')}}">Profile</span></a>
    </div>

    <div class="bar-2">
        <b>Customer List</b> 
        <form class="form_search" >
        </form>
    </div>
    <div class="sectionku">
    <div class="button group">
    <a href="{{ url('partner/download/allpartner') }}"> <button class="btn btn-round btn-sm" style="background-color: #006400; float: right;text-align: center;margin-right: 50px;margin-bottom: 10px;margin-top: 10px;"><i id="eye" class="fas fa-download"></i>&nbsp; Excel</button></a>
    </div>   
        <div class="container container__customer">
            <div class="table-responsive">
                <table class="table display" id="data-table">
                    <thead style="font-weight: bold">
                        <tr>
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
                        <th  style="width: 15%;">
                            Action
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                      
                    </tr>                 
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
               <div>
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
            //{ data: 'action2', name: 'action' },
            ],
    //         rowsGroup: [// Always the array (!) of the column-selectors in specified order to which rows groupping is applied
	// 			// (column-selector could be any of specified in https://datatables.net/reference/type/column-selector)
	// 	'second:name',
	// 	0,
	// 	2
	// ],
       
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

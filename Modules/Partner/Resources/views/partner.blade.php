@extends('partner::layouts.template')

@section('content')
    


<div class="containerku">
        <div class="bar-1">
            <img src="{{ URL::asset('img/dyah/ic-customer.png')}}"><span>Customer</span>
        </div>
        
        <div class="bar-2">
            <b>Customer List</b> 

            <form class="form_search" action="{{ url()->current() }}">
            <input class="searchku" placeholder="Search.." type="search" name="keyword"><i class="fa fa-search icon-search"></i>
            </form>
        </div>
        <div class="sectionku">
            <div class="container container__customer">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <th style="width: 5%;">
                                No.
                            </th>
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
                                @foreach($data as $index => $d)
                                <tr>
                                    <td style="text-align: center;">{{ $index + $data->firstItem()}}</td>
                                    <td style="text-align: center;">{{ $d->id }}</td>
                                    <td>{{ $d->name }}</td>
                                    <td>{{ $d->street }}</td>
                                    <td>
                                        <center>
                                            <form action="{{ url('/partner/update') }}" method="get">
                                                {{--- {{ csrf_field() }} --}}
                                                <input align="center" type="hidden" name="id_partner" value="{{$d->id}}">
                                                <button style="margin-right: 40px;" class="btn btn-primary btn-round" >Edit</button>
                                            </form>
                                        </center>
                                    </td>
                                </tr>
                                @endforeach
                            
                        </tbody>
                    </table>
                    
                </div>
            </div>
            <div class="footer__customer">
                <div class="footer__customer__container">
                    <span>Show</span>
                    
                    {{$data->perPage()}}
                    
                    <center>
                        <div style="margin-top: -40px;">
                            
                            {{ $data->links('pagination::sayapunya') }}
                            
                        </div>
                    </center>
                  
                    <div style="margin-top: -50px;" class="text-right">Showing {{ $data->currentPage() }} of {{ $data->lastPage() }}</div>
                    
                   
      
                </div>
            </div>
        </div>
    </div>





@stop

@extends('layouts/adminLayout')

@section('content')


    
    <div class="container ">
        
        <div class="row mt-5 ">
            <div class="col-xs-3 col-md-3 col-sm-3">
                <x-admin-sidebar/>
            </div>
            <div class="col-xs-9 col-md-9 col-sm-9">
                <div class="box">
                    <div class="box-header  with-border mt-5">
                        <div class="col-xs-4 float-sm-right searchbar">
                            <div class="input-group input-group-sm " style="width: 150px;">
                            <a href="" class="btn btn-success">Listed Property</a>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <!-- /.box-header -->
                            @if(session()->has('success'))
                                <div class="alert alert-success">
                                    {{ session()->get('success') }}
                                </div>
                            @endif
                    <div class="box-body invoice p-3 mb-3">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Title</th>
                                    <th>Address</th>
                                    <th>City</th>
                                    <th>Category</th>
                                    <th>Price</th>
                                    <th>Current Status</th>
                                    <th>Posted</th>
                                    <th>Change Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $i = 1;
                                @endphp
                                @foreach ($allProperties as $item)
                                
                                    <tr> 
                                        <td>{{ $i++ }}</td>
                                        <td>{{ $item->property_title}}</td>
                                        <td>{{ $item->address}}</td>
                                        <td>{{ $item->city}}</td> 
                                        <td>{{ $item->property_category}}</td> 
                                        <td>Rs.{{ $item->price}}-{{ $item->price_unit }}</td> 
                                        <td>{{ $item->status }}</td>
                                        <td>{{ $item->created_at->diffForHumans()}}</td>
                                        <td></td>
                                        <td>
                                            <a class="btn btn-primary" href="{{ route('admin.property.approve', $item->id) }}">
                                                View
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                                
                            </tbody>
                        </table>
                        {{ $allProperties->links() }}
                    </div>
                </div>
            </div>
            
        </div>
    </div>
@endsection
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
                            <div class="input-group input-group-sm " ">
                                <h3>User Enquiries</h3> 
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="box-body invoice p-3 mb-3">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Subject</th>
                                    <th>Message</th>
                                    <th>User Id</th>
                                    <th>Sent</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($contact as $item)
                                    <tr> 
                                        <td>{{ ++$i }}</td>
                                        <td>{{ $item->name}}</td>
                                        <td>{{ $item->email}}</td>
                                        <td>{{ $item->subject}}</td> 
                                        <td>{{ $item->message}}</td> 
                                        <td>{{ $item->user_id}}</td> 
                                        <td>{{ $item->created_at->diffForHumans()}}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
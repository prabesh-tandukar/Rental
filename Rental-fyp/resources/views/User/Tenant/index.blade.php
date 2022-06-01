@extends('layouts.header-footer')

<link rel="stylesheet" href="{{ asset('User/css/dashboard.css') }}">
<script src="https://cdn.tailwindcss.com"></script>
@section('content') 

<div class="flex flex-row">
    <div class="basis-1/4"><x-sidebar/></div>
    <div class="basis-1/2 mt-20 pt-20">
        <div class="row">
            <div class="col-xs-12 col-md-12 col-sm-12">
        <div class="box">
            <div class="box-header  with-border">
            <!-- <div class="box-tools"> -->
                <div class="col-xs-8 col-sm-8 col-md-8 float-sm-left">
                
                </div>
                <div class="col-xs-4 float-sm-right searchbar">
                <div class="input-group input-group-sm " style="width: 150px;">
                <a href="{{route('user.tenant.create')}}" class="btn btn-success">Add New Tenant</a>
                </div>
                </div>
                <div class="clearfix"></div>
            <!-- </div> -->
            </div>
            <!-- /.box-header -->
            <div class="box-body invoice p-3 mb-3">
            <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                <th>id</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Joining Date</th>
                <th>Payment Method</th>
                <th>Rent Status</th>
                <th>Created at</th>
                <th colspan="2">Action</th>
                <th>Notify For Payment</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($tenant as $eachTenant)
                <tr> 
                    <td>{{ $eachTenant->id}}</td>
                    <td>{{ $eachTenant->tenant_name}}</td>
                    <td>{{ $eachTenant->phone}}</td>
                    <td>{{ $eachTenant->joining_date}}</td> 
                    <td>{{ $eachTenant->payment_timing}}</td> 
                    <td>{{ $eachTenant->rent}}</td>
                    
                    <td>{{ $eachTenant->created_at}}</td>
                    <td><a href="{{route('user.tenant.edit',[ $eachTenant->id])}}"><i class="bi bi-pencil-square"></i></a></td>
                    <td><a onClick="return ConfirmDelete();" href="{{route('user.tenant.destroy', $eachTenant->id)}}"><i class="bi bi-file-x-fill"></i></a></td>
                    <form action="{{ route('user.tenant.destroy', $eachTenant->id) }}" method="POST">
                        <a href="{{ route('user.tenant.edit', $eachTenant->id) }}">
                            <i class="fas fa-edit  fa-lg"></i>
                        </a>

                    @csrf
                
                    <button type="submit" title="delete" style="border: none; background-color:transparent;">
                        <i class="fas fa-trash fa-lg text-danger"></i>

                    </button>
                    <td>
                        <button style="border: none; background-color:transparent;">
                            <i class="bi bi-bell-fill"></i>
                        </button>
                    </td>
                    
                    </form>
                </td>
                </tr>
                @endforeach
                </tbody>
            </table>
            </div>
            {{-- {{ <div class="box-footer clearfix">
            <ul class="pagination pagination-sm no-margin pull-right">
            
            </ul>
            </div> --}}
            <!-- /.box-body -->
        </div>
        </div>
    </div>
</div>
</div>



@endsection
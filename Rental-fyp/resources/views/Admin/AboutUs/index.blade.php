@extends('layouts/adminLayout')

@section('content')


    
    <div class="container ">
        <div class="row mt-5 ">
            <div class="col-xs-12 col-md-12 col-sm-12">
                <div class="box">
                    <div class="box-header  with-border mt-5">
                        <div class="col-xs-4 float-sm-right searchbar">
                            <div class="input-group input-group-sm " style="width: 150px;">
                            <a href="{{route('admin.aboutUs.create')}}" class="btn btn-success">Add About Us</a>
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
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Image</th>
                                    <th>Created at</th>
                                    <th width='280px'>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($about as $item)
                                    <tr> 
                                        <td>{{ $item->title}}</td>
                                        <td>{{ $item->description}}</td>
                                        <td>{{ $item->image}}</td> 
                                        <td>{{ $item->created_at}}</td>
                                        {{-- <td><a href="{{route('admin.aboutUs.edit',[ $item->id])}}"><i class="bi bi-pencil-square"></i></a></td>
                                        <td><a onClick="return ConfirmDelete();" href="{{route('admin.aboutUs.destroy', $item->id)}}"><i class="bi bi-file-x-fill"></i></a></td> --}}
                                        <td>
                                            <form action="{{ route('admin.aboutUs.destroy', $item->id) }}" method="POST">
                                                <a class="btn btn-primary" href="{{ route('admin.aboutUs.edit', $item->id) }}">
                                                   Edit
                                                </a>
                                                @csrf   
                                                
                                                @method('DELETE')
      
                                                {{-- <button type="submit" class="btn btn-danger">Delete</button> --}}
                                                <button class="btn btn-danger" type="submit" title="delete" >
                                                    Delete
                                                </button>
                                            </form>
                                        </td>
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
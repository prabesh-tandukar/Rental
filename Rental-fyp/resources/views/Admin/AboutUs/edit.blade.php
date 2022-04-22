@extends('layouts/adminLayout')

<link rel="stylesheet" href="{{ asset('User/css/dashboard.css') }}">
<script src="https://cdn.tailwindcss.com"></script>
@section('content')

    <div class="container mt-5 pt-5">
        <section class="content mt-10">
            <div class="row mt-5">
                <div class="col-md-1" ></div>
                <div class="col-md-3">
                  <div class="card" >
                    <div class="card-header">
                      <h2 class="card-title">Edit About Us  </h2>
      
                      <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                        </button>
                      </div>
                    </div>
                    <div class="card-body p-0" style="display: block;">
                      <ul class="nav nav-pills flex-column">
                        <li class="nav-item active">
                          <a href="{{ route('admin.aboutUs.index') }}" class="nav-link ">
                            <i class="fas fa-align-justify"></i> List About Us
                          </a>
                        </li>
                        <li class="nav-item">
                          <a href="{{ route('admin.aboutUs.create') }}" class="nav-link">
                            <i class="nav-icon fa fa-plus"></i> Create About Us
                          </a>
                        </li>
                      </ul>
                    </div>
                    <!-- /.card-body -->
                  </div>
                </div>
                <!-- left column -->
                <div class="col-md-8">
                  <!-- general form elements -->
                    <div class="box invoice p-3 mb-3">
                    
                        <!-- Form Element sizes -->
                        <div class="box ">
                                <div class="box-body">
                                    <form method="POST" action="{{ route('admin.aboutUs.create') }}" enctype="multipart/form-data" >
                                        @csrf
                                            <div class="row">
                                            
                                                <div class="col-xs-12 col-sm-12 col-md-12 pb-3">
                                                    <div class="form-group">
                                                        <strong>Title:</strong>
                                                        <input type="text" name="title" class="form-control" value={{ $about->title }} placeholder="Enter Title ">
                                                    </div>
                                                </div>
                                                
                                                <div class="col-xs-12 col-sm-12 col-md-12 pb-3">
                                                    <div class="form-group">
                                                        <strong>Description:</strong>
                                                        <textarea name="description"  class="form-control"   rows="3" >{{ $about->description }}</textarea>
                                                    </div>
                                                </div>

                                                <div class="col-xs-12 col-sm-12 col-md-12 pb-3">
                                                    <div class="form-group">
                                                        <strong>Image:</strong>
                                                        <input type="file" name="image"  class="form-control" >
                                                        @if(($about->image!=''))
                                                        <img src='/uploads/aboutUs_images/{{$about->image}}' width="50"/>
                                                        @endif
                                                        @if ($errors->has('image'))
                                                        <div class="alert alert-danger">{{ $errors->first('image') }}</div>
                                                        @endif  
                                                    </div>
                                                </div>
                                            </div>         
                                                
                                            <div class="box-footer pt-3">
                                                <button type="submit" class="btn btn-outline-primary">Submit</button>
                                            </div>              
                                    </form>  
                                </div>    
                        </div>  
                    </div>               
                </div>
            </div>
        </section>
    </div>


@endsection
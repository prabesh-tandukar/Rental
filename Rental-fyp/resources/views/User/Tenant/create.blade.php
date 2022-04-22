@extends('layouts.header-footer')

<link rel="stylesheet" href="{{ asset('User/css/dashboard.css') }}">
<script src="https://cdn.tailwindcss.com"></script>
@section('content') 

<div class="flex flex-row">
    <div class="basis-1/4"><x-sidebar/></div>
    
    <div class="basis-1/2 mt-20 pt-20">
        <section class="content">
            <div class="row">
              <div class="col-md-3">
                  <div class="card" >
                    <div class="card-header">
                      <h2 class="card-title">Add Tenant  </h2>
      
                      <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                        </button>
                      </div>
                    </div>
                    <div class="card-body p-0" style="display: block;">
                      <ul class="nav nav-pills flex-column">
                        <li class="nav-item active">
                          <a href="{{ route('user.tenant.index') }}" class="nav-link ">
                            <i class="fas fa-align-justify"></i> List Tenants
                            <!-- <span class="badge bg-primary float-right">12</span> -->
                          </a>
                        </li>
                        <li class="nav-item">
                          <a href="{{ route('user.tenant.create') }}" class="nav-link">
                            <i class="nav-icon fa fa-plus"></i> Create Tenants
                          </a>
                        </li>
                      
                      </ul>
                    </div>
                    <!-- /.card-body -->
                  </div>
                </div>
                <!-- left column -->
                <div class="col-md-9">
                  <!-- general form elements -->
                  <div class="box invoice p-3 mb-3">
                    
                  <!-- Form Element sizes -->
                  <div class="box ">
                    <div class="box-body">
                      <form method="POST" action="{{ route('user.tenant.create') }}" >
                        @csrf
                        <div class="row">
                          {{-- <div class="container">
                            @if(session()->has('success'))
                              <div class="alert alert-success"> 
                                  {{ session()->get('success') }}
                              </div>
                            @endif
                    
                            @if(count($errors) > 0)
                              <div class="alert alert-danger">
                                <ul>
                                  @foreach ($errors->all() as $error)
                                      <li>{{ $error }}</li>
                                  @endforeach
                                </ul>
                              </div>
                            @endif
                        </div> --}}
                            <div class="col-xs-12 col-sm-12 col-md-12 pb-3">
                                <div class="form-group">
                                    <strong>Tenant Name:</strong>
                                    <input type="text" name="tenant_name" class="form-control" placeholder="Firstname Lastname">
                                </div>
                            </div>

                            <input type="text" id="user_id" name="user_id" value='1'>
                            <div class="col-xs-12 col-sm-12 col-md-12 pb-3">
                                <div class="form-group">
                                    <strong>Tenant Phone.no:</strong>
                                    <input type="text" name="phone" class="form-control" placeholder="+977 98XXXXXXXX">
                                </div>
                            </div>
      
                            <div class="col-xs-12 col-sm-12 col-md-12 pb-3">
                              <div class="form-group">
                                  <strong>Tenant Joining Date:</strong>
                                  <input type="date" name="joining_date" class="form-control">
                              </div>
                            </div>
    
                          <div class="form-group pb-3">      
                            <label for="Save Method"> <strong>Rent Status:</strong>  </label>
                             <div class="form-group clearfix">
                                <div class="icheck-primary d-inline">
                                  <input type="radio" id="rentStatus1" name="rent"  value="paid" checked="checked">
                                  <label for="rentStatus1">
                                  Paid
                                  </label>
                                </div>
                                <div class="icheck-primary d-inline">
                                  <input type="radio" name="rent"  value="unpaid" id="rentStatus2" >
                                  <label for="rentStatus2">
                                  Unpaid
                                  </label>
                                </div>
                               
                            @if ($errors->has('status'))
                                <div class="alert alert-danger">{{ $errors->first('status') }}</div>
                            @endif
                          </div>
                      
                        </div>         
                            
                          <div class="form-group pb-3">      
                            <label for="Save Method"> <strong>Payment Method:</strong>  </label>
                             <div class="form-group clearfix">
                                <div class="icheck-primary d-inline">
                                  <input type="radio" id="paymentStyle1" name="payment_timing"  value="monthly" checked="checked">
                                  <label for="paymentStyle1">
                                  Monthly
                                  </label>
                                </div>
                                <div class="icheck-primary d-inline">
                                  <input type="radio" name="payment_timing"  value="yearly" id="paymentStyle2" >
                                  <label for="paymentStyle2">
                                  Yearly
                                  </label>
                                </div>
                               
                            @if ($errors->has('status'))
                                <div class="alert alert-danger">{{ $errors->first('status') }}</div>
                            @endif
                          </div>
                        <div class="box-footer pt-3">
                          <button type="submit" class="btn btn-outline-primary">Submit</button>
                        </div>
                        </div>              
                    
      
                        </div>
                        
                      </form>       
                    </div>
                        
                  </div>              
                    
                    
                    </div>
                    <!-- /.box-body -->
                  </div>
                  <!-- /.box -->
                </div>
              </div>
            </div>
            <!-- /.row -->
          </section>
    </div>
</div>

    <!-- Main content -->
   
    <!-- /.content -->
  @endsection
      
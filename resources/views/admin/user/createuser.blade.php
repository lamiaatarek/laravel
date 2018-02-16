@extends('admin.layout.master')
@section('content')
   <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        
 <section class="content">
          <div class="row">
            <!-- left column -->
           
              <!-- general form elements -->
             
                <!-- /.box-header -->
                <!-- form start -->
                <form role="form" method="post" action="{{ route('user.store') }}">
                 {{csrf_field()}}
                  <div class="box-body">
                  <div class="col-lg-offset-3 col-lg-6">
                    <div class="form-group">
                      <label for="name">User Name</label>
                      <input type="text" class="form-control" id="name"  name="name">
                    </div>
                    <div class="form-group">
                      <label for="email">Email</label>
                      <input type="email" class="form-control" id="email"  name="email">
                    </div>
                     <div class="form-group">
                      <label for="user">Password</label>
                      <input type="password" class="form-control" id="password"  name="password">
                    </div>
                     <div class="form-group">
                      <label for="confirmpassword">Confirm Password</label>
                      <input type="password" class="form-control" id="confirmpassword"  name="confirmpassword">
                    </div>
                    <div class="form-group">
                    <div class="row">
                     @foreach($roles as $role)
                      <div class="col-lg-3">
                     
                        <div class="checkbox">
                          <label ><input type="checkbox" value="{{$role->id}}" name="role[]">{{$role->name}}</label>
                        </div>
                      
                      </div>
                        @endforeach
                        </div>
                    </div>
                     <input type="submit" class="btn btn-primary">
                      <a href="{{ route('user.index') }}" class="btn btn-success">BACK</a>
                   </div></div> </form></div></section></div>
                    @endsection
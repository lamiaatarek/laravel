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
                @include('admin.includes.messages')
                <form role="form" method="post" action="{{ route('role.update',$role->id) }}">
                 {{csrf_field()}}
                   {{ method_field('PUT')}}
                  <div class="box-body">
                  <div class="col-lg-offset-3 col-lg-6">
                    <div class="form-group">
                      <label for="name">Edit Role</label>
                      <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" value="{{$role->name}}">
                    </div>
                   
                    <div class="form-group">
                     <button type="submit" class="btn btn-primary">Submit</button>
                       <a href="{{ route('role.index') }}" class="btn btn-success">BACK</a>
                       </div>
                  </div></div> </form></div></section></div>
                    @endsection
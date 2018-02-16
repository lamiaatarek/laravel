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
                <form role="form" method="post" action="{{ route('role.store') }}">
                 {{csrf_field()}}
                  <div class="box-body">
                  <div class="col-lg-offset-3 col-lg-6">
                    <div class="form-group">
                      <label for="name">Role Name</label>
                      <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
                    </div>
                    
                     <input type="submit" class="btn btn-primary">
                      <a href="{{ route('role.index') }}" class="btn btn-success">BACK</a>
                   </div></div> </form></div></section></div>
                    @endsection
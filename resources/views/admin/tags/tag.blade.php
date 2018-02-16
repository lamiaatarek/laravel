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
                <form role="form" method="post" action="{{ route('tag.store') }}">
                 {{csrf_field()}}
                  <div class="box-body">
                  <div class="col-lg-offset-3 col-lg-6">
                    <div class="form-group">
                      <label for="title">Tag Title</label>
                      <input type="text" class="form-control" id="title" placeholder="Enter Title" name="title">
                    </div>
                    <div class="form-group">
                      <label for="tag">Tag Slug</label>
                      <input type="text" class="form-control" id="tag" placeholder="Enter Name" name="slug">
                    </div>
                     <input type="submit" class="btn btn-primary">
                      <a href="{{ route('tag.index') }}" class="btn btn-success">BACK</a>
                   </div></div> </form></div></section></div>
                    @endsection
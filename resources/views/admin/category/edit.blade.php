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
                <form role="form" method="post" action="{{ route('category.update',$category->id) }}">
                 {{csrf_field()}}
                   {{ method_field('PUT')}}
                  <div class="box-body">
                  <div class="col-lg-offset-3 col-lg-6">
                    <div class="form-group">
                      <label for="title">Category Title</label>
                      <input type="text" class="form-control" id="title" placeholder="Enter Title" name="title" value="{{$category->title}}">
                    </div>
                    <div class="form-group">
                      <label for="slug">Category Slug</label>
                      <input type="text" class="form-control" id="slug" placeholder="Enter Slug" name="slug" value="{{$category->slug}}">
                    </div>
                    <div class="form-group">
                     <button type="submit" class="btn btn-primary">Submit</button>
                       <a href="{{ route('category.index') }}" class="btn btn-success">BACK</a>
                       </div>
                  </div></div> </form></div></section></div>
                    @endsection
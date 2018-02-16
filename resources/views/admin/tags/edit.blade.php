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
                <form role="form" method="post" action="{{ route('tag.update',$tag->id) }}">
                 {{csrf_field()}}
                   {{ method_field('PUT')}}
                  <div class="box-body">
                  <div class="col-lg-offset-3 col-lg-6">
                    <div class="form-group">
                      <label for="title">tag Title</label>
                      <input type="text" class="form-control" id="title" placeholder="Enter Title" name="title" value="{{$tag->title}}">
                    </div>
                    <div class="form-group">
                      <label for="slug">tag Slug</label>
                      <input type="text" class="form-control" id="slug" placeholder="Enter Slug" name="slug" value="{{$tag->slug}}">
                    </div>
                    <div class="form-group">
                     <button type="submit" class="btn btn-primary">Submit</button>
                       <a href="{{ route('tag.index') }}" class="btn btn-success">BACK</a>
                       </div>
                  </div></div> </form></div></section></div>
                    @endsection
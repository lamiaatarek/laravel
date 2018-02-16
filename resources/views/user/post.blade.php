@extends('user.layout.master')
@section('bg-img',Storage::disk('local')->url($post->image))
@section('title',$post->title)
@section('subtitle',$post->subtitle)
@section('content')
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.12';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
 <article>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
           <small>created at {{$post->created_at->diffForHumans() }}</small>
           
        
         	@foreach($post->categories as $category)
         	 <a href="{{ route('category',$category->slug) }}
       "><small class="pull-right">{{$category->title}}</small></a>
         	@endforeach
          
            <p>{!! htmlspecialchars_decode($post->body) !!}</p>
           <div class="fb-comments" data-href="{{Request::url()}}" data-numposts="5"></div>
          </div>
        </div>
      </div>
    </article>

@endsection
@extends('spark::layouts.app')
@section('content')
<style media="screen">
  div.blog-item:hover{
  border-left:4px solid #27e1ce;
  }
</style>
<div id="fh5co-work-section" class="fh5co-light-grey-section" >
  <div class="container-fluid">
    <div class="col-md-12" >
      @foreach($blogs as $blog)
      <a href="Blogs/{{$blog->slug}}" class="blog-item" style="padding:3em">
        <div class="row blog-item" >
          <img src="{{$blog->image}}" class="img-responsive col-md-2" alt="" />
          <div class="col-md-6">
            <h1 class="blog-title" style="font-size:3em;font-weight:800">{{$blog->title}}</h1>
            <p>{!!substr($blog->content, 0, 150) !!}</p>
          </div>
        </div>
      </a>
      <br>
      @endforeach
    </div>
  </div>
</div>
@stop

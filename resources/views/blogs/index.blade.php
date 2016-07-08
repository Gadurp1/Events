@extends('spark::layouts.app')
@section('content')

<div id="fh5co-work-section" class="fh5co-light-grey-section" >
  <div class="container">
    <div class="col-md-12" >
      @foreach($blogs as $blog)
      <a href="Blogs/{{$blog->slug}}">
        <div class="row">
          <img src="{{$blog->image}}" class="img-responsive col-md-3" alt="" />
          <div class="col-md-9">
            <h1><strong>{{$blog->title}}</strong></h1>
            <p>{!!substr($blog->content, 0, 150) !!}</p>
          </div>
        </div>
      </a>
      <hr>
      <br>
      @endforeach
    </div>
  </div>
</div>
@stop

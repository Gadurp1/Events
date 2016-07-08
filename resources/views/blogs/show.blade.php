@extends('app')
@section('content')
<aside id="fh5co-hero" class="js-fullheight">
<div class="flexslider js-fullheight">
  <ul class="slides">

    <li style="background-image: url({{$blog->image}});">
      <div class="overlay-gradient" style="background:#000;height:100%;opacity:.8;position:absolute:bottom:0;left:0">
      <div class="container">
        <div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
          <div class="slider-text-inner">
            <h2 style="color:#fff;font-weight:800;">{{$blog->title}}</h2>
          </div>
        </div>
      </div>
    </li>
  </ul>
  </div>
</aside>

<div id="fh5co-work-section" class="fh5co-light-grey-section" >
  <div class="container">
    <div class="col-md-8 col-md-offset-2" >

      {!!$blog->content!!}
    </div>
  </div>
</div>
@stop

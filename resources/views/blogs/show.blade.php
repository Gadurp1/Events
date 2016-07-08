@extends('app')
@section('content')

<aside id="fh5co-hero" class="js-fullheight">
<div class="flexslider js-fullheight">
  <ul class="slides">

    <li style="background-image: url({{$artist_detail->image_url}});">
      <div class="overlay-gradient" style="background:#000;height:100%;opacity:.8;position:absolute:bottom:0;left:0">
      <div class="container">
        <div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
          <div class="slider-text-inner">
            <h2>{{$blog->title}}</h2>
          </div>
        </div>
      </div>
    </li>
  </ul>
  </div>
</aside>

<div id="fh5co-work-section" class="fh5co-light-grey-section" >
  <div class="container">
    <div class="col-md-8" >
      <a href="{{url('Events/')}}" class="item-grid text-center">
        <div class="image" style="height:15em;background-image: url(https://static.pexels.com/photos/7306/pexels-photo.jpeg)"></div>
        <div class="v-align" style="height:10em">
          <div class="v-align-middle">


          </div>
        </div>
      </a>
    </div>
  </div>
</div>
@stop

@extends('app')
@section('content')
<div class="container">

</div>
<aside id="fh5co-hero" class="js-fullheight">
  <div class="flexslider js-fullheight">
    <ul class="slides">
      <li style="background-image: url(http://66.media.tumblr.com/tumblr_lqbwp93pDY1qa28b0o1_1280.jpg);">
        <div class="overlay-gradient"></div>
        <div class="container">
          <div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
            <div class="slider-text-inner">
              <h2>{{$event->name}}</h2>
              <p><a href="#" class="btn btn-primary btn-lg">Get started</a></p>
            </div>
          </div>
        </div>
      </li>

      </ul>
    </div>
</aside>
<div id="fh5co-work-section" class="fh5co-light-grey-section">
<div class="container">
  <div class="row">

    <div class="col-md-8">

    </div>
                <!-- content-8  -->
                <section class="col-md-4">
                  <div class="row ">
                    <h1 class="text-center"><strong>{{date('D M d',strtotime($event->start))}}</strong></h1>
                    <hr>
                    @foreach($artists as $artist)
                      <div class="list-group-item ">
                          <img src="{{url('assets/img/icons/svg/compas.svg')}}" alt="Compas" class="hidden tile-image big-illustration">
                          <h5>{{$artist->name}}</h5>
                      </div>
                    @endforeach
                    </div>
                    <a href="{{$event->ticket_url}}">Buy Tickets</a>
                  </section>
  </div>
</div>
</div>
@stop

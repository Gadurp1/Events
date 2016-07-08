@extends('app')
@section('content')
<aside id="fh5co-hero" class="js-fullheight">
  <div class="flexslider js-fullheight">
    <ul class="slides">
      <li style="background-image: url(http://therealchicago.com/wp-content/uploads/2015/05/Kingston-Mines-Linsey-Alexander-with-dancers-web.jpg);">
        <div class="overlay-gradient"></div>
        <div class="container">
          <div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
            <div class="slider-text-inner">
              <h2><strong>{{$venue->name}}</strong></h2>
              <h2 style="color:#fff">
                  {{$venue->city}}, il
              </h2>
            </div>
          </div>
        </div>
      </li>

      </ul>
    </div>
</aside>

@if($events->count() > 0)
<!-- content-8  -->
<div id="fh5co-work-section" class="fh5co-light-grey-section">

<section class="container">
  <div class="row ">
    <div class="col-md-8 col-md-offset-2 ">
      <div class="row">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading animate-box">
					<h2>Upcoming Shows at {{$venue->name}} </h2>
					<p>I was punched at this bar once.  Was awesome.</p>
				</div>
			</div>
    @foreach($events as $event)
      <div class="col-md-6 animate-box">
        <a href="{{url('festivals/'.$event->id.'')}}" class="item-grid text-center">
          <div class="v-align">
            <div class="v-align-middle">
              <h3 class="title">{{$event->name}}</h3>
              <h5 class="category">{{date('D M m, Y',strtotime($event->date))}}</h5>
            </div>
          </div>
        </a>
      </div>
    @endforeach
    </div>
  </div>

  </section>
  @endif
</div>
@stop

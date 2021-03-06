@extends('spark::layouts.app')

@section('content')
<style>
     html, body {
       height: 100%;
       margin: 0;
       padding: 0;
     }
     #map {
       height: 300px;
     }
   </style>
<div class="container">
  <script>

       // This example adds a marker to indicate the position of Bondi Beach in Sydney,
       // Australia.
       function initMap() {
         var map = new google.maps.Map(document.getElementById('map'), {
           zoom: 13,
           center: {lat: {{$venue->lat}}, lng: {{$venue->long}}},
         });

         var image = 'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png';
         var beachMarker = new google.maps.Marker({
           position: {lat: {{$venue->lat}}, lng: {{$venue->long}}},
           map: map,
           icon: image
         });
       }
     </script>
</div>
<aside id="fh5co-hero" class="js-fullheight">
  <div class="flexslider js-fullheight">
    <ul class="slides">
      <li style="background-image: url('{{$event->image_url}}');">
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
<div id="" class="row" style="padding:20px;postion:fixed;top:70">
  <div class="container">
    <div class="col-md-4 text-center">
      {{$event->date}}
    </div>
    <div class="col-md-4 text-center">
      @if($event->ticket_url)
      <a href="{{$event->ticket_url}}" target="_blank">Buy Tickets</a>
      @elseif(!$event->ticket_url && $event->on_sale_datetime)
      @endif
    </div>
    <div class="col-md-4 text-center">
      <a href="{{$event->url}}">Festival Website</a>
    </div>
  </div>
</div>
<div id="fh5co-work-section" class="fh5co-light-grey-section">
<div class="container">
  <div class="row">
    <div class="col-md-6">
      {!! $event->description !!}
    </div>
  <div class="col-md-6">

    <div class="panel panel-default">
      <div class="panel-body">
        {{$venue->name}} {{$venue->city}}, {{$venue->region}}
      </div>
        <div id="map"></div>
    </div>


  </div>
</div>

</div>
</div>

</div>
<div id="fh5co-work-section" class="fh5co-white-section">
  <div  class="row">
    <!-- content-8  -->
    <section class="col-md-8 col-md-offset-2">
      <div class="row ">
        <h1 class="text-center"><strong>Who's Playing at {{$event->name}}</strong></h1>
        <hr>
        @foreach($artists as $artist)
        <div class="col-md-6 animate-box">
          <a href="{{$artist->facebook_page_url}}" target="_blank" class="item-grid text-center">
            <div class="image" style="background-image: url({{$artist->image_url}})"></div>
            <div class="v-align">
              <div class="v-align-middle">
                <h3 class="title">{{$artist->name}}</h3>
                <h5 class="category">{{date('h:i:s',strtotime($artist->event->date))}}</h5>
              </div>
            </div>
          </a>
        </div>
          @endforeach
        </div>
      </section>
    </div>
  </div>
</div>
</div>
@stop
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBnwQ6wvh-J0HHE-492La6liEN9hX0l-mI&callback=initMap"
async defer></script>

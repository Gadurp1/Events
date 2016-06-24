@extends('app')

@section('content')
        @if($venue->image_url)
        <style media="screen">
        .header-10-sub .background {
          background-image: url("{{url('$venue->image_url')}}");
          opacity: 85;
          filter: alpha(opacity=8500);
          opacity: 0.85;
          filter: alpha(opacity=85);
        }
        </style>
        @else
        <style media="screen">
        .header-10-sub .background {
          background-image: url("{{url('$venue->image_url')}}");
          opacity: 85;
          filter: alpha(opacity=8500);

          filter: blur(100px) brightness(0.5);
        }
        </style>
        @endif

        <style>
        div.section{
          margin-top: 50px;
          margin-bottom: 50px;
        }

        </style>
            <section class="header-10-sub v-center bg-midnight-blue" style="height:300px">
                <div class="background">
                    &nbsp;
                </div>
                <div style="background-color:rgba(0, 0, 0, 0.8);">
                    <div class="container">
                        <div class="hero-unit" style="z-index:">
                            <h1 style="font-size:73px"><strong>{{$venue->name}}</strong></h1>
                            <h1 style="color:#fff">
                                {{$venue->location}}
                                <br/>
                              {{date('D M d',strtotime($venue->date))}}
                            </h1>
                        </div>
                    </div>
                </div>
                <a class="control-btn " href="#">V </a>
            </section>

              <!-- content-7  -->
              <section class="content-7 v-center">
                  <div>

                      <div class="container">
                          <h3>Take a look in our awesome product</h3>
                          <div class="row v-center">
                              <div class="col-sm-3">
                                  <div>
                                      Of course we haven’t forgotten about the responsive layout. Create a website with full mobile
                                      support.
                                  </div>
                              </div>
                              <div class="col-sm-4">
                                  <div class="col-sm-offset-1">
                                      <div class="screen-wrapper">
                                          <div class="screen">
                                            <link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet/v0.7.7/leaflet.css" />
                  </head>
                  <body>
                  	<div id="mapid" style="width: 300px; height: 400px"></div>

                  	<script src="http://cdn.leafletjs.com/leaflet/v0.7.7/leaflet.js"></script>
                  	<script>

                  		var mymap = L.map('mapid').setView([51.505, -0.09], 13);

                  		L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpandmbXliNDBjZWd2M2x6bDk3c2ZtOTkifQ._QA7i5Mpkd_m30IGElHziw', {
                  			maxZoom: 18,
                  			attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, ' +
                  				'<a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
                  				'Imagery © <a href="http://mapbox.com">Mapbox</a>',
                  			id: 'mapbox.streets'
                  		}).addTo(mymap);


                  		L.marker([51.5, -0.09]).addTo(mymap)
                  			.bindPopup("<b>Hello world!</b><br />I am a popup.").openPopup();

                  		L.circle([51.508, -0.11], 500, {
                  			color: 'red',
                  			fillColor: '#f03',
                  			fillOpacity: 0.5
                  		}).addTo(mymap).bindPopup("I am a circle.");

                  		L.polygon([
                  			[51.509, -0.08],
                  			[51.503, -0.06],
                  			[51.51, -0.047]
                  		]).addTo(mymap).bindPopup("I am a polygon.");


                  		var popup = L.popup();

                  		function onMapClick(e) {
                  			popup
                  				.setLatLng(e.latlng)
                  				.setContent("You clicked the map at " + e.latlng.toString())
                  				.openOn(mymap);
                  		}

                  		mymap.on('click', onMapClick);

                  	</script>
                  </body>

                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-sm-3">
                                  <div class="col-sm-offset-2">
                                      <h6>{{$venue->name}}</h6>
                                      Of course we haven’t forgotten about the responsive layout. Full mobile support.
                                      <h6>Retina Ready</h6>
                                      Startup Framework works fine on devices supporting Retina Display. Feel the clarity!
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </section>

            @if($events->count() > 0)
            <!-- content-8  -->
            <section class="container">
              <div class="row ">
                <h1 class="text-center"><strong>{{date('D M d',strtotime($venue->start))}}</strong></h1>
                <hr>
                @foreach($events as $event)
                  <div class="col-md-6 ">
                    <div class="panel panel-body text-center ">
                      <img src="{{url('assets/img/icons/svg/compas.svg')}}" alt="Compas" class="hidden tile-image big-illustration">
                      <h5>{{$event->name}}</h5>
                    </div>
                  </div>
                @endforeach
                </div>
              </section>
              @endif

@stop

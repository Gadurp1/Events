@extends('app')
@section('content')
<div id="fh5co-work-section" class="fh5co-light-grey-section">

	<div class="container">

	</div>
  <div class="row">
    <div class="container">
      <div class="col-md-6">
        {!! Form::open(['method' => 'GET','class' => 'search-bar']) !!}
        {!! Form::text('search',null,['class'=>'form-control input-sm col-md-12','placeholder'=>'Fest,Venue, Artist']) !!}

      </div>
      {!! Form::close() !!}
      <div class="col-md-3">
        <input type="search" id="address" class="form-control" placeholder="Where are we going?" />



        <script src="https://cdn.jsdelivr.net/places.js/1/places.min.js"></script>
        <script>
        (function() {
          var placesAutocomplete = places({
            container: document.querySelector('#address')
          });

          var $address = document.querySelector('#address-value')
          placesAutocomplete.on('change', function(e) {
            $address.textContent = e.suggestion.value
          });

          placesAutocomplete.on('clear', function() {
            $address.textContent = 'none';
          });

        })();
        </script>                    </div>
      <div class="col-md-2">
        <select type="text" class="form-control " aria-label="...">
        <option>Today</option>
        <option>This Week</option>
        <option>Next Week</option>

        </select>
      </div>

        <div class="col-md-1">
          <a href="#" class="btn btn-success">Find</a>

          </select>
    </div>
  </div>
    <br><br>
</div>
<div id="fh5co-work-section" class="fh5co-light-grey-section">

		<div class="container">

			<div class="row">
        @foreach($venues as $venue)
        <div class="col-md-4 animate-box">
          <a href="{{url('Venues/'.$venue->id.'')}}" class="item-grid text-center">
            <div class="v-align">
              <div class="v-align-middle">
                <h3 class="title">{{$venue->name}}</h3>
              </div>
            </div>
            <div class="image" style="background-image: url({{$venue->image_url}})"></div>
            <p>{{$venue->upcoming_events}} Upcoming Events</p>
          </a>
        </div>
        @endforeach


				<div class="col-md-12 text-center animate-box">
					<p><a href="#" class="btn btn-primary with-arrow">Load More <i class="icon-arrow-right"></i></a></p>
				</div>
			</div>
		</div>
	</div>

	<div class="fh5co-cta" style="background-image: url(images/slide_2.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="col-md-12 text-center animate-box">
				<h3>We Try To Update The Site Everyday</h3>
				<p><a href="#" class="btn btn-primary btn-outline with-arrow">Get started now! <i class="icon-arrow-right"></i></a></p>
			</div>
		</div>
	</div>

@stop

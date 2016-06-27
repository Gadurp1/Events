@extends('app')
@section('content')

	<div id="fh5co-work-section" class="fh5co-light-grey-section">
		<div class="container">
              <div class="row">
                <div class="container">
                  <div class="col-md-7">
                    {!! Form::open(['method' => 'GET','class' => 'search-bar']) !!}
                    {!! Form::text('search',null,['class'=>'form-control input-md col-md-12','placeholder'=>'Fest,Venue, Artist']) !!}

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
                </div>
              </div>
              <div class="row ">
                @foreach($events as $event)
                  <div class="col-md-4 ">
                    <div class="panel panel-default panel-body" style="height:300px">
                    <a class="" href="{{url('Events/'.$event->event_id.'')}}">
                    <div class="" style="height:15em;background:url('{{$event->image_url}}');no-repeat center center ;
                      -webkit-background-size: cover;
                      -moz-background-size: cover;
                      -o-background-size: cover;
                      background-size: cover;">
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="">
                          <h3 class="">{{$event->name}}</h3>
                          {{date('D M d',strtotime($event->date))}}
                          <hr>
                        </a>
                        </div>
                      </div>
                    </div>
                  </div>
                  </div>
                @endforeach
              </div>
                {!!$events->render()!!}
                </div>
              </section>

      @stop

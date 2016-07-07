@extends('app')
@section('content')

	<div class="container">

	</div>

  <div id="fh5co-work-section" class="fh5co-light-grey-section">

		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading animate-box">
					<h2>Events in Chicago this Week</h2>
					<div class="row">
						<form class="" action="index.html" method="post">
							<div class="col-md-8">
								<input type="text" class="form-control" name="name" placeholder="Artists, Venues, Events">
							</div>
							<div class="col-md-4">
								<a type="button" name="name" class="btn btn-success col-md-12" style="border-radius:2px" value="">Start Searching</a>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="row">
        @foreach($events as $event)
        <div class="col-md-6 animate-box">
          <a href="{{url('Events/'.$event->id.'')}}" class="item-grid text-center">
            <div class="image" style="background-image: url({{$event->image_url}})"></div>
            <div class="v-align">
              <div class="v-align-middle">
                <h3 class="title">{{$event->name}} @ {{$event->title}}</h3>
                <h5 class="category">{{$event->tracker_count}} {{$event->date}}</h5>
              </div>
            </div>
          </a>
        </div>
        @endforeach


				<div class="col-md-12 text-center animate-box">
					<p><a href="#" class="btn btn-primary with-arrow">View More Projects <i class="icon-arrow-right"></i></a></p>
				</div>
			</div>
		</div>
	</div>


	<div class="fh5co-cta" style="background-image: url(images/slide_2.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="col-md-12 text-center animate-box">
				<h3>Get Updated on Events in Your Area</h3>
				<p><a href="#" class="btn btn-primary btn-outline with-arrow">Get started now! <i class="icon-arrow-right"></i></a></p>
			</div>
		</div>
	</div>

@stop

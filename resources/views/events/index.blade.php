@extends('app')
@section('content')
<style media="screen">
  .search-banner{
    padding-top:2em;
    padding-bottom:2em;
    background:#fff;
    margin-top:-30px
  }
  .animate-box.image{
    border-top:2px solid #43c8ae
  }
</style>
	<div class="container">
	</div>
  <div id="fh5co-work-section" class="fh5co-light-grey-section" style="margin-top:80px">

      <div class="navbar navbar-default navbar-fixed-top" style="margin-top:70px;background:#fff">
    <div class="container">
        <center >
            <div class="navbar-collapse collapse" style="padding-bottom:1em;padding-top:1em;" id="navbar-main">
                <form class=" " role="search">
                  <div class="row">
                    <div class="col-md-8">
                    <input type="text" class="form-control col-md-8" name="search" autofocus="autofocus" placeholder="Artist, Venue, Event" active>
                  </div>
                    <div class="col-md-2">
                      <select class="form-control" name="">
                        <option>Underground</option>
                        <option>Up And Coming</option>
                        <option>Well Known</option>
                        <option>Everyone Knows Them</option>
                        <option>Chart Toppers</option>
                      </select>
                    </div>
                    <div class="col-md-2">
                    <button type="submit" class="btn btn-success">Search</button>
                  </div>
                  </div>
                </form>
            </div>
        </center>
    </div>
</div>
      <div class="container">
			<div col-lass="row">

        <div class="col-md-8 animate-box" >
          <a href="{{url('Events/'.$events[10]['id'].'')}}" class="item-grid text-center">
            <div class="image" style="background-image: url({{$events[10]['image_url']}})"></div>
            <div class="v-align" style="height:10em">
              <div class="v-align-middle">
                <h3 class="title">{{$events[10]['name']}} @ {{$events[10]['title']}}</h3>
                <h5 class="category">
                  <strong>{{date('D M d, Y h:i',strtotime($events[10]['date']))}}</strong>
                </h5>
              </div>
            </div>
          </a>
        </div>
        @foreach($events as $event)
        <?php
          $event_link=str_replace(' ', '-', $event->title);
          $name_link=str_replace(' ', '-', $event->name);
        ?>
        <div class="@if($events->count() < 6) col-md-12 @else col-md-4 @endif  animate-box" >
          <a href="{{url('Events/'.$event_link.'/'.$name_link.'')}}" class="item-grid text-center">
            <div class="image" style="background-image: url({{$event->image_url}})"></div>
            <div class="v-align" style="height:10em">
              <div class="v-align-middle">
                <h3 class="title">{{$event->name}} @ {{$event->title}}</h3>
                <h5 class="category">
                  <strong>{{date('D M d, Y h:i',strtotime($event->date))}}</strong>
                </h5>
              </div>
            </div>
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
				<h3>Get Updated on Events in Your Area</h3>
				<p><a href="#" class="btn btn-primary btn-outline with-arrow">Get started now! <i class="icon-arrow-right"></i></a></p>
			</div>
		</div>
	</div>

@stop

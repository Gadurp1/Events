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
		   					<h2>Start Your Startup With This Template</h2>
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
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading animate-box">
					<h2>Events in Chicago this Week</h2>
					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
				</div>
			</div>
			<div class="row">
        @foreach($festivals as $festival)
        <div class="col-md-4 animate-box">
          <a href="{{url('Events/'.$festival->id.'')}}" class="item-grid text-center">
            <div class="image" style="background-image: url({{$festival->image_url}})"></div>
            <div class="v-align">
              <div class="v-align-middle">
                <h3 class="title">{{$festival->name}}</h3>
                <h5 class="category">{{$festival->date}}</h5>
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
        <h3>Get Notified!  Stay up to date with weekly events in your area.</h3>
        <p><a href="#" class="btn btn-primary btn-outline with-arrow">Sign Me Up! <i class="icon-arrow-right"></i></a></p>
      </div>
    </div>
  </div>
	<div id="fh5co-blog-section" class="fh5co-light-grey-section">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading animate-box">
					<h2>Recent from Blog</h2>
					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-sm-6 animate-box">
					<a href="#" class="item-grid">
						<div class="image" style="background-image: url(http://66.media.tumblr.com/e7665b78cf37d4e95ad6ee98faabbbe8/tumblr_mgldbqjLs61rv8a0xo1_1280.jpg)"></div>
						<div class="v-align">
							<div class="v-align-middle">
								<h3 class="title">10 Ruinions to see this Summer.</h3>
								<h5 class="date"><span>June 23, 2016</span> | <span>4 Comments</span></h5>
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.</p>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-6 col-sm-6 animate-box">
					<a href="#" class="item-grid">
						<div class="image" style="background-image: url('https://commons.wikimedia.org/wiki/File%3ASoundgarden_Lollapalooza_2010.jpg')"></div>
						<div class="v-align">
							<div class="v-align-middle">
								<h3 class="title">Geographical App</h3>
								<h5 class="date"><span>June 22, 2016</span> | <span>10 Comments</span></h5>
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.</p>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-12 text-center animate-box">
					<p><a href="Events" class="btn btn-primary with-arrow">View More Post <i class="icon-arrow-right"></i></a></p>
				</div>
			</div>
		</div>
	</div>


@stop

@extends('app')

@section('content')
<div class="container">

</div>
<aside id="fh5co-hero" class="js-fullheight">
  <div class="flexslider js-fullheight">
    <ul class="slides">
      <li style="background-image: url({{$festival->img}});">
        <div class="overlay-gradient"></div>
        <div class="container">
          <div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
            <div class="slider-text-inner">
              <h2>  <strong>{!! $festival->Name !!}</strong></h2>
              <p><a href="#" class="btn btn-primary btn-lg">{{$festival->start}}</a></p>
            </div>
          </div>
        </div>
      </li>

      </ul>
    </div>
</aside>

            <br>
            <div class="container">

            <div class="r">
                <div class="col-md-8 com-md-offset-1">
                  <div class="panel panel-default panel-body">

                {!! $festival->description !!}
<a href="{{$festival->website}}" class="btn btn-info btn-lg">View Website</a>
                </div>
              </div>

                <div class="col-md-6">
<iframe src="{{$festival->playlist_url}}" frameborder="0" allowtransparency="true" width="100%" height="300px"></iframe>              </div>
            </div>
            <br>

            @if($bands->count() > 0)
            <!-- content-8  -->
            <section class="container">
              <div class="row ">
                <h1 class="text-center"><strong>{{date('D M d',strtotime($festival->start))}}</strong></h1>
                <hr>
                @foreach($bands as $band)
                  <div class="col-md-6 ">
                    <div class="panel panel-body text-center ">
                      <img src="{{url('assets/img/icons/svg/compas.svg')}}" alt="Compas" class="hidden tile-image big-illustration">
                      <h5>{{$band->name}}</h5>
                    </div>
                  </div>
                @endforeach
                </div>
              </section>
            </div>
              @endif
            </div>
          </div>
        </div>

@stop

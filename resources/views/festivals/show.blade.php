@extends('app')

@section('content')
        @if($festival->img)
        <style media="screen">
        .header-10-sub .background {
          background-image: url("{{$festival->img}}");
          opacity: 85;
          filter: alpha(opacity=8500);
          opacity: 0.85;
          filter: alpha(opacity=85);
        }
        </style>
        @else
        <style media="screen">
        .header-10-sub .background {
          background-image: url("http://wallpapercave.com/wp/tmx6W6N.png");
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
                            <h1 style="font-size:73px"><strong>{{$festival->Name}}</strong></h1>
                            <h1 style="color:#fff">
                                {{$festival->location}}
                                <br/>
                              {{date('D M d',strtotime($festival->start))}} to {{date('D M d,',strtotime($festival->start))}}
                            </h1>
                        </div>
                    </div>
                </div>
                <a class="control-btn " href="#">V </a>
            </section>
            <section class="content-11">
                <div class="container">
                    <span>Get Updates On All Chicago Events</span>
                    <a class="btn btn-large btn-success" href="#">Sign Up!</a>
                </div>
            </section>

            <br>
            <div class="container">

            <div class="row section">
                <div class="col-md-6 com-md-offset-1">
                {!! $festival->description !!}
<a href="{{$festival->website}}" class="btn btn-info btn-lg">View Website</a>
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
              @endif

@stop

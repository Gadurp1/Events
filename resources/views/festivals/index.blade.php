@extends('app')
@section('content')
<style media="screen">
  div.jumbotron-main h1{
    color:#fff;
    font-weight: 800
  }
  div.ontop {
  position: relative;
  top: 4.7em;
}
div.backdrop{
z-index: -99;background:#000;opacity:.5;
}
</style>
<div class="jumbotron jumbotron-main" style="background:url('https://moviechutzpah.files.wordpress.com/2008/08/2733689746_0434e31f68_b-1.jpg') no-repeat center center ;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;">
  <div class="backdrop">
    <div class="container text-center" style=" z-index: 99">
      <h1>  The Home of Chicago's Music Events</h1>
          <p>  View and share events happening aroud chicago
      </p>
    </div>
  </div>
</div>

            <!-- content-8  -->
            <section class="container v-center">
              <div class="row ">
                @foreach($festivals as $festival)
                  <div class="col-sm-12 col-md-4 ">
                    <div class="panel panel-default panel-image" style="height:300px">
                    <a class="" href="{{url('festivals/'.$festival->id.'')}}">
                    <div class="row">
                      <img src="{{$festival->img}}"  alt="{{$festival->Name}}" class="img-responsive col-md-12">
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="tile">
                          <h4 class="tile-title">{{$festival->Name}}</h4>
                          Begins {{date('D M d',strtotime($festival->start))}}</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  </div>
                @endforeach
                </div>
              </section>
              <section class="content-11">
                  <div class="container">
                      <span>Get Notified of New Events in Chicago</span>
                      <a class="btn btn-large btn-success" href="#">Sign Me Up!</a>
                  </div>
              </section>
      @stop

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



<br><br>
            <!-- content-8  -->
            <section class="container v-center">
              <div class="row ">
                @foreach($venues as $venue)
                  <div class="col-md-8 ">
                    <div class="panel panel-default panel-body" >
                    <a class="" href="{{url('Venues/'.$venue->id.'')}}">

                    <div class="row">
                      <div class="col-md-12">
                        <div class="">
                          <h3 class="">{{$venue->name}}</h3>
                        </a>
                        </div>
                      </div>
                    </div>
                  </div>
                  </div>
                @endforeach
              </div>
                {!!$venues->render()!!}
                </div>
              </section>

      @stop

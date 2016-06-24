@extends('app')
@section('content')

            <section class="header-10-sub v-center bg-midnight-blue" style="height:300px">
                <div class="background">
                    &nbsp;
                </div>
                <div>
                    <div class="container">
                        <div class="hero-unit">
                            <h1 style="font-size:64px;font-weight:800">The Home of Chicago's Music Events</h1>
                            <h1>
                                View and share events happening aroud chicago
                                <br/>
                            </h1>
                        </div>
                    </div>
                </div>
                <a class="control-btn fui-arrow-down" href="#"> </a>
            </section>
            <!-- content-11  -->
            <section class="content-11">
                <div class="container">
                    <span>Get Notified of New Events in Chicago</span>
                    <a class="btn btn-large btn-success" href="#">Sign Me Up!</a>
                </div>
            </section>
<br><br>
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

      @stop

@extends('app')
@section('content')


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
                @foreach($events as $event)
                  <div class="col-md-8 col-md-offset-2 ">
                    <div class="panel panel-default panel-body" style="">
                    <a class="" href="{{url('Events/'.$event->id.'')}}">
                    <div class="row">
                      <img src="{{$event->img}}"  alt="{{$event->name}}" class="img-responsive col-md-12">
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="">
                          <h3 class="">{{$event->name}}</h3>
                          {{date('D M d',strtotime($event->date))}}

                        </a>
                        </div>
                      </div>
                    </div>
                  </div>
                  </div>
                @endforeach
                {!!$events->render()!!}
                </div>
              </section>

      @stop

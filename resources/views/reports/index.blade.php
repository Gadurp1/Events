@extends('spark::layouts.app')
@section('content')
@include('reports.partials.createModal')
<div class="jumbotron jumbotron-dark" style="margin-top:-50px">
  <div class="container">
    <h2>Report History <!-- Button trigger modal -->
      <button type="button" class="pull-right btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
        Run Report
      </button>
    </h2>
  </div>
</div>
  <div class="container">
    <div class="row">
      <div class="col-md-8 ">
        <!DOCTYPE html>
<head>
  <title>Pusher Test</title>
  <script src="https://js.pusher.com/3.1/pusher.min.js"></script>
  <script>

    // Enable pusher logging - don't include this in production
    Pusher.logToConsole = true;

    var pusher = new Pusher('3f39f08f9024b3c9b757', {
      encrypted: true
    });

    var channel = pusher.subscribe('test_channel');
    channel.bind('my_event', function(data) {
      alert(data.message);
    });
  </script>
</head>

        @if($reports)
          @foreach($reports as $report)
            <div class="col-md-12">
              <div class="panel panel-default">
                <div class="panel-body">
                  <p class="panel-title">{{$report->name}}
                    <small class="pull-right">Created {{$report->created_at->diffForHumans()}}</small>
                  </p>
                  <hr>
                  <div class="row">
                    <div class="col-md-1">
                      <img height="25px" src="https://pixabay.com/static/uploads/photo/2014/05/26/09/48/icon-354352_960_720.png" alt="" class="img-responsive" />
                    </div>
                    <div class="col-md-8">
                     {{$report->storage_path}}.pdf
                    </div>
                  </div>
                  @if($report->description)
                    {{$report->description}}
                  @endif
                  <hr>
                  <div class="row">
                    <div class="col-md-4">
                      <a href="files/reports/{{$report->storage_path}}" download>
                        <i class="fa fa-download"></i> Download</a>
                    </div>
                    <div class="col-md-3 pull-right">
                      <a href="{{url('Reports/'.$report->id.'')}}" class="pull-right"><i class="fa fa-expand"></i> View </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          @endforeach
        @endif
        @if($reports->count() < 1)
          @include('errors.noResults',['no_result_text'=>'No saved reports found.'])
        @endif
      </div>
      <div class="col-md-4">
        @include('reports.sidebar')
      </div>
    </div>
  </div>
@stop

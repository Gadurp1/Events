@extends('spark::layouts.app')
@section('content')
  <div class="container">
    @include('partials.breadcrumbs')
    <div class="row">
      <div class="col-md-3">
        <div class="panel panel-default">
          <div class="panel-body">
            <p>{{$report->name}}</p>
            <hr>
            created: {{$report->created_at->diffForHumans()}}
            {{$report->description}}
          </div>
        </div>
      </div>
      <div class="col-md-9">
        <iframe src="/files/reports/{{$report->storage_path}}"
          frameborder="none" width="100%" height="700px">
        </iframe>
      </div>
    </div>
  </div>
@stop

@extends('spark::layouts.app')
@section('content')
<home :user="user" inline-template>
  <div class="jumbotron jumbotron-dark">
    <div class="container">
      <div class="text-center">
        <h2>Newsletters</h2>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="col-md-8 col-md-offset-2">
      @foreach($forums as $forum)
        <div class="row">
          <div class="panel panel-body panel-default">
            <p><b>{{$forum->title}}</b>
            <a href="{{url('forum/'.$forum->id.'')}}" class="pull-right btn btn-info">View</a></p>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</home>
@stop

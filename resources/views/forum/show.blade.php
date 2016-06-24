@extends('spark::layouts.app')
@section('content')
<home :user="user" inline-template>
  <div class="jumbotron jumbotron-dark">
    <div class="container">
      <div class="text-center">
        <h2>{{$forum->title}}</h2>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="col-md-8 col-md-offset-2">
      @foreach($categories as $category)
        <div class="row">
          <div class="panel panel-body panel-default">
            <p><b>{{$category->title}}</b>
            <a href="{{url('forum/'.$category->id.'')}}" class="pull-right btn btn-info">View</a></p>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</home>
@stop

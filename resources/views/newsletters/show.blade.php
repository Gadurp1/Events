@extends('spark::layouts.app')
@section('content')
<style type="text/css">
.is-hidden{
  color:green;align:center;
}
.header-section{
  background:none;
  color:#000;
  font-size:64px;
  margin-top:-30px;
  padding-top:50px;
  width:100%;
  margin-top:-80px
}
.header-box {
  text-align:center;
  padding-bottom:50px;
}
</style>
<home :user="user" inline-template>
  <div class="jumbotron jumbotron-dark">
    <div class="container">
      <div class="col-md-8 col-md-offset-2 text-center">
        <h2>{{$newsletter->title}}</h2>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        {!! $newsletter->content !!}
      </div>
    </div>
  </div>
</home>
@stop

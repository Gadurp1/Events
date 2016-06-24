@extends('app')
@section('content')
{!! Form::model($festival,['method'=>'PATCH','action' => ['FestivalsController@update',$festival->id]]) !!}
  @include('festivals.form')
{!! Form::close() !!}
@stop

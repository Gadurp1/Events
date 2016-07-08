@extends('app')
@section('content')
<div id="fh5co-work-section" class="fh5co-light-grey-section" >

{!! Form::model($blog,['method'=>'PATCH','action' => ['BlogController@update',$blog->id]]) !!}
  @include('blogs.form')
{!! Form::close() !!}
</div>
@stop

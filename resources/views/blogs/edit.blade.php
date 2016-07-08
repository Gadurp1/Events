@extends('app')
@section('content')

{!! Form::model($blog,['method'=>'PATCH','action' => ['BlogController@update',$blog->id]]) !!}
  @include('blogs.form')
{!! Form::close() !!}
</div>
<script>
  $(document).ready(function() {
      $('#summernote').summernote();
  });
</script>
@stop

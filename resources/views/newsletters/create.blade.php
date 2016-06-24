@extends('spark::layouts.app')
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.1/summernote.css">
<script   src="https://code.jquery.com/jquery-2.2.4.min.js"   integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="   crossorigin="anonymous"></script>
  <div class="container">
    <div class="col-md-8 col-md-offset-2">
    <div class="row">
      <h2>
        Create a Newsletter
      </h2>
    </div>
    <div class="row">
      {!! Form::open(
          array(
            'route' => 'Monitoring.Newsletters.store',
            'class' => 'form',
            'novalidate' => 'novalidate',
            'files' => true)
          )
      !!}
      @include('newsletters.form',['submitButtonText'=>'Save Newsletter'])
    </div>
  </div>
</div>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.1/summernote.js"></script>
<script type="text/javascript">
$(document).ready(function() {
$('#summernote').summernote();
});
</script>
@stop

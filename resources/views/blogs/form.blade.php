
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h2>Edit Event</h2>

    </div>
  </div>
  <div class="col-md-8 ">
    <hr>
    <div class="row">
      <div class="col-md-12">
        {!! Form::label('title', 'Title:') !!}
        {!! Form::text('title',null,['class'=>'form-control input-md col-md-12']) !!}
      </div>
    </div>
    <hr>
    <div class="row">
      <div class="col-md-12">
        {!! Form::label('slug', 'Slug:') !!}
        {!! Form::text('slug',null,['class'=>'form-control input-md col-md-12']) !!}
      </div>
    </div>
    <hr>

    <div class="row">
      <div class="col-md-12">

      {!! Form::label('image', 'Image Url:') !!}
      {!! Form::text('image',null,['class'=>'form-control input-md col-md-12']) !!}
    </div>
    </div>

    <hr>
    <div class="col-md-12">

    <div class="row">
      {!! Form::label('content', 'Content:') !!}
      {!! Form::textarea('content',null,['class'=>'form-control input-lg','id'=>'summernote']) !!}
    </div>
  </div>
    <hr>

  </div>
  <div class="col-md-4">
    <button href="#" type="submit" class="btn btn-success col-md-12"> Save Event</button>

  </div>
</div>

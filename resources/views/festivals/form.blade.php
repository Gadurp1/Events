
<div class="container">
  <div class="col-md-8 col-md-offset-2">
    <h2>Edit Event</h2>
    <hr>
    <div class="row">
      <div class="col-md-12">
        {!! Form::label('Name', 'Name:') !!}
        {!! Form::text('name',null,['class'=>'form-control input-md col-md-12']) !!}

      </div>
    </div>
    <hr>
    <div class="row">
      <div class="col-md-12">
        {!! Form::label('img', 'Image:') !!}
        {!! Form::text('img_url',null,['class'=>'form-control input-md col-md-12']) !!}
      </div>
    </div>
    <hr>
    <div class="row">
    <div class="col-md-6">
      {!! Form::label('start', 'Start:') !!}
      {!! Form::text('start',null,['class'=>'form-control input-md col-md-12']) !!}
    </div>
    <div class="col-md-6">
      {!! Form::label('end', 'End:') !!}
      {!! Form::text('end',null,['class'=>'form-control input-md col-md-12']) !!}
    </div>
    </div>
    <hr>
    <div class="row">
      {!! Form::label('ticket_status', 'Ticket Status:') !!}
      {!! Form::text('ticket_status',null,['class'=>'form-control input-md col-md-12']) !!}
    </div>
    <hr>
    <div class="row">
      {!! Form::label('address', 'Address:') !!}
      {!! Form::text('address',null,['class'=>'form-control input-md col-md-12']) !!}
    </div>
    <hr>
    <div class="row">
      {!! Form::label('city', 'City:') !!}
      {!! Form::text('city',null,['class'=>'form-control input-md col-md-12']) !!}
    </div>
    <hr>
    <div class="row">
      {!! Form::label('website', 'Website:') !!}
      {!! Form::text('website',null,['class'=>'form-control input-md col-md-12']) !!}
    </div>
    <hr>
    <div class="row">
      {!! Form::label('description', 'Description:') !!}
      {!! Form::textarea('description',null,['class'=>'form-control input-lg','id'=>'text']) !!}
    </div>
    <hr>
    <div class="row">
      {!! Form::label('state', 'State:') !!}
      {!! Form::text('state',null,['class'=>'form-control input-md col-md-12']) !!}
    </div>
    <hr>
    <div class="row">
      <button href="#" type="submit" class="btn btn-success col-md-12"> Save Event</button>
    </div>
  </div>
</div>

@extends('spark::layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      {!! Form::open(
          array(
            'route' => 'Reports.store',
            'class' => 'form',
            'novalidate' => 'novalidate',
            'files' => true)
          )
      !!}
      <div class="col-md-8 col-md-offset-2">
        <h2>
          Create a New Report
        </h2>
        <hr>
        {!! Form::text('user_id',Auth()->user()->id,['class'=> 'hidden col-md-6 form-control input-lg']) !!}

        @include('errors.list')
        <div class="row">
          <div class="col-md-12">
            {!! Form::text('storage_path',Auth()->user()->id.'-'.'ClaimsReport-'.date('m-d-Y',strtotime(\Carbon\Carbon::now())).'.pdf',['class'=> 'hidden col-md-6 form-control input-lg']) !!}
          </div>

            <div class="form-group">
              {!! Form::label('Give this report a name') !!}
              {!! Form::text('name',null,['class'=> 'col-md-6 form-control input-lg']) !!}
            </div>
          </div>
          <hr>

          <p><b><i class="fa fa-table"></i> Choose Tables for Report</b></p>
          <div class="panel panel-default panel-body">
            <div class="panel-body">
            <div class="row">
              <div class="col-md-4 ">
                  {!! Form::label('Pending Claims') !!}
                  {!! Form::checkbox('pending', null, array('class'=>'  form-control')) !!}
              </div>
              <div class="col-md-4 ">
                  {!! Form::label('Claims Filed') !!}
                  {!! Form::checkbox('filed', null, array('class'=>'  form-control')) !!}
              </div>
              <div class="col-md-3 pull-right">
                  {!! Form::label('Claims Paid') !!}
                  {!! Form::checkbox('paid', null, array('class'=>'  form-control')) !!}
              </div>
            </div>
          </div>
        </div>
        <hr>
          <p><b><i class="fa fa-file-o"></i> What format would you like this report in?</b></p>
          <div class="panel panel-default panel-body">
            <div class="panel-body">
            <div class="row">
              <div class="col-md-4 col-md-offset-2 ">
                  {!! Form::label('.PDF ') !!}
                  {!! Form::radio('type', 'pdf', array('class'=>'  form-control')) !!}
              </div>
              <div class="col-md-4 col-md-offset-2 ">
                  {!! Form::label('.XLS ') !!}
                  {!! Form::radio('type', 'xls', array('class'=>'  form-control')) !!}
              </div>
            </div>
          </div>
        </div>
        <hr>
        <a class="" href="#" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
          Custom Date Range?
        </a>
        <br>
        <div class="collapse" id="collapseExample">
          <i class="fa fa-calendar"></i> {!! Form::label('Choose a Date Range (default is comprehensive)') !!}
            <div class="panel panel-default panel-body">
              <div class="row">
            <div class="col-md-6">
              {!! Form::date('date', null, array('class'=>' datepicker form-control')) !!}
            </div>
            <div class="col-md-6">
              {!! Form::date('date', null, array('class'=>'  form-control')) !!}
            </div>
          </div>
          </div>
        </div>
        <hr>
        <a class="" href="#" data-toggle="collapse" data-target="#emailForwarding" aria-expanded="false" aria-controls="emailForwarding">
          Forward to a colleague?
        </a>
        <div class="collapse" id="emailForwarding">
          <i class="fa flash_message"></i>  {!! Form::label('Send via email') !!}
          <div class="panel panel-default panel-body">
            <div class="row">
              <div class="col-md-12">
                {!! Form::text('email', null, array('class'=>'  form-control','placeholder'=>'example@mail.com')) !!}
              </div>
            </div>
          <hr>
          <div class="row">
          <div class="col-md-12">
            {!! Form::textarea('description',null,['id'=>'summernote','class'=> 'html-editor form-control ','placeholder'=>'A short description for you.']) !!}
          </div>
        </div>
      </div>
      {!! Form::close() !!}
    </div>
    <hr>
    <button type="submit" class="btn btn-success pull-right col-md-12" name="button"><i class="fa fa-cloud-upload"></i>
      Save and continue
    </button>
  </div>
</div>
@stop

{!!Form::token()!!}

  <hr>
    <div class="row">
      <div class="form-group">
        {!! Form::label('Give this newsletter a name') !!}
        {!! Form::text('title',null,['class'=> 'col-md-12 form-control input-lg']) !!}
      </div>
    </div>
    <hr>
    <div class="row">
      <div class="form-group">
        {!! Form::label('Look over the Content') !!}
        <textarea name="content" id="summernote" class="form-control">
              <div class="row">
                <h2>BP Fair Fund Offers Relief to Investors Affected by Gulf Oil Spill</h2>
              </div>
              <div class="row">
              <p>
                On April 20, 2010, the Deepwater Horizon oil rig exploded and sank in the Gulf of Mexico. 11 people were killed and nearly 5 million gallons of oil leaked into the Gulf. The leak was not capped until July 15, 2010—87 days later.  Investigators found that the explosion was caused by a methane leak in a well that was owned and maintained by BP.
              </p>
              <p>
                The Securities and Exchange Commission allege that BP violated federal securities laws by misrepresenting the rate at which oil was flowing into the Gulf after the explosion. Accordingly, the class period does not begin on April 20, but on April 26, 2010. The period ends on May 26, 2010.
              </p>
              <p>
                The SEC Fair Fund provides $525 million in relief to investors in BP American Depository Shares. As you may know, Fair Funds often appear alongside civil settlements—and the civil settlements are sometimes far larger. We are tracking the civil securities class action now pending against BP, but it is unclear what relief if any will be made to investors in the form of a cash settlement. Recent Supreme Court decisions, especially Morrison v. National Australia Bank, limit the ability of investors to sue foreign companies for market losses. And BP PLC, formerly British Petroleum and based in London, is very much a foreign company.
              </p>
              <p>
                Will this Fair Fund be the best relief available to investors during the time of the Deepwater Horizon Spill? Will it be the only relief? As of now, it is unclear, but we will be filing for all of our clients in this ligation—as well as in any other BP settlement that emerges in the future.
              </p>
            </div>
            <hr>
            <div class="panel panel-default">
              <div class="panel-heading">
                <h2 class="panel-title">Pending Litigations</h2>
                <p>The following litigations on our Pending page are now open to lead plaintiff applications.</p>
              </div>
              <div class="panel-body">
                <table class="table table-resonsive table-striped">
                  <thead>
                    <th>asdf</th>
                    <th>asdf</th>
                    <th>asdf</th>
                    <th>asdf</th>
                  </thead>
                  <tbody>
                    <tr>
                      <td>asdf</td>
                      <td>asdf</td>
                      <td>asdf</td>
                      <td>asdf</td>
                    </tr>
                    <tr>
                      <td>asdf</td>
                      <td>asdf</td>
                      <td>asdf</td>
                      <td>asdf</td>
                    </tr>
                    <tr>
                      <td>asdf</td>
                      <td>asdf</td>
                      <td>asdf</td>
                      <td>asdf</td>
                    </tr>
                    <tr>
                      <td>asdf</td>
                      <td>asdf</td>
                      <td>asdf</td>
                      <td>asdf</td>
                    </tr>
                    <tr>
                      <td>asdf</td>
                      <td>asdf</td>
                      <td>asdf</td>
                      <td>asdf</td>
                    </tr>
                    <tr>
                      <td>asdf</td>
                      <td>asdf</td>
                      <td>asdf</td>
                      <td>asdf</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="panel-footer">

              </div>
            </div>
            <hr>
            <div class="panel panel-default">
              <div class="panel-heading">
                <h2 class="panel-title">Current Cases</h2>
                <p>For detailed information on each case, click on the case name to visit its settlement page.</p>
              </div>
              <div class="panel-body">
                <table class="table table-resonsive table-striped">
                  <thead>
                    <th>asdf</th>
                    <th>asdf</th>
                    <th>asdf</th>
                    <th>asdf</th>
                  </thead>
                  <tbody>
                    <tr>
                      <td>asdf</td>
                      <td>asdf</td>
                      <td>asdf</td>
                      <td>asdf</td>
                    </tr>
                    <tr>
                      <td>asdf</td>
                      <td>asdf</td>
                      <td>asdf</td>
                      <td>asdf</td>
                    </tr>
                    <tr>
                      <td>asdf</td>
                      <td>asdf</td>
                      <td>asdf</td>
                      <td>asdf</td>
                    </tr>
                    <tr>
                      <td>asdf</td>
                      <td>asdf</td>
                      <td>asdf</td>
                      <td>asdf</td>
                    </tr>
                    <tr>
                      <td>asdf</td>
                      <td>asdf</td>
                      <td>asdf</td>
                      <td>asdf</td>
                    </tr>
                    <tr>
                      <td>asdf</td>
                      <td>asdf</td>
                      <td>asdf</td>
                      <td>asdf</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="panel-footer">

              </div>
            </div>
        </textarea>
      </div>
    </div>
    <hr>
    <p><b><i class="fa fa-file-o"></i> Would you like this newsletter active on reporting?</b></p>
    <div class="row">
      <div class="panel panel-body">
        <div class="row">
          <div class="col-md-4 col-md-offset-2 ">
            {!! Form::label('Draft ') !!}
            {!! Form::radio('status', 'draft', array('class'=>'  form-control')) !!}
          </div>
          <div class="col-md-4 col-md-offset-2 ">
            {!! Form::label('Publish ') !!}
            {!! Form::radio('status', 'publish', array('class'=>'  form-control')) !!}
          </div>
        </div>
      </div>
    </div>
    <hr>
    <button type="submit" class="btn btn-success pull-right col-md-12" name="button"><i class="fa fa-cloud-upload"></i>
      {{ $submitButtonText }}
    </button>
    {!! Form::close() !!}

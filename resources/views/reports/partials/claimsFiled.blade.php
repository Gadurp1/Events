<div class="container">
  <div id="details" class="clearfix">
    <div id="client">
      <h2 class="name">{{$claims->count()}} Claims Filed</h2>
      <div class="to">All of these claims have settled and are awaiting distribution.</div>
    </div>
  </div>
  <div class="row">
      <table>
        <thead>
          <tr class="qty">
            <th style="text-align:left" class="total"><b>Case Name</b></th>
            <th style="text-align:center" class="total"><b>Accounts</b></th>
            <th  class="total" style="text-align:center"><b>Deadline</b></th>
          </tr>
        </thead>
        <tbody>
          @foreach($claims->take(10) as $claim)
            <tr>
              <td style="text-align:left">{{$claim->case_name}}</td>
              <td style="text-align:center">{{$claim->accounts}}</td>
              <td style="text-align:center">{{$claim->deadline}}</td>
            </tr>
          @endforeach
      </tbody>
    </table>
  </div> <!-- /row -->
</div> <!-- /container -->

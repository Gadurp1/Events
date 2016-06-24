<div class="container">
  <div id="details" class="clearfix">
    <div id="client">
      <h2 class="name">{{$checks->count()}} Checks Paid</h2>
      <div class="to">All of these claims have been paid out to CCC.</div>
    </div>
  </div>
  <div class="row">
      <table>
        <thead>
          <tr class="qty">
            <th  class="total" style="text-align:left" >Case Name</th>
            <th  class="total" style="text-align:center" >Accounts</th>
            <th  class="total" style="text-align:center">Sum Checks</th>
            <th  class="total" style="text-align:center">Date Mailed</th>
          </tr>
        </thead>
        <tbody>
          @foreach($checks->take(10) as $check)
            <tr>
              <td style="text-align:left">{{$check->Case_Name}}</td>
              <td style="text-align:center">{{$check->accounts}}</td>
              <td style="text-align:center">${{number_format($check->sum,2)}}</td>
              <td style="text-align:center">{{$check->Date}}</td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div> <!-- /row -->
</div> <!-- /container -->

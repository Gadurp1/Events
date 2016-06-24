<div id="details" class="clearfix">
  <div id="client">
    <h2 class="name">{{$pending_claims->count()}} Pending Claims</h2>
    <div class="to">All of these claims have been brought to litigation and have not yet settled.</div>
  </div>
</div>
  <table>
    <thead>
    <tr class="qty">
      <td  class="total"  style="text-align:left"><p><b>Case Name</b></p></td>
      <td  class="total"  style="text-align:center"><p><b>Accounts</b></p></td>
      <td  class="total"  style="text-align:center"><p><b>Status</b></p></td>
    </tr>
  </thead>
    <tbody>
      @foreach($pending_claims->take(13) as $claim)
        <tr>
          <td style="text-align:left">{{$claim->case_name}}</td>
          <td style="text-align:center">{{$claim->accounts}}</td>
          <td style="text-align:center">{{$claim->status}}</td>
        </tr>
      @endforeach
    </tbody>
  </table>

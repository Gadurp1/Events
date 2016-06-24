<div id="details" class="clearfix">
  <div id="client">
    <div class="to">Claims Report for:</div>
    <h2 class="name">{{Auth()->user()->name}}</h2>
    <div class="address">{{Auth()->user()->billing_address}}</div>
    <div class="email">
      <a href="mailto:john@example.com">{{Auth()->user()->email}}</a>
    </div>
    <div class="email">
      {{date('M d, Y',strtotime(Auth()->user()->created_at))}} - {{date('M d, Y',strtotime(\Carbon\Carbon::now()))}}
    </div>
  </div>
  <div id="invoice">
    <h1>{{$name}}</h1>
    <div class="date">Date of Invoice: 01/06/2014</div>
  </div>
</div>
<table border="0" cellspacing="0" cellpadding="0">
  <thead>
    <tr>
      <th class="desc"></th>
      <th class="qty"></th>
      <th style="text-align:right" class="unit"></th>
      <th style="text-align:right" class="total">TOTAL</th>
    </tr>
  </thead>
  <tbody>
    @if($pending_claims)
    <tr>
      <td class="desc"><h3>Claims Pending</h3>
        All Claims that have been filed but have yet to pay out
      </td>
      <td class="qty"></td>
      <td class="qty">{{$pending_claims->count()}}</td>
      <td class="qty"></td>
    </tr>
    @endif
    @if($claims)
    <tr>
      <td class="desc"><h3>Claims Filed</h3>
        All Claims filed between date and Database
      </td>
      <td class="qty"></td>
      <td class="qty">{{$claims->count()}}</td>
      <td class="qty"></td>
    </tr>
    @endif
    @if($checks)
    <tr>
      <td class="desc"><h3>Checks Paid</h3>
        All checks paid between start and end date.
      </td>
      <td class="qty"></td>
      <td class="qty">
        {{$checks->count()}}
      </td>
      <td class="qty">$3,200.00</td>
    </tr>
    <tr>
      <td class="desc"><h3>All Checks Paid</h3>
        Every check paid from beginning to end.
      </td>
      <td class="qty"></td>
      <td class="qty">
        {{number_format(Auth()->user()->checksTotals['total_checks'])}}
      </td>
      <td class="qty">
        ${{number_format(Auth()->user()->checksTotals['sum_checks'])}}
      </td>
    </tr>
    @endif

    @if($claims)
    <tr>
      <td class="desc"><h3>Total Rec Loss</h3>
        All recognized loss we have calculated...
      </td>
      <td class="qty"></td>
      <td class="qty">
        {{Auth()->user()->totalClaimsWithRecLoss['total_claims']}} claims
      </td>
      <td class="qty">${{number_format(Auth()->user()->sumRecLoss['sum_rec_loss'],2)}}</td>
    </tr>
    @endif

  </tbody>
 </table>

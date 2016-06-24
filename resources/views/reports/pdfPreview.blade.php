@extends('spark::layouts.app')
@section('content')
<style media="screen">
.page-break {
    page-break-after: always;
}
@font-face {
  font-family: SourceSansPro;
  src: url(https://fonts.googleapis.com/css?family=Source+Sans+Pro);
}
.clearfix:after {
  content: "";
  display: table;
  clear: both;
}

a {
  color: #373e4a;
  text-decoration: none;
}

main {
  position: relative;
  width: 7.5in;
  height: 1.5in;
  margin: 0 auto;
  color: #555555;
  background: #FFFFFF;
  font-family: Arial, sans-serif;
  font-size: 14px;
  font-family: SourceSansPro;
  margin-top:75px;
}

header {
  padding: 10px 0;
  margin-bottom: 20px;
  border-bottom: 1px solid #AAAAAA;
}

#logo {
float:left;
}

#logo img {
  height: 70px;
}

#company {
  float: right;
  text-align: right;
}


#details {
  margin-bottom: 50px;
}

#client {
  padding-left: 6px;
  border-left: 6px solid #373e4a;
  float: left;
}

#client .to {
  color: #777777;
}

h2.name {
  font-size: 1.4em;
  font-weight: normal;
  margin: 0;
}

#invoice {
  display:none;
}

#invoice h1 {
  color: #373e4a;
  font-size: 2.4em;
  line-height: 1em;
  font-weight: normal;
  margin: 0  0 10px 0;
}

#invoice .date {
  font-size: 1.1em;
  color: #777777;
}

table {
  width: 100%;
  border-collapse: collapse;
  border-spacing: 0;
  margin-bottom: 20px;
}

table th,
table td {
  padding: 20px;
  text-align: center;
  border-bottom: 1px solid #FFFFFF;
}
table th {
  background: #EEEEEE;
}
table th {
  white-space: nowrap;
  font-weight: normal;
}

table td {
  text-align: right;
}

table td h3{
  color: #24566d;
  font-size: 1.2em;
  font-weight: normal;
  margin: 0 0 0.2em 0;
}

table .no {
  color: #FFFFFF;
  font-size: 1.6em;
  background: #24566d;
}

table .desc {
  text-align: left;
}

table .unit {
  background: #DDDDDD;
}

table .qty {
}

table .total {
  background: #24566d;
  color: #FFFFFF;
}

table td.unit,
table td.qty,
table td.total {
  font-size: 1.2em;
}

table tbody tr:last-child td {
  border: none;
}

table tfoot td {
  padding: 10px 20px;
  background: #FFFFFF;
  border-bottom: none;
  font-size: 1.2em;
  white-space: nowrap;
  border-top: 1px solid #AAAAAA;
}

table tfoot tr:first-child td {
  border-top: none;
}

table tfoot tr:last-child td {
  color: #24566d;
  font-size: 1.4em;
  border-top: 1px solid #24566d;

}

table tfoot tr td:first-child {
  border: none;
}

#thanks{
  font-size: 2em;
  margin-bottom: 50px;
}

#notices{
  padding-left: 6px;
  border-left: 6px solid #373e4a;
}

#notices .notice {
  font-size: 1.2em;
}

footer {
  color: #777777;
  width: 100%;
  height: 30px;
  position: absolute;
  bottom: 0;
  border-top: 1px solid #AAAAAA;
  padding: 8px 0;
  text-align: center;
}
.page{
  height:11in;
  border:2px solid #eeeeee;
  padding:10px;
  margin-bottom:.5in;
  padding-top:25px
}

td.table-header{
  background-color:#373e4a;
  color:#eeeeee;
  font-weight:800
}
nav.options-nav{
  z-index:999;
  background:#fff;
  width:100%;
  height:75px;
  margin-bottom:10px;
  border-bottom:2px solid #eeeeee;
  position:fixed;
  top:65px;
  padding:5px
}
nav.options-nav  div.container {
  position: relative;
  width: 7.5in;
  margin: 0 auto;
  color: #555555;
  background: #FFFFFF;
  font-family: Arial, sans-serif;
  font-size: 14px;
  font-family: SourceSansPro;
}
a.btn{
  background:#78c2d3;
  padding:2px;
  font-size:14px;
  borde-radius:2px;
  color:#fff;
}
</style>
</head>
  <nav class="options-nav">
    <div class="container">
      <h2>Report Preview <a href="#"  class="btn" style="float:right">Dude</a></h2>
    </div>
  </nav>

  <body>
    <main>

    <div class="page">

    <header class="clearfix">
      <div id="logo">
        <img src="https://chicagoclearing.com/img/logo-email.jpg">
      </div>
      <div id="company">
        <h2 class="name">Chicago Clearing Corporation</h2>
        <div>404 South Wells, Chicago Illinois 60607</div>
        <div><a href="mailto:company@example.com">clientservice@chicagoclearing.com</a></div>
        <div>(602) 519-0450</div>
      </div>
    </header>
        <div id="details" class="clearfix">
          <div id="client">
            <div class="to">Claims Report for:</div>
            <h2 class="name">{{Auth()->user()->name}}</h2>
            <div class="address">{{Auth()->user()->billing_address}}</div>
            <div class="email"><a href="mailto:john@example.com">{{Auth()->user()->email}}</a></div>
            <div class="email">
              {{Auth()->user()->created_at}}
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
               <th class="unit">SUM</th>
               <th class="total">TOTAL</th>
             </tr>
           </thead>
           <tbody>
             <tr>
               <td class="desc"><h3>Claims Filed</h3>
                 All Claims filed between date and Database
                </td>
                <td class="qty"></td>
                <td class="unit">
                  @if($claims)
                    {{$claims->count()}}
                  @endif
                </td>
               <td class="total">-</td>
             </tr>

             <tr>
               <td class="desc"><h3>Checks Paid</h3>
                 All checks paid between start and end date.
               </td>
               <td class="qty"></td>
               <td class="unit">
                 @if($checks)
                   {{$checks->count()}}
                 @endif
               </td>
               <td class="total">$3,200.00</td>
             </tr>
             <tr>
               <td class="desc"><h3>All Checks Paid</h3>
                 Every check paid from beginning to end.
               </td>
               <td class="qty"></td>
               <td class="unit">
                 @if($checks)
                   {{Auth()->user()->checks->count()}}
                 @endif
               </td>
               <td class="total">$3,200.00</td>
             </tr>
             <tr>
               <td class="desc"><h3>Search Engines Optimization</h3>Optimize the site for search engines (SEO)</td>
               <td class="qty"></td>
               <td class="unit">$40.00</td>
               <td class="total">$800.00</td>
             </tr>
           </tbody>
         </table>
       </div>
       @if($pending_claims)
         <div class="page">
           @include('reports.partials.claimsPending')
         </div>
       @endif
        @if($claims)
          <div class="page">
            @include('reports.partials.claimsFiled')
          </div>
        @endif

        @if($checks)
          <div class="page">
            @include('reports.partials.claimsPaid')

          </div>
        @endif
      </div>
    </div>
  </main>
@stop

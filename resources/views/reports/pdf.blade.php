
  <link rel="stylesheet" href="{{url('css/pdfs.css')}}" media="screen" title="no title" charset="utf-8">
  <body>
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
      </div>
    </header>
    <main>
      <div class="page">
        @include('reports.partials.summaryTable')
      </div>
        @if($pending_claims)
          <div class="page-break"></div>
          @include('reports.partials.claimsPending')
        @endif

        @if($claims)
          <div class="page-break"></div>
          @include('reports.partials.claimsFiled')
        @endif

        @if($checks && $checks->count() > 0)
          <div class="page-break"></div>
          @include('reports.partials.claimsPaid')
        @endif
      </div>
       </div>

    </main>
    <footer>
      Some sort of footer if needed.
    </footer>
  </body>
</html>

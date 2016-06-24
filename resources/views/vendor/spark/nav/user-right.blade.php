<!-- Right Side Of Navbar -->

<li>
  <a
    @if(Request::is('Data/*')) class="active" @endif
    href="{{url('Data')}}" data-toggle="dropdown">
      Events
  </a>
  <ul class="dropdown-menu" role="menu" aria-labelledby="">
    <li><a href="{{url('festivals')}}"><i class="fa fa-spinner"></i>Festivals</a></li>
  </ul>
</li>

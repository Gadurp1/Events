<ol class="breadcrumb" style="background:none" >
  <li>
    <i class="fa fa-home"></i>
    <a href="{{url('home')}}">Home</a>
  </li>
  <?php $link = url(''); ?>
  @for($i = 1; $i <= count(Request::segments()); $i++)
  <li>
    @if($i < count(Request::segments()) & $i > 0)
      <?php $link .= "/" . Request::segment($i); ?>
        <a href="<?= $link ?>">{{Request::segment($i)}}</a>
      @else {{Request::segment($i)}}
    @endif
  </li>
  @endfor
</ol>

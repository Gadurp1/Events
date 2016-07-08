<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta Information -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'CCC App Name')</title>
    <!-- Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,600' rel='stylesheet' type='text/css'>
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css' rel='stylesheet' type='text/css'>
    <!-- CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
<link rel="stylesheet" href="https://bootswatch.com/flatly/bootstrap.css">

    <link href="/css/app.css" rel="stylesheet">
    <!-- Animate.css -->
    <link rel="stylesheet" href="{{url('assets/flew/css/animate.css')}}">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="{{url('assets/flew/css/icomoon.css')}}">
    <!-- Bootstrap  -->
    <!-- Theme style  -->
    <link rel="stylesheet" href="{{url('assets/flew/css/style.css')}}">
    <!-- Flexslider  -->
    <link rel="stylesheet" href="{{url('assets/flew/css/flexslider.css')}}">
    <!-- Owl Carousel  -->
    <link rel="stylesheet" href="{{url('assets/flew/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/flew/css/owl.theme.default.min.css')}}">

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
    <script src="/js/sweetalert.min.js"></script>

    <!-- Scripts -->
    @yield('scripts', '')
    <!-- Global Spark Object -->
    <script>
        window.Spark = <?php echo json_encode(array_merge(
            Spark::scriptVariables(), []
        )); ?>
    </script>
</head>
<body class="with-navbar" v-cloak>
  @include('errors.list')

    <div id="spark-app">

        <!-- Navigation -->
        @if (Auth::check())
            @include('spark::nav.user')
        @else
            @include('spark::nav.guest')
        @endif

      	@if (Session::has('flash_message'))
      		<script>
      			swal({   title: "{{session('flash_message')}}",   text: "",   type: "s",   confirmButtonText: "Sounds Good" });
      		</script>
      	@endif
        <!-- Main Content -->
        <div class="" style="margin-top:-1em">

          @yield('content')
        </div>
        <!-- Application Level Modals -->
        @if (Auth::check())
            @include('spark::modals.notifications')
            @include('spark::modals.support')
            @include('spark::modals.session-expired')
        @endif


    </div>
</body>
<!-- JavaScript -->
<script src="/js/app.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.1/summernote.js"></script>

<script src="{{url('assets/flew/js/owl.carousel.min.js')}}"></script>
<!-- Flexslider -->
<script src="{{url('assets/flew/js/jquery.flexslider-min.js')}}"></script>

<!-- MAIN JS -->
<script src="{{url('assets/flew/js/main.js')}}"></script>

</html>

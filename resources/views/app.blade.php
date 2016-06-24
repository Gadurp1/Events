<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Sample 4</title>
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta name="apple-mobile-web-app-status-bar-style" content="black" />
        <link rel="shortcut icon" href="{{url('assets/flat-ui/images/favicon.ico')}}">
        <link rel="stylesheet" href="{{url('assets/flat-ui/bootstrap/css/bootstrap.css')}}">
        <link rel="stylesheet" href="{{url('assets/flat-ui/css/flat-ui.css')}}">
        <!-- Using only with Flat-UI (free)-->
        <link rel="stylesheet" href="{{url('assets/css/icon-font.css')}}">
        <!-- end -->
        <link rel="stylesheet" href="{{url('assets/css/style.css')}}">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.css">
<script src="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.js"></script>
    </head>

    <body>
        <div class="page-wrapper">
          <header class="header-10">
              <div class="container">
                  <div class="navbar col-sm-12" role="navigation">
                      <div class="navbar-header">
                          <button type="button" class="navbar-toggle"></button>
                          <a class="brand" href="#">Event.ly</a>
                       </div>
                      <div class="collapse navbar-collapse pull-right">
                          <ul class="nav pull-left">
                              <li class="active"><a href="{{url('festivals')}}">Festivals</a></li>
                              <li><a href="{{url('Events')}}">Venues</a></li>
                              <li><a href="#">Blog</a></li>
                          </ul>
                          <form class="navbar-form pull-left">
                              <a class="btn btn-info" href="{{url('festivals/create')}}">Create Event</a>
                          </form>
                      </div>
                  </div>
              </div>
          </header>
          @yield('content')
        </div>
        <br><br><br>
                          <!-- footer-3 -->
                          <footer class="footer-3">
                              <div class="container">
                                  <div class="row v-center">
                                      <div class="col-sm-2">
                                          <a class="brand" href="#">Startup</a>
                                      </div>
                                      <div class="col-sm-7">
                                          <div class="additional-links">
                                              Be sure to take a look to our <a href="#">Terms of Use</a> and <a href="#">Privacy Policy</a>
                                          </div>
                                      </div>
                                      <div class="col-sm-3">
                                          <h6>New York, NY</h6>
                                          <div class="address">
                                              62 West 55th Street, Suite 302<br>New York, NY, 10230
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </footer>
        </div>
        <script>
        var simplemde = new SimpleMDE({ element: document.getElementById("text") });
        </script>
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="{{url('assets/common-files/js/jquery-1.10.2.min.js')}}"></script>
        <script src="{{url('assets/flat-ui/js/bootstrap.min.js')}}"></script>
        <script src="{{url('assets/common-files/js/modernizr.custom.js')}}"></script>
        <script src="{{url('assets/common-files/js/jquery.scrollTo-1.4.3.1-min.js')}}"></script>
        <script src="{{url('assets/common-files/js/jquery.parallax.min.js')}}"></script>
        <script src="{{url('assets/common-files/js/startup-kit.js')}}"></script>
        <script src="{{url('assets/js/jquery.backgroundvideo.min.js')}}"></script>
        <script src="{{url('assets/js/script.js')}}"></script>
    </body>
</html>

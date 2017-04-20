<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Events Management System</title>

              <!-- Animate.css -->
      	<link rel="stylesheet" href="{{ url ('css/animate.css')}}">
      	<!-- Icomoon Icon Fonts-->
      	<link rel="stylesheet" href="{{ url ('css/icomoon.css')}}">
      	<!-- Magnific Popup-->
      	<link rel="stylesheet" href="{{ url ('css/magnific-popup.css')}}">
      	<!-- Owl Carousel -->
      	<link rel="stylesheet" href="{{ url ('css/owl.carousel.min.css')}}">
      	<link rel="stylesheet" href="{{ url ('css/owl.theme.default.min.css')}}">
      	<!-- Bootstrap  -->
      	<link rel="stylesheet" href="{{ url ('css/bootstrap.css')}}">
        <link rel="stylesheet" href="{{ url ('/css/font-awesome.min.css')}}" media="screen" title="no title">

        <!-- Google Font -->
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Raleway">

      	<!-- Cards -->
      	<link rel="stylesheet" href="{{ url ('css/cards.css')}}">

        <link rel="shortcut icon" href="imondcorp.ico">

    </head>
    <div id="fh5co-page">

      <nav class="fh5co-nav-style-1" role="navigation" data-offcanvass-position="fh5co-offcanvass-left">
  			<div class="container">
          <div class="row">

          </div>

          <div class="row">
            <div class="col-lg-12">
      				<div class="solidline">
      				</div>
      			</div>
          </div>

          <div class="row">

            <div class="col-lg-6 col-md-5 col-sm-5 text-center fh5co-link-wrap">
              <ul data-offcanvass="yes">
                <li><a href="/bookings/approved" class="call-to-action">Approved Bookings</a></li>
                <li><a href="/system/bookings" class="call-to-action">Pending Bookings</a></li>
              </ul>
            </div>
            <div class="col-md-6 pull-right text-right fh5co-link-wrap">
              <ul class="nav navbar-nav navbar-right">
                  <!-- Authentication Links -->
                  @if (Auth::guest())
                      <li><a href="{{ url('/login') }}">Login</a></li>
                      <li><a href="{{ url('/register') }}">Register</a></li>
                  @else
                      <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                              {{ Auth::user()->name }} <span class="caret"></span>
                          </a>

                          <ul class="dropdown-menu" role="menu">
                              <li>
                                  <a href="{{ url('/logout') }}"
                                      onclick="event.preventDefault();
                                               document.getElementById('logout-form').submit();">
                                      Logout
                                  </a>

                                  <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                      {{ csrf_field() }}
                                  </form>
                              </li>
                          </ul>
                      </li>
                  @endif
              </ul>
            </div>

          </div>


  			</div>
  		</nav>

  		<div class="fh5co-cover fh5co-cover-style-1 js-full-height imond2" data-stellar-background-ratio="0.5" data-next="yes">
  		  	<span class="scroll-btn wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.4s">
  				<a href="#">
  					<span class="mouse"><span></span></span>
  				</a>
  			</span>
  			<div class="imond-overlay"></div>
  			<div class="fh5co-cover-text">
  				<div class="container">
  					<div class="row">

              <div class="col-md-12  full-height js-full-height text-center">
  							<div class="fh5co-cover-intro">
  								@yield('content')
  							</div>
  						</div>

  						</div>
  					</div>
  				</div>
  			</div>
			</div>
		<!-- END footer -->

      <!-- jQuery -->
	<script src="{{ url ('js/jquery.min.js')}}"></script>
	<!-- jQuery Easing -->
	<script src="{{ url ('js/jquery.easing.1.3.js')}}"></script>
	<!-- Bootstrap -->
	<script src="{{ url ('js/bootstrap.min.js')}}"></script>
	<!-- Waypoints -->
   <script src="{{ url ('js/jquery.waypoints.min.js')}}"></script>
	<!-- Owl Carousel -->
	<script src="{{ url ('js/owl.carousel.min.js')}}"></script>
	<!-- Magnific Popup -->
	<script src="{{ url ('js/jquery.magnific-popup.min.js')}}"></script>
	<!-- Stellar -->
	<script src="{{ url ('js/jquery.stellar.min.js')}}"></script>
	<!-- countTo -->
	<script src="{{ url ('js/jquery.countTo.js')}}"></script>
	<!-- WOW -->
	<script src="{{ url ('js/wow.min.js')}}"></script>
	<script>
		new WOW().init();
	</script>
	<!-- Main -->
	<script src="{{ url ('js/main.js')}}"></script>

    </body>
</html>

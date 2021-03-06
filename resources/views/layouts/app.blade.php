<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('assets/css/dark.css') }}" type="text/css" />

	<!-- Travel Demo Specific Stylesheet -->
	<link rel="stylesheet" href="{{ asset('assets/demos/travel/travel.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('assets/demos/travel/css/datepicker.css') }}" type="text/css" />
	<!-- / -->

	<link rel="stylesheet" href="{{ asset('assets/css/font-icons.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('assets/css/font-awesome.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}" type="text/css" />

	<link rel="stylesheet" href="{{ asset('assets/css/components/bs-select.css') }}" type="text/css">
	<link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<!--[if lt IE 9]>
		<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
	<![endif]-->
	{{-- <link rel="stylesheet" href="{{ asset('assets/css/colors.php?color=AC4147') }}" type="text/css" /> --}}
	<link rel="stylesheet" href="{{ asset('assets/css/colors.php?color=398bf7') }}" type="text/css" />

	<!-- Document Title
	============================================= -->
	<title>Ticketing | System</title>
	@yield('style')
</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Top Bar
		============================================= -->
		<div id="top-bar" class="transparent-topbar dark">

			<div class="container clearfix">

				<div class="col_half nobottommargin clearfix">

					<!-- Top Links
					============================================= -->
					<div class="top-links">
						<ul>
							<li><a href="index.html">Home</a></li>
							<li><a href="faqs.html">FAQs</a></li>
							<li><a href="contact.html">Contact</a></li>
							<li><a href="#">USD</a>
								<ul>
									<li><a href="#">EUR</a></li>
									<li><a href="#">AUD</a></li>
									<li><a href="#">GBP</a></li>
								</ul>
							</li>
						</ul>
					</div><!-- .top-links end -->

				</div>

				<div class="col_half fright col_last clearfix nobottommargin">

					<!-- Top Social
					============================================= -->
					<div id="top-social">
						<ul>
							<li><a href="#" class="si-facebook"><span class="ts-icon"><i class="icon-facebook"></i></span><span class="ts-text">Facebook</span></a></li>
							<li><a href="#" class="si-twitter"><span class="ts-icon"><i class="icon-twitter"></i></span><span class="ts-text">Twitter</span></a></li>
							<li><a href="#" class="si-pinterest"><span class="ts-icon"><i class="icon-pinterest"></i></span><span class="ts-text">Pinterest</span></a></li>
							<li><a href="#" class="si-instagram"><span class="ts-icon"><i class="icon-instagram2"></i></span><span class="ts-text">Instagram</span></a></li>
							<li><a href="tel:+91.11.85412542" class="si-call"><span class="ts-icon"><i class="icon-call"></i></span><span class="ts-text">+91.11.85412542</span></a></li>
							<li><a href="mailto:info@canvas.com" class="si-email3"><span class="ts-icon"><i class="icon-envelope-alt"></i></span><span class="ts-text">info@canvas.com</span></a></li>
						</ul>
					</div><!-- #top-social end -->

				</div>

			</div>

		</div><!-- #top-bar end -->

		<!-- Header
		============================================= -->
		<header id="header" class="transparent-header dark" data-sticky-class="not-dark" data-responsive-class="not-dark">

			<div id="header-wrap">

				<div class="container clearfix">

					<div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

					<!-- Logo
					============================================= -->
					<div id="logo">
						<a href="index.html" class="standard-logo" data-dark-logo="{{asset('assets/images/logo-dark.png')}}"><img src="{{asset('assets/images/logo.png')}}" alt="Canvas Logo"></a>
						<a href="index.html" class="retina-logo" data-dark-logo="{{asset('assets/images/logo-dark@2x.png')}}"><img src="{{asset('assets/images/logo@2x.png')}}" alt="Canvas Logo"></a>
					</div><!-- #logo end -->

					<!-- Primary Navigation
					============================================= -->
					<nav id="primary-menu" class="style-4">

						<ul>
							<li class="current"><a href="index.html"><div><i class="icon-home2"></i>Home</div></a>	</li>
							<li><a href="#"><div><i class="fa fa-ship" style="top: 4px;"></i>Trips</div></a></li>
							<li><a href="#"><div><i class="icon-building"></i>Hotels</div></a></li>
							<li><a href="#"><div><i class="icon-gift"></i>Holidays</div></a></li>
							<li><a href="#"><div><i class="icon-pencil2"></i>Blog</div></a></li>
							<li><a href="#"><div><i class="icon-phone3"></i>1800 105 2541</div></a></li>
						</ul>

					</nav><!-- #primary-menu end -->

				</div>

			</div>

		</header><!-- #header end -->

		@yield('content')


		<!-- Footer
		============================================= -->
		<footer id="footer" class="dark" style="background-color: #222;">

			<div class="container">

				<!-- Footer Widgets
				============================================= -->
				<div class="footer-widgets-wrap clearfix">

					<div class="col_one_third">

						<div class="widget clear-bottommargin-sm clearfix">

							<div class="row">

								<div class="col-md-12 bottommargin-sm">
									<div class="footer-big-contacts">
										<span>Call Us:</span>
										(91) 22 84551445
									</div>
								</div>

								<div class="col-md-12 bottommargin-sm">
									<div class="footer-big-contacts">
										<span>Send an Enquiry:</span>
										travel@canvas.com
									</div>
								</div>

							</div>

						</div>

						<div class="widget subscribe-widget clearfix">
							<div class="row">

								<div class="col-md-6 clearfix bottommargin-sm">
									<a href="#" class="social-icon si-dark si-colored si-facebook nobottommargin" style="margin-right: 10px;">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
									<a href="#"><small style="display: block; margin-top: 3px;"><strong>Like us</strong><br>on Facebook</small></a>
								</div>
								<div class="col-md-6 clearfix">
									<a href="#" class="social-icon si-dark si-colored si-rss nobottommargin" style="margin-right: 10px;">
										<i class="icon-rss"></i>
										<i class="icon-rss"></i>
									</a>
									<a href="#"><small style="display: block; margin-top: 3px;"><strong>Subscribe</strong><br>to RSS Feeds</small></a>
								</div>

							</div>
						</div>

					</div>

					<div class="col_one_third">

						<div class="widget clearfix">
							<h4>Featured Packages</h4>

							<div id="post-list-footer">
								<div class="spost clearfix">
									<div class="entry-image">
										<a href="#"><img src="{{asset('assets/images/small/1.jpg')}}" alt="Package"></a>
									</div>
									<div class="entry-c">
										<div class="entry-title">
											<h4><a href="#">7 Nights/8 Days Europe</a></h4>
										</div>
										<ul class="entry-meta">
											<li><strong>$599</strong> onwards</li>
										</ul>
									</div>
								</div>

								<div class="spost clearfix">
									<div class="entry-image">
										<a href="#"><img src="{{asset('assets/images/small/2.jpg')}}" alt="Package"></a>
									</div>
									<div class="entry-c">
										<div class="entry-title">
											<h4><a href="#">4 Nights/5 Days Thailand</a></h4>
										</div>
										<ul class="entry-meta">
											<li><strong>$399</strong> onwards</li>
										</ul>
									</div>
								</div>

								<div class="spost clearfix">
									<div class="entry-image">
										<a href="#"><img src="{{asset('assets/images/small/3.jpg')}}" alt="Package"></a>
									</div>
									<div class="entry-c">
										<div class="entry-title">
											<h4><a href="#">11 Nights/12 Days America</a></h4>
										</div>
										<ul class="entry-meta">
											<li><strong>$1299</strong> onwards</li>
										</ul>
									</div>
								</div>
							</div>
						</div>

					</div>

					<div class="col_one_third col_last">

						<div class="widget widget_links clearfix">

							<h4>Popular Destinations</h4>

							<div class="row clearfix">
								<div class="col-xs-6">
									<ul>
										<li><a href="#">Thailand</a></li>
										<li><a href="#">Indonesia</a></li>
										<li><a href="#">Italy</a></li>
										<li><a href="#">Spain</a></li>
									</ul>
								</div>
								<div class="col-xs-6">
									<ul>
										<li><a href="#">India</a></li>
										<li><a href="#">France</a></li>
										<li><a href="#">Philippines</a></li>
										<li><a href="#">New Zealand</a></li>
									</ul>
								</div>
							</div>

						</div>

						<div class="widget subscribe-widget clearfix">
							<h5>Get Latest <strong>Offers</strong> &amp; <strong>Coupons</strong> by Email:</h5>
							<div class="widget-subscribe-form-result"></div>
							<form id="widget-subscribe-form" action="include/subscribe.php" role="form" method="post" class="nobottommargin">
								<div class="input-group divcenter">
									<span class="input-group-addon"><i class="icon-email2"></i></span>
									<input type="email" id="widget-subscribe-form-email" name="widget-subscribe-form-email" class="form-control required email" placeholder="Enter your Email">
									<span class="input-group-btn">
										<button class="btn btn-danger bgcolor" type="submit">Subscribe</button>
									</span>
								</div>
							</form>
						</div>

					</div>

				</div><!-- .footer-widgets-wrap end -->

			</div>

			<!-- Copyrights
			============================================= -->
			<div id="copyrights">

				<div class="container clearfix">

					<div class="col_half">
						Copyrights &copy; 2014 All Rights Reserved by Canvas Inc.<br>
						<div class="copyright-links"><a href="#">Terms of Use</a> / <a href="#">Privacy Policy</a></div>
					</div>

					<div class="col_half col_last tright">
						<div class="fright clearfix">
							<a href="#" class="social-icon si-small si-borderless si-facebook">
								<i class="icon-facebook"></i>
								<i class="icon-facebook"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-twitter">
								<i class="icon-twitter"></i>
								<i class="icon-twitter"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-gplus">
								<i class="icon-gplus"></i>
								<i class="icon-gplus"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-pinterest">
								<i class="icon-pinterest"></i>
								<i class="icon-pinterest"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-vimeo">
								<i class="icon-vimeo"></i>
								<i class="icon-vimeo"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-github">
								<i class="icon-github"></i>
								<i class="icon-github"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-yahoo">
								<i class="icon-yahoo"></i>
								<i class="icon-yahoo"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-linkedin">
								<i class="icon-linkedin"></i>
								<i class="icon-linkedin"></i>
							</a>
						</div>

						<div class="clear"></div>

						<i class="icon-envelope2"></i> info@canvas.com <span class="middot">&middot;</span> <i class="icon-headphones"></i> +91-11-6541-6369 <span class="middot">&middot;</span> <i class="icon-skype2"></i> CanvasOnSkype
					</div>

				</div>

			</div><!-- #copyrights end -->

		</footer><!-- #footer end -->

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- External JavaScripts
	============================================= -->
	<script type="text/javascript" src="{{ asset('assets/js/jquery.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/js/jquery-1.12.4.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/js/plugins.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/js/components/bs-select.js') }}"></script>

	<!-- Travel Demo Specific Script -->
	<script type="text/javascript" src="{{ asset('assets/demos/travel/js/datepicker.js') }}"></script>
	<!-- / -->

	<script type="text/javascript" src="https://maps.google.com/maps/api/js"></script>
	<script type="text/javascript" src="{{ asset('assets/js/jquery.gmap.js') }}"></script>

	<!-- Footer Scripts
	============================================= -->
	<script type="text/javascript" src="{{ asset('assets/js/functions.js') }}"></script>

	@yield('script')
</body>
</html>
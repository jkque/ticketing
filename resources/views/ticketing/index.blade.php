@extends('layouts.app')
@section('style')
<style>
	
</style>
@endsection

@section('content')

	<section id="slider" class="slider-parallax swiper_wrapper full-screen clearfix">

		<div class="slider-parallax-inner">

			<div class="fslider" data-speed="3000" data-pause="7500" data-animation="fade" data-arrows="false" data-pagi="false" style="position: absolute; width: 100%; height: 100%; top: 0; left: 0; background-color: #333;">
				<div class="flexslider" style="height: 100% !important;">
					<div class="slider-wrap" style="height: inherit;">
						<div class="slide" style="background: url('assets/images/slider/4.jpg') center center; background-size: cover; height: 100% !important;"></div>
						<div class="slide" style="background: url('assets/images/slider/5.jpg') center center; background-size: cover; height: 100% !important;"></div>
						<div class="slide" style="background: url('assets/images/slider/6.jpg') center center; background-size: cover; height: 100% !important;"></div>
					</div>
				</div>
			</div>

			<div id="travel-slider-overlay">

				<div class="vertical-middle">

					<div class="container clearfix">

						<div class="tabs travel-organiser-tabs clearfix">

							<ul class="tab-nav clearfix">
								<li><a href="#tab-flights"><i class="fa fa-ship"></i><span class="hidden-xs">Trips</span></a></li>
								<li><a href="#tab-hotels"><i class="icon-building"></i><span class="hidden-xs">Hotels</span></a></li>
								<li><a href="#tab-flights-hotels"><span class="visible-xs"><i class="fa fa-ship"></i> + <i class="icon-building"></i></span><span class="hidden-xs">Trips + Hotels<span class="label label-danger">Save</span></span></a></li>
								<li><a href="#tab-holidays"><i class="icon-gift"></i><span class="hidden-xs">Holidays</span></a></li>
							</ul>

							<div class="tab-container">

								<div class="tab-content clearfix" id="tab-flights">
									<div class="heading-block nobottomborder bottommargin-sm clearfix">
										<h4 class="fleft">Book your Seats</h4>
										<div class="clear"></div>
									</div>
									<form action="#" method="post" class="nobottommargin">
										<div class="row">
											<div class="col-sm-6 col-xs-12 bottommargin-sm">
												<label for="">From</label>
												<input type="text" value="" class="sm-form-control" placeholder="Eg. Cebu City">
											</div>
											<div class="col-sm-6 col-xs-12 bottommargin-sm">
												<label for="">To</label>
												<input type="text" value="" class="sm-form-control" placeholder="Eg. Davao City">
											</div>
											<div class="clear"></div>
											<div class="input-daterange travel-date-group col-sm-9 bottommargin-sm">
												<div class="row">
													<div class="col-sm-6 col-xs-6">
														<label for="">Departure</label>
														<input type="text" value="" class="sm-form-control tleft" name="start" placeholder="MM/DD/YYYY">
													</div>
													<div class="col-sm-6 col-xs-6">
														<label for="">Accomodations</label>
														<select class="selectpicker">
															<option>-- Select Accomoditions --</option>
															<option>Economy</option>
															<option>Tourist</option>
														</select>
													</div>
												</div>
											</div>
											<div class="col-sm-3 bottommargin-sm">
												<label for="">Adults</label>
												<input type="number" min="1" max="10" value="" class="sm-form-control" name="end" placeholder="2">
											</div>
											<div class="col-sm-12">
												<button class="button button-3d nomargin rightmargin-sm">Search Seats</button>
												<a href="#" class="more-link fright" style="margin-top: 9px;">Advanced Search</a>
											</div>
										</div>
									</form>
								</div>
								<div class="tab-content clearfix" id="tab-hotels">
									<div class="heading-block nobottomborder bottommargin-sm clearfix">
										<h4 class="fleft">Book your Hotels</h4>
										<div class="btn-group fright">
											<button type="button" class="btn btn-danger btn-sm bgcolor border-color">Domestic</button>
											<button type="button" class="btn btn-default btn-sm">International</button>
										</div>
										<div class="clear"></div>
									</div>
									<form action="#" method="post" class="nobottommargin">
										<div class="row">
											<div class="col-sm-12 bottommargin-sm">
												<label for="">City</label>
												<input type="text" value="" class="sm-form-control" placeholder="Eg. Melbourne, Australia">
											</div>
											<div class="input-daterange travel-date-group col-sm-9 bottommargin-sm">
												<div class="row">
													<div class="col-sm-6 col-xs-6">
														<label for="">Departure</label>
														<input type="text" value="" class="sm-form-control tleft" name="start" placeholder="MM/DD/YYYY">
													</div>
													<div class="col-sm-6 col-xs-6">
														<label for="">Return</label>
														<input type="text" value="" class="sm-form-control tleft" name="end" placeholder="MM/DD/YYYY">
													</div>
												</div>
											</div>
											<div class="col-sm-3 bottommargin-sm">
												<label for="">Rooms</label>
												<input type="number" min="1" max="10" value="" class="sm-form-control" name="end" placeholder="2">
											</div>
											<div class="col-sm-12">
												<button class="button button-3d nomargin rightmargin-sm">Search Hotels</button>
												<a href="#" class="more-link fright" style="margin-top: 9px;">Popular Hotels</a>
											</div>
										</div>
									</form>
								</div>
								<div class="tab-content clearfix" id="tab-flights-hotels">
									<div class="heading-block nobottomborder bottommargin-sm clearfix">
										<h4 class="fleft">Book Trips &amp; Hotels</h4>
										<div class="btn-group fright">
											<button type="button" class="btn btn-danger btn-sm bgcolor border-color">Domestic</button>
											<button type="button" class="btn btn-default btn-sm">International</button>
										</div>
										<div class="clear"></div>
									</div>
									<form action="#" method="post" class="nobottommargin">
										<div class="row">
											<div class="col-sm-9 bottommargin-sm">
												<div class="row">
													<div class="col-sm-6 col-xs-6">
														<label for="">From</label>
														<input type="text" value="" class="sm-form-control" placeholder="Eg. Melbourne, Australia">
													</div>
													<div class="col-sm-6 col-xs-6">
														<label for="">Destination</label>
														<input type="text" value="" class="sm-form-control" placeholder="Eg. New York, United States">
													</div>
												</div>
											</div>
											<div class="col-sm-3 bottommargin-sm">
												<label for="">Adults</label>
												<input type="number" min="1" max="10" value="" class="sm-form-control" name="end" placeholder="2">
											</div>
											<div class="input-daterange travel-date-group col-sm-9 bottommargin-sm">
												<div class="row">
													<div class="col-sm-6 col-xs-6">
														<label for="">Departure</label>
														<input type="text" value="" class="sm-form-control tleft" name="start" placeholder="MM/DD/YYYY">
													</div>
													<div class="col-sm-6 col-xs-6">
														<label for="">Return</label>
														<input type="text" value="" class="sm-form-control tleft" name="end" placeholder="MM/DD/YYYY">
													</div>
												</div>
											</div>
											<div class="col-sm-3  bottommargin-sm">
												<label for="">Rooms</label>
												<input type="number" min="1" max="10" value="" class="sm-form-control" name="end" placeholder="2">
											</div>
											<div class="col-sm-12">
												<button class="button button-3d nomargin rightmargin-sm">Search Trips + Hotels</button>
												<a href="#" class="more-link fright" style="margin-top: 9px;">Holiday Packages</a>
											</div>
										</div>
									</form>
								</div>
								<div class="tab-content clearfix" id="tab-holidays">
									<div class="heading-block nobottomborder bottommargin-sm clearfix">
										<h4>Search for Holiday Packages</h4>
									</div>
									<form action="#" method="post" class="nobottommargin">
										<div class="row">
											<div class="col-sm-6 col-xs-12 bottommargin-sm">
												<label for="">From</label>
												<input type="text" value="" class="sm-form-control" placeholder="Eg. Melbourne, Australia">
											</div>
											<div class="col-sm-6 col-xs-12 bottommargin-sm">
												<label for="">Destination</label>
												<input type="text" value="" class="sm-form-control" placeholder="Eg. Europe">
											</div>
											<div class="clear"></div>
											<div class="col-sm-9 bottommargin-sm">
												<div class="row">
													<div class="col-sm-6 col-xs-6">
														<label for="">Month</label>
														<select name="month" class="sm-form-control">
															<option value="">-- Select Month --</option>
															<option value="November 2014">November 2014</option>
															<option value="December 2014">December 2014</option>
															<option value="January 2015">January 2015</option>
															<option value="February 2015">February 2015</option>
															<option value="March 2015">March 2015</option>
															<option value="April 2015">April 2015</option>
															<option value="May 2015">May 2015</option>
															<option value="June 2015">June 2015</option>
														</select>
													</div>
													<div class="col-sm-6 col-xs-6">
														<label for="">Budget</label>
														<select name="budget" class="sm-form-control">
															<option value="">-- Select Budget --</option>
															<option value="November 2014">$99 to $199</option>
															<option value="December 2014">$200 to $499</option>
															<option value="January 2015">$500 to $999</option>
															<option value="February 2015">$1000 to $1999</option>
															<option value="March 2015">Above $2000</option>
														</select>
													</div>
												</div>
											</div>
											<div class="col-sm-3 bottommargin-sm">
												<label for="">Adults</label>
												<input type="number" min="1" max="10" value="" class="sm-form-control" name="end" placeholder="2">
											</div>
											<div class="col-sm-12">
												<button class="button button-3d nomargin rightmargin-sm">Search Trips</button>
												<a href="#" class="more-link fright" style="margin-top: 9px;">Advanced Search</a>
											</div>
										</div>
									</form>
								</div>

							</div>

						</div>

					</div>

				</div>

			</div>

		</div>

	</section>

	<!-- Content
	============================================= -->
	<section id="content">

		<div class="content-wrap">

			<div class="section bottommargin-lg header-stick">
				<div class="container clear-bottommargin clearfix">

				<div class="row topmargin-sm bottommargin-sm">

					<div class="col-md-3 col-sm-6 bottommargin">
						<i class="i-plain color i-large icon-line2-plane inline-block" style="margin-bottom: 15px;"></i>
						<div class="heading-block nobottomborder nobottommargin">
							<span class="before-heading">Easy &amp; Cheap.</span>
							<h4>Search Trips</h4>
						</div>
					</div>

					<div class="col-md-3 col-sm-6 bottommargin">
						<i class="i-plain color i-large icon-line2-key inline-block" style="margin-bottom: 15px;"></i>
						<div class="heading-block nobottomborder nobottommargin">
							<span class="before-heading">Over 15000+ Places.</span>
							<h4>Get Hotel Deals</h4>
						</div>
					</div>

					<div class="col-md-3 col-sm-6 bottommargin">
						<i class="i-plain color i-large icon-line2-present inline-block" style="margin-bottom: 15px;"></i>
						<div class="heading-block nobottomborder nobottommargin">
							<span class="before-heading">Explore Destinations.</span>
							<h4>Holiday Packages</h4>
						</div>
					</div>

					<div class="col-md-3 col-sm-6 bottommargin">
						<i class="i-plain color i-large icon-line2-earphones-alt inline-block" style="margin-bottom: 15px;"></i>
						<div class="heading-block nobottomborder nobottommargin">
							<span class="before-heading">24x7 Dedicated Helpline.</span>
							<h4>1800 105 2541</h4>
						</div>
					</div>

				</div>

			</div>

		</div>

			<div class="container clearfix">

				<div class="heading-block center nobottomborder">
					<span class="before-heading color">What are you in the Mood for.?</span>
					<h2>Tailor made Packages for you</h2>
				</div>

			</div>

			<div id="portfolio" class="portfolio grid-container portfolio-nomargin portfolio-full portfolio-overlay-open clearfix">

				<article class="portfolio-item pf-media pf-icons">
					<div class="portfolio-image">
						<a href="portfolio-single.html">
							<img src="{{asset('assets/images/packages/1.jpg')}}" alt="Beach Activities">
							<div class="portfolio-overlay">
								<div class="portfolio-desc">
									<h3>Beach Activities</h3>
								</div>
							</div>
						</a>
					</div>
				</article>

				<article class="portfolio-item pf-illustrations">
					<div class="portfolio-image">
						<a href="portfolio-single.html">
							<img src="{{asset('assets/images/packages/2.jpg')}}" alt="Romantic Getaways">
							<div class="portfolio-overlay">
								<div class="portfolio-desc">
									<h3>Romantic Getaways</h3>
								</div>
							</div>
						</a>
					</div>
				</article>

				<article class="portfolio-item pf-graphics pf-uielements">
					<div class="portfolio-image">
						<a href="#">
							<img src="{{asset('assets/images/packages/3.jpg')}}" alt="Mountain Madness">
							<div class="portfolio-overlay">
								<div class="portfolio-desc">
									<h3>Mountain Madness</h3>
								</div>
							</div>
						</a>
					</div>
				</article>

				<article class="portfolio-item pf-icons pf-illustrations">
					<div class="portfolio-image">
						<a href="portfolio-single.html">
							<img src="{{asset('assets/images/packages/4.jpg')}}" alt="Active Explorer">
							<div class="portfolio-overlay">
								<div class="portfolio-desc">
									<h3>Active Explorer</h3>
								</div>
							</div>
						</a>
					</div>
				</article>

				<article class="portfolio-item pf-uielements pf-media">
					<div class="portfolio-image">
						<a href="portfolio-single.html">
							<img src="{{asset('assets/images/packages/5.jpg')}}" alt="Icy Challenge">
							<div class="portfolio-overlay">
								<div class="portfolio-desc">
									<h3>Icy Challenge</h3>
								</div>
							</div>
						</a>
					</div>
				</article>

				<article class="portfolio-item pf-graphics pf-illustrations">
					<div class="portfolio-image">
						<a href="portfolio-single.html">
							<img src="{{asset('assets/images/packages/6.jpg')}}" alt="Hill Trekking">
							<div class="portfolio-overlay" data-lightbox="gallery">
								<div class="portfolio-desc">
									<h3>Hill Trekking</h3>
								</div>
							</div>
						</a>
					</div>
				</article>

				<article class="portfolio-item pf-uielements pf-icons">
					<div class="portfolio-image">
						<a href="portfolio-single-video.html">
							<img src="{{asset('assets/images/packages/7.jpg')}}" alt="Forest Camping">
							<div class="portfolio-overlay">
								<div class="portfolio-desc">
									<h3>Forest Camping</h3>
								</div>
							</div>
						</a>
					</div>
				</article>

				<article class="portfolio-item pf-graphics">
					<div class="portfolio-image">
						<a href="portfolio-single.html">
							<img src="{{asset('assets/images/packages/8.jpg')}}" alt="River Rafting">
							<div class="portfolio-overlay">
								<div class="portfolio-desc">
									<h3>River Rafting</h3>
								</div>
							</div>
						</a>
					</div>
				</article>

			</div>


			<div class="common-height clearfix">

				<div id="popular-dest-map" class="col-md-8 col-padding gmap hidden-xs"></div>

				<div class="col-md-4 col-padding" style="background-color: #F9F9F9;">
					<div class="max-height clearfix">
						<div class="heading-block nobottommargin">
							<h4>Popular Destinations</h4>
						</div>
						<div class="spost col-md-12 col-sm-6 noborder noleftpadding clearfix">
							<div class="entry-image">
								<a href="#"><img src="{{asset('assets/images/small/1.jpg')}}" alt=""></a>
							</div>
							<div class="entry-c">
								<div class="entry-title">
									<h4><a href="#">7 Nights/8 Days Europe</a></h4>
								</div>
								<ul class="entry-meta">
									<li><span class="color">$599</span> onwards</li>
								</ul>
							</div>
						</div>
						<div class="spost col-md-12 col-sm-6 noborder noleftpadding clearfix">
							<div class="entry-image">
								<a href="#"><img src="{{asset('assets/images/small/2.jpg')}}" alt=""></a>
							</div>
							<div class="entry-c">
								<div class="entry-title">
									<h4><a href="#">4 Nights/5 Days Thailand</a></h4>
								</div>
								<ul class="entry-meta">
									<li><span class="color">$399</span> onwards</li>
								</ul>
							</div>
						</div>
						<div class="spost col-md-12 col-sm-6 noborder noleftpadding clearfix">
							<div class="entry-image">
								<a href="#"><img src="{{asset('assets/images/small/3.jpg')}}" alt=""></a>
							</div>
							<div class="entry-c">
								<div class="entry-title">
									<h4><a href="#">11 Nights/12 Days America</a></h4>
								</div>
								<ul class="entry-meta">
									<li><span class="color">$1299</span> onwards</li>
								</ul>
							</div>
						</div>
						<div class="spost col-md-12 col-sm-6 noborder noleftpadding clearfix">
							<div class="entry-image">
								<a href="#"><img src="{{asset('assets/images/small/4.jpg')}}" alt=""></a>
							</div>
							<div class="entry-c">
								<div class="entry-title">
									<h4><a href="#">14 Nights/15 Days New Zealand</a></h4>
								</div>
								<ul class="entry-meta">
									<li><span class="color">$1999</span> onwards</li>
								</ul>
							</div>
						</div>	
					</div>
				</div>


			</div>

			<a href="#" class="button button-full button-dark center bottommargin-lg">
				<div class="container clearfix">
					Can't find your Favorite Package? <strong>Browse Packages</strong> <i class="icon-caret-right" style="top:4px;"></i>
				</div>
			</a>

			<div class="container clear-bottommargin clearfix">

				<div class="row clearfix">

					<div class="heading-block center">
						<h2>Latest from our Blog</h2>
						<span>Stay in Touch with the Latest Travel Trends &amp; Destination News</span>
					</div>

					<div class="ipost col-sm-6 bottommargin clearfix">
						<div class="row">
							<div class="col-md-6">
								<div class="entry-image nobottommargin">
									<a href="#"><img src="{{asset('assets/images/blog/1.jpg')}}" alt="Paris"></a>
								</div>
							</div>
							<div class="col-md-6" style="margin-top: 20px;">
								<span class="before-heading">Sightseeing</span>
								<div class="entry-title">
									<h3><a href="#">Things to do in Bangkok for free</a></h3>
								</div>
								<ul class="entry-meta clearfix">
									<li><i class="icon-calendar3"></i> 16th February</li>
									<li><a href="#"><i class="icon-comments"></i> 19</a></li>
								</ul>
								<div class="entry-content">
									<a href="#" class="more-link">Read more</a>
								</div>
							</div>
						</div>
					</div>

					<div class="ipost col-sm-6 bottommargin clearfix">
						<div class="row">
							<div class="col-md-6">
								<div class="entry-image nobottommargin">
									<a href="#"><img src="{{asset('assets/images/blog/2.jpg')}}" alt="Paris"></a>
								</div>
							</div>
							<div class="col-md-6" style="margin-top: 20px;">
								<span class="before-heading">Nightlife</span>
								<div class="entry-title">
									<h3><a href="#">Nightclubs to check out in Kuala Lumpur</a></h3>
								</div>
								<ul class="entry-meta clearfix">
									<li><i class="icon-calendar3"></i> 16th February</li>
									<li><a href="#"><i class="icon-comments"></i> 19</a></li>
								</ul>
								<div class="entry-content">
									<a href="#" class="more-link">Read more</a>
								</div>
							</div>
						</div>
					</div>

					<div class="ipost col-sm-6 bottommargin clearfix">
						<div class="row">
							<div class="col-md-6">
								<div class="entry-image nobottommargin">
									<a href="#"><img src="{{asset('assets/images/blog/3.jpg')}}" alt="Paris"></a>
								</div>
							</div>
							<div class="col-md-6" style="margin-top: 20px;">
								<span class="before-heading">Hotels</span>
								<div class="entry-title">
									<h3><a href="#">Prague hotels for every kind of traveller</a></h3>
								</div>
								<ul class="entry-meta clearfix">
									<li><i class="icon-calendar3"></i> 16th February</li>
									<li><a href="#"><i class="icon-comments"></i> 19</a></li>
								</ul>
								<div class="entry-content">
									<a href="#" class="more-link">Read more</a>
								</div>
							</div>
						</div>
					</div>

					<div class="ipost col-sm-6 bottommargin clearfix">
						<div class="row">
							<div class="col-md-6">
								<div class="entry-image nobottommargin">
									<a href="#"><img src="{{asset('assets/images/blog/4.jpg')}}" alt="Paris"></a>
								</div>
							</div>
							<div class="col-md-6" style="margin-top: 20px;">
								<span class="before-heading">Eating Out</span>
								<div class="entry-title">
									<h3><a href="#">Shanghai restaurants for the discerning diner</a></h3>
								</div>
								<ul class="entry-meta clearfix">
									<li><i class="icon-calendar3"></i> 16th February</li>
									<li><a href="#"><i class="icon-comments"></i> 19</a></li>
								</ul>
								<div class="entry-content">
									<a href="#" class="more-link">Read more</a>
								</div>
							</div>
						</div>
					</div>

				</div>

			</div>

			<div class="section topmargin-lg footer-stick">
				<div class="container center clearfix">

					<div class="heading-block bottommargin-sm nobottomborder">
						<span class="before-heading color">Create a Custom Plan based on your Taste</span>
						<h2>Start making your Travel Plans</h2>
					</div>

					<p class="lead">Educate, aid, criteria catalyst John Lennon. Life-saving diversity necessities elevate worldwide carbon rights empowerment. Pursue these aspirations leverage, accessibility UNICEF, reduce child mortality collaborative cities safeguards. Informal economies non-partisan; evolution transformative climate change local benefit.</p>

					<a href="#" class="button button-rounded button-reveal tright button-xlarge topmargin-sm"><i class="icon-angle-right"></i><span>Create a Package</span></a>

				</div>
			</div>

		</div>

	</section><!-- #content end -->

@endsection

@section('script')
<script>

	$(function() {
		$('.travel-date-group').datepicker({
			autoclose: true,
			startDate: "today"
		});
	});

	jQuery(window).load(function(){

		jQuery('#popular-dest-map').gMap({
			address: 'Spain',
			maptype: 'ROADMAP',
			zoom: 2,
			markers: [
				{
					address: "Melbourne, Australia",
					icon: {
						image: "images/icons/map-icon-red.png",
						iconsize: [32, 39],
						iconanchor: [16,36]
					}
				},
				{
					address: "Ibiza, Spain",
					icon: {
						image: "images/icons/map-icon-red.png",
						iconsize: [32, 39],
						iconanchor: [16,36]
					}
				},
				{
					address: "New York",
					icon: {
						image: "images/icons/map-icon-red.png",
						iconsize: [32, 39],
						iconanchor: [16,36]
					}
				},
				{
					address: "Rio de Janeiro, Brazil",
					icon: {
						image: "images/icons/map-icon-red.png",
						iconsize: [32, 39],
						iconanchor: [16,36]
					}
				},
				{
					address: "Moscow, Russia",
					icon: {
						image: "images/icons/map-icon-red.png",
						iconsize: [32, 39],
						iconanchor: [16,36]
					}
				},
				{
					address: "Rome, Italy",
					icon: {
						image: "images/icons/map-icon-red.png",
						iconsize: [32, 39],
						iconanchor: [16,36]
					}
				},
				{
					address: "New Delhi, India",
					icon: {
						image: "images/icons/map-icon-red.png",
						iconsize: [32, 39],
						iconanchor: [16,36]
					}
				},
				{
					address: "Bangkok, Thailand",
					icon: {
						image: "images/icons/map-icon-red.png",
						iconsize: [32, 39],
						iconanchor: [16,36]
					}
				},
				{
					address: "Dubai",
					icon: {
						image: "images/icons/map-icon-red.png",
						iconsize: [32, 39],
						iconanchor: [16,36]
					}
				},
				{
					address: "Cape Town, South Africa",
					icon: {
						image: "images/icons/map-icon-red.png",
						iconsize: [32, 39],
						iconanchor: [16,36]
					}
				}
			],
			doubleclickzoom: false,
			controls: {
				panControl: false,
				zoomControl: true,
				mapTypeControl: false,
				scaleControl: false,
				streetViewControl: false,
				overviewMapControl: false
			},
			styles: [{"featureType":"landscape.natural","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#e0efef"}]},{"featureType":"poi","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"hue":"#1900ff"},{"color":"#c0e8e8"}]},{"featureType":"road","elementType":"geometry","stylers":[{"lightness":100},{"visibility":"simplified"}]},{"featureType":"road","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"transit.line","elementType":"geometry","stylers":[{"visibility":"on"},{"lightness":700}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#7dcdcd"}]}]
		});
	});

</script>
@endsection
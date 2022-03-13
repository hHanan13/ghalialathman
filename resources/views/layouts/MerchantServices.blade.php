
<!-- begin index.tpl -->
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>SpryStore E-commerce Category Bootstrap Responsive Website Template | Home :: W3layouts</title>
  <!-- Template CSS -->
  <link rel="stylesheet" href="{{asset('assets/front/css/style-starter.css')}}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
  <!-- Template CSS -->
  <link href="//fonts.googleapis.com/css?family=Oswald:300,400,500,600&display=swap" rel="stylesheet">
  <link href="//fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,900&display=swap" rel="stylesheet">
  <!-- Template CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/fontawesome.min.css" integrity="sha512-P9vJUXK+LyvAzj8otTOKzdfF1F3UYVl13+F8Fof8/2QNb8Twd6Vb+VD52I7+87tex9UXxnzPgWA3rH96RExA7A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
</head>
<body>
<!--w3l-banner-slider-main-->
<section id="wrapper" class="w3l-banner-slider-main">
	<div class="top-header-content">
    <header class="tophny-header">
			<div class="container-fluid">
				<div class="top-right-strip row">
					<!--/left-->
					<div class="top-hny-left-content col-lg-6 pl-lg-0">
						<h6><i class="fas fa-envelope"></i>  example@gmail.com </h6>
						<h6><i class="fas fa-phone-alt"></i>  123 456 7890 </h6>
					</div>
					<!--//left-->
					<!--/right-->
					
					<!--//right-->
					<div class="overlay-login text-left">
						<button type="button" class="overlay-close1">
							<i class="fa fa-times" aria-hidden="true"></i>
						</button>
						<div class="wrap">
							<h5 class="text-center mb-4">Login Now</h5>
							<div class="login-bghny p-md-5 p-4 mx-auto mw-100">
								<!--/login-form-->
								<form action="#" method="post">
									<div class="form-group">
										<p class="login-texthny mb-2">Email address</p>
										<input type="email" class="form-control" id="exampleInputEmail1"
											aria-describedby="emailHelp" placeholder="" required="">
										<small id="emailHelp" class="form-text text-muted">We'll never share your email
											with anyone else.</small>
									</div>
									<div class="form-group">
										<p class="login-texthny mb-2">Password</p>
										<input type="password" class="form-control" id="exampleInputPassword1"
											placeholder="" required="">
									</div>
									<div class="form-check mb-2">
										<div class="userhny-check">
											<label class="check-remember container">
												<input type="checkbox" class="form-check"> <span
													class="checkmark"></span>
												<p class="privacy-policy">Remember me</p>
											</label>
											<div class="clearfix"></div>
										</div>
									</div>
									<button type="submit" class="submit-login btn mb-4">Sign In</button>

								</form>
								<!--//login-form-->
							</div>
							<!---->
						</div>
					</div>
				</div>
			</div>
			<!--/nav-->
			<nav class="navbar navbar-expand-lg navbar-light">
				<div class="container-fluid serarc-fluid">
					<a class="navbar-brand2" href="index.html">
				    	<img src="{{asset('assets/front/images/logoblack.png')}}" alt="Your logo" title="Your logo" style="height:120px;" />
			    	</a>
					<!-- if logo is image enable this   
							<a class="navbar-brand" href="#index.html">
								<img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
							</a> -->
					
					<!--//search-right-->
					<button class="navbar-toggler" type="button" data-toggle="collapse"
						data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
						aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon fa fa-bars"> </span>
					</button>
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav ml-auto">
							<li class="nav-item">
							<img src="{{asset('assets/front/images/icon/Group 3579.png')}}" class="img-fluid" alt="" />
								<a class="nav-link" href="index.html">Home</a>
							</li>
							<li class="nav-item">
							<img src="{{asset('assets/front/images/icon/Group 3580.png')}}" class="img-fluid" alt="" />
								<a class="nav-link" href="about.html">profile</a>
							</li>
							<li class="nav-item">
							<img src="{{asset('assets/front/images/icon/Group 3583.png')}}" class="img-fluid" alt="" />
								<a class="nav-link" href="about.html">Favorite</a>
							  </li>

							<li class="nav-item">
							<img src="{{asset('assets/front/images/icon/Group 3584.png')}}" class="img-fluid" alt="" />
								<a class="nav-link" href="contact.html">cart</a>
							</li>
						</ul>

					</div>
					<!--/search-right-->
					<div class="search-right">

						<a href="#search" title="search"><i class="fas fa-search"></i></a>
						<!-- search popup -->
						<div id="search" class="pop-overlay">
							<div class="popup">

								<form action="#" method="post" class="search-box">
									<input type="search" placeholder="Keyword" name="search" required="required"
										autofocus="">
									<button type="submit" class="btn">Search</button>
								</form>

							</div>
							<a class="close" href="#">×</a>
						</div>
						<!-- /search popup -->
					</div>
				</div>
			</nav>
			<!--//nav-->
		</header>
		</br></br>
		<div class="bannerhny-content1">
			<div class="single_slider  d-flex align-items-center slider_bg_1">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-5 col-md-6">
							<div class="slider_text">
									<h3 class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".3s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.3s; animation-name: fadeInLeft;">You can start your perfume business at the lowest costs</h3>
									<div class="line wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".4s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.4s; animation-name: fadeInLeft;"></div>
									<div class="space"></div>
									<p class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".5s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.5s; animation-name: fadeInLeft;">We start with you from supplying perfumes to preparing your account as a merchant on the site and linking your account to inventory management systems and shipping companies in a timely manner. We also provide you with training on operations and business and support you with services &nbsp;&nbsp;<div class="line1"></div>&nbsp;&nbsp;<u>Register</u></p>
											</br>
											</br>
									<div class=="play">
										<a class="" href="index.html">
											<img src="{{asset('assets/front/images/Group 3581.png')}}" class="img-fluid" alt="" title="" style="" />
										</a>
									
									    <div class="box wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".5s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.5s; animation-name: fadeInLeft;"><h4>demonstration video</h4></div>
									</div>
									
							</div>
						</div>
						<div class="col-lg-1 col-md-6"></div>
						<div class="col-lg-6 col-md-6">
						<img src="{{asset('assets/front/images/Group 453.png')}}" class="img-fluid wow fadeInRight" data-wow-duration="1s" data-wow-delay=".4s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.4s; animation-name: fadeInRight;" alt="" />
						
						</div>
						<div class="icon_links col-md-2 offset-md-8">
						            <ul class="icons mt-lg-5 mt-4">

										<li><a class="youtube" href="#"><i class="fab fa-linkedin-in"></i></a>
										</li>
										<li><a class="facebook" href="#"><i class="fab fa-twitter"></i></a>
										</li>
										<li><a class="google" href="#"><i class="fab fa-facebook-f"></i></a>
										</li>								
								
					            	</ul>
						</div>
						<div class="type1"></div>
					</div>
				</div>
			</div>
		</div>

</section>
<!-- first section -->
<section>
                <div class="container">
					<div class="row align-items-center">
					<div class="col-lg-6 col-md-6">
						<img src="{{asset('assets/front/images/Group 471.png')}}" class="img-fluid wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".4s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.4s; animation-name: fadeInLeft;" alt="" />
						
						</div>
						
						<div class="col-lg-1 col-md-6"></div>
						<div class="col-lg-5 col-md-6">
							<div class="slider_text1">
									<h3 class="wow fadeInRight" data-wow-duration="1s" data-wow-delay=".3s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.3s; animation-name: fadeInRight;">Register for a merchant service</h3>
									<div class="line wow fadeInRight" data-wow-duration="1s" data-wow-delay=".4s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.4s; animation-name: fadeInRight;"></div>
									<div class="space"></div>
									<p class="wow fadeInRight" data-wow-duration="1s" data-wow-delay=".5s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.5s; animation-name: fadeInRight;">Open an online merchant account and start selling to any customer and anywhere in the world.</p>
									<div class="type"></div>
							</div>
						</div>
					
						
					</div>
				</div>
</section>
<!-- second section -->
<section class="third">
                <div class="container">
					<div class="row align-items-center">
					
					<div class="col-lg-5 col-md-6">
							<div class="slider_text2">
									<h3 class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".3s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.3s; animation-name: fadeInLeft;">perfume supply</h3>
									<div class="line wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".4s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.4s; animation-name: fadeInLeft;"></div>
									<div class="space"></div>
									<p class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".5s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.5s; animation-name: fadeInLeft;">After activating your merchant account, we start supplying perfumes and entering them into your account. We support the account with any new perfumes without any new payments.</p>
									<div class="type"></div>
							</div>
						</div>
						<div class="col-lg-1 col-md-6"></div>
						<div class="col-lg-6 col-md-6">
						<img src="{{asset('assets/front/images/Group 543.png')}}" class="img-fluid wow fadeInRight" data-wow-duration="1s" data-wow-delay=".4s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.4s; animation-name: fadeInRight;" alt="" />
						
						</div>
					
						
					</div>
				</div>
</section>
<!-- third section -->
<section class="forth">
                <div class="container">
					<div class="row align-items-center">
					<div class="col-lg-6 col-md-6">
						<img src="{{asset('assets/front/images/Group 1786.png')}}" class="img-fluid wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".4s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.4s; animation-name: fadeInLeft;" alt="" />
						
						</div>
						
						<div class="col-lg-1 col-md-6"></div>
						<div class="col-lg-5 col-md-6">
							<div class="slider_text3">
									<h3 class="wow fadeInRight" data-wow-duration="1s" data-wow-delay=".3s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.3s; animation-name: fadeInRight;">Inventory</h3>
									<div class="line wow fadeInRight" data-wow-duration="1s" data-wow-delay=".4s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.4s; animation-name: fadeInRight;"></div>
									<div class="space"></div>
									<p class="wow fadeInRight" data-wow-duration="1s" data-wow-delay=".5s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.5s; animation-name: fadeInRight;">We provide you with storage space in Riyadh, Jeddah and Dammam. An account as a merchant is linked to inventory management systems automatically, which supports the management of inventory movement, distribution and receipt movement upon supply for each new and upon delivery.</p>
									<div class="type"></div>
							</div>
						</div>
					
						
					</div>
				</div>
</section>
<!-- forth section -->
<section class="fifth">
                <div class="container">
					<div class="row align-items-center">
					
					<div class="col-lg-5 col-md-6">
							<div class="slider_text4">
									<h3 class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".3s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.3s; animation-name: fadeInLeft;">cargo management system</h3>
									<div class="line wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".4s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.4s; animation-name: fadeInLeft;"></div>
									<div class="space"></div>
									<p class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".5s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.5s; animation-name: fadeInLeft;">Your account is linked with the shipment management systems through multiple shipping companies on the same policy for the store and without additional costs.</p>
									<div class="type"></div>
							</div>
						</div>
						<div class="col-lg-1 col-md-6"></div>
						<div class="col-lg-6 col-md-6">
						<img src="{{asset('assets/front/images/Group 1900.png')}}" class="img-fluid wow fadeInRight" data-wow-duration="1s" data-wow-delay=".4s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.4s; animation-name: fadeInRight;" alt="" />
						
						</div>
					
						
					</div>
				</div>
</section>
<!-- fifth section -->
<section class="sixth">
                <div class="container">
					<div class="row align-items-center">
              		<div class="col-lg-6 col-md-6">
						<img src="{{asset('assets/front/images/Group 2369.png')}}" class="img-fluid wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".4s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.4s; animation-name: fadeInLeft;" alt="" />
						
						</div>
						
						<div class="col-lg-1 col-md-6"></div>
						<div class="col-lg-5 col-md-6">
							<div class="slider_text5">
									<h3 class="wow fadeInRight" data-wow-duration="1s" data-wow-delay=".3s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.3s; animation-name: fadeInRight;">Multiple payment systems</h3>
									<div class="line wow fadeInRight" data-wow-duration="1s" data-wow-delay=".4s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.4s; animation-name: fadeInRight;"></div>
									<div class="space"></div>
									<p class="wow fadeInRight" data-wow-duration="1s" data-wow-delay=".5s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.5s; animation-name: fadeInRight;">Your account is linked to many payment systems that support you in increasing sales more easily.</p>
									<div class="type"></div>
							</div>
						</div>
					
						
					</div>
				</div>
</section>
<!-- sixth section -->
<section class="seventh">
                <div class="container">
					<div class="row align-items-center">
					
					<div class="col-lg-5 col-md-6">
							<div class="slider_text6">
									<h3 class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".3s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.3s; animation-name: fadeInLeft;">Marketing</h3>
									<div class="line wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".4s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.4s; animation-name: fadeInLeft;"></div>
									<div class="space"></div>
									<p class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".5s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.5s; animation-name: fadeInLeft;">We carry out promotional campaigns through social media platforms, celebrities or exhibitions to support the brand, which supports you in selling and winning customers.</p>
									<div class="type"></div>
							</div>
						</div>
						<div class="col-lg-1 col-md-6"></div>
						<div class="col-lg-6 col-md-6">
						<img src="{{asset('assets/front/images/Group 3576.png')}}" class="img-fluid wow fadeInRight" data-wow-duration="1s" data-wow-delay=".4s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.4s; animation-name: fadeInRight;" alt="" />
						
						</div>
					
						
					</div>
				</div>
</section>
<!-- seventh section -->
<section class="eight">
                <div class="container">
					<div class="row align-items-center">
              		<div class="col-lg-6 col-md-6">
						<img src="{{asset('assets/front/images/Group 2247.png')}}" class="img-fluid wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".4s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.4s; animation-name: fadeInLeft;" alt="" />
						
						</div>
						
						<div class="col-lg-1 col-md-6"></div>
						<div class="col-lg-5 col-md-6">
							<div class="slider_text7">
									<h3 class="wow fadeInRight" data-wow-duration="1s" data-wow-delay=".3s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.3s; animation-name: fadeInRight;">Ongoing training and support</h3>
									<div class="line wow fadeInRight" data-wow-duration="1s" data-wow-delay=".4s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.4s; animation-name: fadeInRight;"></div>
									<div class="space"></div>
									<p class="wow fadeInRight" data-wow-duration="1s" data-wow-delay=".5s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.5s; animation-name: fadeInRight;">We provide training and continuous support to support you in selling and managing your account as a merchant.</p>
									<div class="type"></div>
							</div>
						</div>
					
						
					</div>
				</div>
</section>
<!-- eight section -->
<section class="nine">
                <div class="container">
					<div class="row align-items-center">
					
					<div class="col-lg-5 col-md-6">
							<div class="slider_text8">
									<h3 class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".3s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.3s; animation-name: fadeInLeft;">Advertising and design management</h3>
									<div class="line wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".4s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.4s; animation-name: fadeInLeft;"></div>
									<div class="space"></div>
									<p class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".5s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.5s; animation-name: fadeInLeft;">We provide paid advertising management services for free to any merchant on the site, and we also provide him with the necessary designs for the campaign.</p>
									<div class="type"></div>
							</div>
						</div>
						<div class="col-lg-1 col-md-6"></div>
						<div class="col-lg-6 col-md-6">
						<img src="{{asset('assets/front/images/Group 2319.png')}}" class="img-fluid wow fadeInRight" data-wow-duration="1s" data-wow-delay=".4s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.4s; animation-name: fadeInRight;" alt="" />
						
						</div>
					
						
					</div>
				</div>
</section>
<!-- nine section -->
<section class="ten">
                <div class="container">
					<div class="row align-items-center">
              		<div class="col-lg-6 col-md-6">
						<img src="{{asset('assets/front/images/Group 2371.png')}}" class="img-fluid wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".4s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.4s; animation-name: fadeInLeft;" alt="" />
						
						</div>
						
						<div class="col-lg-1 col-md-6"></div>
						<div class="col-lg-5 col-md-6">
							<div class="slider_text9">
									<h3 class="wow fadeInRight" data-wow-duration="1s" data-wow-delay=".3s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.3s; animation-name: fadeInRight;">perfume design</h3>
									<div class="line wow fadeInRight" data-wow-duration="1s" data-wow-delay=".4s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.4s; animation-name: fadeInRight;"></div>
									<div class="space"></div>
									<p class="wow fadeInRight" data-wow-duration="1s" data-wow-delay=".5s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.5s; animation-name: fadeInRight;">The possibility of producing special perfumes in the name of the store on demand in advanced stages.</p>
									<div class="type"></div>
							</div>
						</div>
					
						
					</div>
				</div>
</section>
<!-- ten section -->

<section class="form_register">
	<div class="wrapper">
		<div class="container">
			<article class="part card-details">
				<h1>
				Merchant Registration
				</h1>
				<form action="" if="cc-form" autocomplete="off">
					<div class="group card-number">
						<label for="first">Merchant Registration</label>
						<input type="text" id="first" class="cc-num" type="text" maxlength="4" placeholder="&#9679;&#9679;&#9679;&#9679;">
						<input type="text" id="second" class="cc-num" type="text" maxlength="4" placeholder="&#9679;&#9679;&#9679;&#9679;">
						<input type="text" id="third" class="cc-num" type="text" maxlength="4" placeholder="&#9679;&#9679;&#9679;&#9679;">
						<input type="text" id="fourth" class="cc-num" type="text" maxlength="4" placeholder="&#9679;&#9679;&#9679;&#9679;">
					</div>
					<div class="group card-name">
						<label for="name">Name On Card</label>
						<input type="text" id="name" class="" type="text" maxlength="20" placeholder="Name Surname">
					</div>
					<div class="group card-expiry">
						<div class="input-item expiry">
							<label for="expiry">Expiry Date</label>
							<input type="text" class="month" id="expiry" placeholder="02">
							<input type="text" class="year" id="" placeholder="2017">
						</div>
						<div class="input-item csv">
							<label for="csv">CSV No.</label><a href="#what">?</a>
							<input type="text" class="csv">
						</div>
					</div>
					<div class="grup submit-group">
						<span class="arrow"></span>
						<input type="submit" class="submit" value="Continue to payment">
					</div>
				</form>
			</article>
		</div>
		</div>
</section>
      @include('front.includes.footer')
	  <script src="{{asset('assets/front/js/jquery-2.1.4.min.js')}}"></script>
<script src="{{asset('assets/front/js/jquery-3.3.1.min.js')}}"></script>

<!--/login-->
<script>
		$(document).ready(function () {
			$(".button-log a").click(function () {
				$(".overlay-login").fadeToggle(200);
				$(this).toggleClass('btn-open').toggleClass('btn-close');
			});
		});
		$('.overlay-close1').on('click', function () {
			$(".overlay-login").fadeToggle(200);
			$(".button-log a").toggleClass('btn-open').toggleClass('btn-close');
			open = false;
		});
  </script>
<!--//login-->
<script>
// optional
		$('#customerhnyCarousel').carousel({
				interval: 5000
    });
  </script>
  <script>
	  $(document).ready(function()
		{
		if($('.bbb_viewed_slider').length)
		{
		var viewedSlider = $('.bbb_viewed_slider');

		viewedSlider.owlCarousel(
		{
		loop:true,
		margin:30,
		autoplay:true,
		autoplayTimeout:6000,
		nav:false,
		dots:false,
		responsive:
		{
		0:{items:1},
		575:{items:2},
		768:{items:3},
		991:{items:4},
		1199:{items:4}
		}
		});

		if($('.bbb_viewed_prev').length)
		{
		var prev = $('.bbb_viewed_prev');
		prev.on('click', function()
		{
		viewedSlider.trigger('prev.owl.carousel');
		});
		}

		if($('.bbb_viewed_next').length)
		{
		var next = $('.bbb_viewed_next');
		next.on('click', function()
		{
		viewedSlider.trigger('next.owl.carousel');
		});
		}
		}
		});
  </script>
  <!-- french_slider -->
<script>
	$(document).ready(function()
  {
  if($('.bbb_viewed_slider1').length)
  {
  var viewedSlider1 = $('.bbb_viewed_slider1');

  viewedSlider1.owlCarousel(
  {
  loop:true,
  margin:30,
  autoplay:true,
  autoplayTimeout:6000,
  nav:true,
  dots:false,
  navText : ["<i class='icofont-scroll-left'></i>","<i class='icofont-scroll-right'></i>"],
  responsive:
  {
  0:{items:1},
  575:{items:2},
  768:{items:3},
  991:{items:4},
  1199:{items:4}
  }
  });
  
  }
  });

</script>
<!-- niche_slider -->
<script>
	$(document).ready(function()
  {
  if($('.bbb_viewed_slider2').length)
  {
  var viewedSlider2 = $('.bbb_viewed_slider2');

  viewedSlider2.owlCarousel(
  {
  loop:true,
  margin:30,
  autoplay:true,
  autoplayTimeout:6000,
  nav:true,
  dots:false,
  navText : ["<i class='icofont-scroll-left'></i>","<i class='icofont-scroll-right'></i>"],
  responsive:
  {
  0:{items:1},
  575:{items:2},
  768:{items:3},
  991:{items:4},
  1199:{items:4}
  }
  });
  
  }
  });

</script>

<!-- packages_slider -->
<script>
	$(document).ready(function()
  {
  if($('.bbb_viewed_slider3').length)
  {
  var viewedSlider3 = $('.bbb_viewed_slider3');

  viewedSlider3.owlCarousel(
  {
  loop:true,
  margin:30,
  autoplay:true,
  autoplayTimeout:6000,
  nav:false,
  dots:false,
  navText : ["<i class='icofont-scroll-left'></i>","<i class='icofont-scroll-right'></i>"],
  responsive:
  {
  0:{items:1},
  575:{items:2},
  768:{items:2},
  991:{items:2},
  1199:{items:2}
  }
  });
  }
  });

</script>

<!-- recommendation -->
<script>
	$(document).ready(function()
  {
  if($('.bbb_viewed_slider4').length)
  {
  var viewedSlider4 = $('.bbb_viewed_slider4');

  viewedSlider4.owlCarousel(
  {
  loop:true,
  margin:30,
  autoplay:true,
  autoplayTimeout:6000,
  nav:true,
  dots:false,
  navText : ["<i class='icofont-scroll-left'></i>","<i class='icofont-scroll-right'></i>"],
  responsive:
  {
  0:{items:1},
  575:{items:2},
  768:{items:3},
  991:{items:4},
  1199:{items:4}
  }
  });
  }
  });

</script>
 <!-- cart-js -->
 <script src="{{asset('assets/front/js/minicart.js')}}"></script>
 <script>
     transmitv.render();

     transmitv.cart.on('transmitv_checkout', function (evt) {
         var items, len, i;

         if (this.subtotal() > 0) {
             items = this.items();

             for (i = 0, len = items.length; i < len; i++) {}
         }
     });
 </script>
 <!-- //cart-js -->
<!--pop-up-box-->
<script src="{{asset('assets/front/js/jquery.magnific-popup.js')}}"></script>
<!--//pop-up-box-->
<script>
  $(document).ready(function () {
    $('.popup-with-zoom-anim').magnificPopup({
      type: 'inline',
      fixedContentPos: false,
      fixedBgPos: true,
      overflowY: 'auto',
      closeBtnInside: true,
      preloader: false,
      midClick: true,
      removalDelay: 300,
      mainClass: 'my-mfp-zoom-in'
    });

  });
</script>
<!--//search-bar-->
<!-- disable body scroll which navbar is in active -->

<script>
  $(function () {
    $('.navbar-toggler').click(function () {
      $('body').toggleClass('noscroll');
    })
  });
</script>
<!-- menu -->
<script>
	$(document).ready(function () {
  var trigger = $('.hamburger'),
      overlay = $('.overlay'),
     isClosed = false;

    trigger.click(function () {
      hamburger_cross();      
    });

    function hamburger_cross() {

      if (isClosed == true) {          
        overlay.hide();
        trigger.removeClass('is-open');
        trigger.addClass('is-closed');
        isClosed = false;
      } else {   
        overlay.show();
        trigger.removeClass('is-closed');
        trigger.addClass('is-open');
        isClosed = true;
      }
  }
  
  $('[data-toggle="offcanvas"]').click(function () {
        $('#wrapper').toggleClass('toggled');
  });  
});
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js" integrity="sha512-Eak/29OTpb36LLo2r47IpVzPBLXnAMPAVypbSZiZ4Qkf8p/7S/XRG5xp7OKWPPYfJT6metI+IORkR5G8F900+g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.js" integrity="sha512-Rd5Gf5A6chsunOJte+gKWyECMqkG8MgBYD1u80LOOJBfl6ka9CtatRrD4P0P5Q5V/z/ecvOCSYC8tLoWNrCpPg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
              new WOW().init();
              </script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js" integrity="sha512-Tn2m0TIpgVyTzzvmxLNuqbSJH3JP8jm+Cy3hvHrW7ndTDcJ1w5mBiksqDBb8GpE2ksktFvDB/ykZ0mDpsZj20w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/fontawesome.min.js" integrity="sha512-ywaT8M9b+VnJ+jNG14UgRaKg+gf8yVBisU2ce+YJrlWwZa9BaZAE5GK5Yd7CBcP6UXoAnziRQl40/u/qwVZi4Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- disable body scroll which navbar is in active -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<script src="{{asset('assets/front/js/bootstrap.min.js')}}"></script>
<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();   
});
</script>

</body>
</html>


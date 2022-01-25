
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
			<div class="container-fluid" style="height: 60px;">
				<div class="top-right-strip row">
					<!--/left-->
				
				</div>
			</div>
			<!--/nav-->
			<nav class="navbar navbar-expand-lg navbar-light">
				<div class="container-fluid serarc-fluid">
					<!-- <a class="navbar-brand" href="index.html">
						Spry<span class="lohny">S</span>tore</a> -->
					<!-- if logo is image enable this  --> 
			<div class="col-lg-6 col-md-7 header-menu d-flex align-items-center justify-content-start">
                <div class="col-12 header-menu-search justify-content-between w-100 align-items-center">

                    <div class="advencesearch_header">
                        <span class="toggle-search hidden-lg-up"><i class="zmdi zmdi-search"></i></span>
                        <div id="_desktop_search" class="contentsticky_search">

                            <!-- begin modules/novadvancedsearch/novadvancedsearch-top.tpl -->
                            <!-- block seach mobile -->
                            <!-- Block search module TOP -->
                            <div id="desktop_search_content"
                                 data-id_lang="6"
                                 data-ajaxsearch="1"
                                 data-novadvancedsearch_type="top"
                                 data-instantsearch=""
                                 data-search_ssl=""
                                 data-link_search_ssl="http://demo.bestprestashoptheme.com/savemart/ar/بحث"
                                 data-action="http://demo.bestprestashoptheme.com/savemart/ar/module/novadvancedsearch/result">
                                <form method="get" action="http://demo.bestprestashoptheme.com/savemart/ar/module/novadvancedsearch/result" id="searchbox" class="form-novadvancedsearch">
                                    <input type="hidden" name="fc" value="module">
                                    <input type="hidden" name="module" value="novadvancedsearch">
                                    <input type="hidden" name="controller" value="result">
                                    <input type="hidden" name="orderby" value="position" />
                                    <input type="hidden" name="orderway" value="desc" />
                                    <input type="hidden" name="id_category" class="id_category" value="0" />
                                    <div class="input-group">
									<div class="input-group-btn nov_category_tree hidden-sm-down">
                                                        <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" value="" aria-expanded="false">
                                                            CATEGORIES
                                                        </button>
                                                        <ul class="dropdown-menu list-unstyled">
                                                            <li class="dropdown-item active" data-value="0"><span>All Categories</span></li>
                                                            <li class="dropdown-item " data-value="2"><span>الصفحة الرئيسية</span></li>
                                                            <ul class="list-unstyled pl-5">
                                                                <li class="dropdown-item" data-value="3" >
                                                                    <span>Computer &amp; Networking</span>
                                                                </li>
                                                                <li class="dropdown-item" data-value="10" >
                                                                    <span>-- USB</span>
                                                                    <ul class="list-unstyled">
                                                                        <li class="dropdown-item" data-value="11" >
                                                                            <span>---- USB Kingston</span>
                                                                        </li>
                                                                        <li class="dropdown-item" data-value="12" >
                                                                            <span>---- USB Sandisk</span>
                                                                        </li>
                                                                        <li class="dropdown-item" data-value="13" >
                                                                            <span>---- USB Samsung</span>
                                                                        </li>
                                                                    </ul>
                                                                </li>
                                                                <li class="dropdown-item" data-value="14" >
                                                                    <span>-- Hard Disk</span>
                                                                    <ul class="list-unstyled">
                                                                        <li class="dropdown-item" data-value="19" >
                                                                            <span>---- Hard Disk Drive</span>
                                                                        </li>
                                                                        <li class="dropdown-item" data-value="20" >
                                                                            <span>---- Solid State Drives</span>
                                                                        </li>
                                                                        <li class="dropdown-item" data-value="21" >
                                                                            <span>---- SATA</span>
                                                                        </li>
                                                                    </ul>
                                                                </li>
                                                                <li class="dropdown-item" data-value="15" >
                                                                    <span>-- Modem WIFI</span>
                                                                </li>
                                                                <li class="dropdown-item" data-value="16" >
                                                                    <span>-- Keyboard</span>
                                                                    <ul class="list-unstyled">
                                                                        <li class="dropdown-item" data-value="22" >
                                                                            <span>---- Keyboard 1</span>
                                                                        </li>
                                                                        <li class="dropdown-item" data-value="23" >
                                                                            <span>---- Keyboard 2</span>
                                                                        </li>
                                                                    </ul>
                                                                </li>
                                                                <li class="dropdown-item" data-value="17" >
                                                                    <span>-- Mouse</span>
                                                                </li>
                                                                <li class="dropdown-item" data-value="18" >
                                                                    <span>-- Monitor</span>
                                                                </li>
                                                                <li class="dropdown-item" data-value="6" >
                                                                    <span>Laptop &amp; Accessories</span>
                                                                </li>
                                                                <li class="dropdown-item" data-value="7" >
                                                                    <span>-- Laptop 1</span>
                                                                </li>
                                                                <li class="dropdown-item" data-value="8" >
                                                                    <span>-- Laptop 2</span>
                                                                </li>
                                                                <li class="dropdown-item" data-value="9" >
                                                                    <span>Smartphone &amp; Tablet</span>
                                                                </li>
                                                                <li class="dropdown-item" data-value="24" >
                                                                    <span>-- Apple</span>
                                                                </li>
                                                                <li class="dropdown-item" data-value="25" >
                                                                    <span>-- Samsung</span>
                                                                </li>
                                                                <li class="dropdown-item" data-value="26" >
                                                                    <span>-- Motorola</span>
                                                                </li>
                                                                <li class="dropdown-item" data-value="27" >
                                                                    <span>-- Chargers</span>
                                                                </li>
                                                                <li class="dropdown-item" data-value="4" >
                                                                    <span>Home Appliance</span>
                                                                </li>
                                                                <li class="dropdown-item" data-value="5" >
                                                                    <span>Camera &amp; Photo</span>
                                                                </li>
                                                                <li class="dropdown-item" data-value="28" >
                                                                    <span>-- Camera 1</span>
                                                                </li>
                                                                <li class="dropdown-item" data-value="29" >
                                                                    <span>-- Camera 2</span>
                                                                </li>
                                                                <li class="dropdown-item" data-value="30" >
                                                                    <span>-- Photo 1</span>
                                                                </li>
                                                                <li class="dropdown-item" data-value="31" >
                                                                    <span>-- Photo 2</span>
                                                                </li>
                                                                <li class="dropdown-item" data-value="32" >
                                                                    <span>Audio</span>
                                                                </li>
                                                                <li class="dropdown-item" data-value="33" >
                                                                    <span>-- Headphone</span>
                                                                </li>
                                                                <li class="dropdown-item" data-value="34" >
                                                                    <span>-- Wireless Speaker</span>
                                                                </li>
                                                                <li class="dropdown-item" data-value="35" >
                                                                    <span>-- Bluetooth Speaker</span>
                                                                </li>
                                                                <li class="dropdown-item" data-value="36" >
                                                                    <span>-- Mini Speaker</span>
                                                                </li>
                                                                <li class="dropdown-item" data-value="37" >
                                                                    <span>-- Sound Card</span>
                                                                </li>
                                                                <li class="dropdown-item" data-value="38" >
                                                                    <span>-- إكسسوارات</span>
                                                                </li>
                                                                <li class="dropdown-item" data-value="39" >
                                                                    <span>-- Earbuds and  In-ear</span>
                                                                </li>
                                                            </ul>
                                                        </ul>
                                                    </div>
                                        <input type="text" id="search_query_top" class="search_query ui-autocomplete-input form-control" name="search_query" value="" placeholder="Search"/>

                                                   

                                                    <span class="input-group-btn">
                                                                    <button class="btn btn-secondary" type="submit" name="submit_search"><i class=""></i></button>
                                                    </span>
                                    </div>

                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
					
					<ul class="top-hnt-right-content col-lg-3">
					  <li class="button-log usernhy">
							<a class="btn-open" href="#">
								<span class="far fa-heart" aria-hidden="true"></span>
							</a>
						</li>
						<li class="transmitvcart galssescart2 cart cart box_1">
							<form action="#" method="post" class="last">
								<input type="hidden" name="cmd" value="_cart">
								<input type="hidden" name="display" value="1">
								<button class="top_transmitv_cart" type="submit" name="submit" value="">
									
									<span class="fas fa-cart-plus"></span>
								</button>
							</form>
						</li>

						<li class="button-log usernhy">
							<a class="btn-open" href="{{ route('Register') }}">
								<span class="fas fa-user-alt" aria-hidden="true"></span>
							</a>
						</li>
						
					</ul>
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
					<div class="overlay"></div>
					
							<button type="button" class="hamburger animated fadeInLeft is-closed col-lg-3" data-toggle="offcanvas">
									<span class="hamb-top"></span>
									<span class="hamb-middle"></span>
									<span class="hamb-bottom"></span>
							</button>
				               <!-- Sidebar -->
							<nav class="navbar navbar-inverse fixed-top" id="sidebar-wrapper" role="navigation">
									<ul class="nav sidebar-nav">
									<div class="sidebar-header">
									<div class="sidebar-brand">
										<a href="#">Brand</a></div></div>
									<li><a href="#home">Home</a></li>
									<li><a href="#about">About</a></li>
									<li><a href="#events">Events</a></li>
									<li><a href="#team">Team</a></li>
									<li class="dropdown">
									<a href="#works" class="dropdown-toggle"  data-toggle="dropdown">Works <span class="caret"></span></a>
									<ul class="dropdown-menu animate__animated animate__fadeInLeft" role="menu">
									<div class="dropdown-header">Dropdown heading</div>
									<li><a href="#pictures">Pictures</a></li>
									<li><a href="#videos">Videeos</a></li>
									<li><a href="#books">Books</a></li>
									<li><a href="#art">Art</a></li>
									<li><a href="#awards">Awards</a></li>
									</ul>
									</li>
									<li><a href="#services">Services</a></li>
									<li><a href="#contact">Contact</a></li>
									<li><a href="#followme">Follow me</a></li>
									</ul>
							</nav>
					

				</div>
			</nav>
			<a class="navbar-brand" href="#index.html">
								<img src="{{asset('assets/front/images/logo-4.png')}}" alt="Your logo" title="Your logo" style="height:150px;" />
							</a> 
			<!--//nav-->
		</header>
		<div class="bannerhny-content">

			<!--/banner-slider-->
			<div class="content-baner-inf">
				<div class="container">
					
						<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
							<ol class="carousel-indicators">
								<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
								<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
								<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
								<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
							</ol>
							<div class="carousel-inner">
								<div class="carousel-item active">
									<div class="container">
									    <img src="assets/front/images/1.png" style="width:100%">
										<div class="carousel-caption">
											<p>Lorem ipsum is placeholder text commonly used in the graphic,
										     print, and publishing industries for previewing layouts and visual mockups.</p>
										</div>
									</div>
								</div>
								<div class="carousel-item item2">
									<div class="container">
									<img src="assets/front/images/2.png" style="width:100%">
									<div class="carousel-caption">
											<p>Lorem ipsum is placeholder text commonly used in the graphic,
										     print, and publishing industries for previewing layouts and visual mockups.</p>
										</div>
									</div>
								</div>
								<div class="carousel-item item3">
									<div class="container">
									<img src="assets/front/images/3.png" style="width:100%">
									<div class="carousel-caption">
											<p>Lorem ipsum is placeholder text commonly used in the graphic,
										     print, and publishing industries for previewing layouts and visual mockups.</p>
										</div>
									</div>
								</div>
								<div class="carousel-item item4">
									<div class="container">
									<img src="assets/front/images/4.png" style="width:100%">
									<div class="carousel-caption">
											<p>Lorem ipsum is placeholder text commonly used in the graphic,
										     print, and publishing industries for previewing layouts and visual mockups.</p>
										</div>
									</div>
								</div>
							</div>
							<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
								<span class="carousel-control-prev-icon" aria-hidden="true"></span>
								<span class="sr-only">Previous</span>
							</a>
							<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
								<span class="carousel-control-next-icon" aria-hidden="true"></span>
								<span class="sr-only">Next</span>
							</a>
						</div>
						
				</div>
			</div>
			<!--//banner-slider-->
			<!--//banner-slider-->
			<div class="right-banner">
				<div class="right-1">
						<ul class="social-footerhny mt-lg-5 mt-4">

								<li><a class="youtube" href="#"><img src="{{asset('assets/front/images/Group 1111.png')}}" class="img-fluid" alt="" /></a>
								</li>
								<li><a class="facebook" href="#"><img src="{{asset('assets/front/images/Group1113.png')}}" class="img-fluid" alt="" /></a>
								</li>
								<li><a class="google" href="#"><img src="{{asset('assets/front/images/Group1112.png')}}" class="img-fluid" alt="" /></a>
								</li>
								<li><a class="twitter" href="#"><img src="{{asset('assets/front/images/Group1110.png')}}" class="img-fluid" alt="" /></a>
								</li>
								
						</ul>
				</div>
			</div>

		</div>

</section>
<!-- //w3l-banner-slider-main -->
      @include('front.includes.perfume')
      @include('front.includes.oriental')
      @include('front.includes.french')
	  @include('front.includes.niche')
      @include('front.includes.packages')
      @include('front.includes.recommendation')
      @include('front.includes.reviews')
      @include('front.includes.newsletter')
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



<!-- begin index.tpl -->
<!doctype html>
<html lang="{{ LaravelLocalization::getCurrentLocale() }}" dir="{{ LaravelLocalization::getCurrentLocaleDirection() }}">
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
			<div class="container-fluid" style="height: 50px;">
				<div class="top-right-strip row">
					<!--/left-->
					<!-- locale -->
					<!-- @if(App::getLocale() == 'en')
						<a href="{{ route('homepage') }}">en</a>
					
					@else
					<a href="{{ route('') }}">ar</a>
					@endif -->
					<ul class="local">
						@foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
							<li>
								<a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
									{{ $properties['native'] }}
								</a>
							</li>
						@endforeach
					</ul>
				</div>
			</div>
			<a class="navbar-brand logo" href="#index.html">
								<img src="{{asset('assets/front/images/logo-4.png')}}" alt="Your logo" title="Your logo" style="height:150px;" />
							</a> 
			<!--//nav-->
		</header>
<div class="bannerhny-content">

			<!--/banner-slider-->
	<div class="content-baner-inf">
		<div class="container">
		
					<div class="single-product-details listview">
				
								<a href="#" class="perfume"><img src="{{asset('assets/front/images/pexels-valeria-boltneva-1961795.png')}}" class="img-fluid" alt="" style="width:500px;" /></a>
								
						<div class="row">
							<div class="col-2">			 
								<a href="#" class="rose_perfume"><img src="{{asset('assets/front/images/Group 32.png')}}" class="img-fluid" alt="" style="" /></a>
                            </div>

											<div class="col-7 product-content">

												<h2 class="product-name">
													<a href="#">Sioufi oud oil</a>
												</h2>
												<div class="rating-review">
												<span>
																		<div class="rate">
																				<input type="radio" id="star5" name="rate" value="5" />
																				<label for="star5" title="text">5 stars</label>
																				<input type="radio" id="star4" name="rate" value="4" />
																				<label for="star4" title="text">4 stars</label>
																				<input type="radio" id="star3" name="rate" value="3" />
																				<label for="star3" title="text">3 stars</label>
																				<input type="radio" id="star2" name="rate" value="2" />
																				<label for="star2" title="text">2 stars</label>
																				<input type="radio" id="star1" name="rate" value="1" />
																				<label for="star1" title="text">1 star</label>
																			</div>
																</span>
												</div>
												<!-- <div class="stock">
													<a href="#">In Stock</a>
												</div> -->
												<div class="perfume_heart">
													<a class="action-btn" href="wishlist.html" data-toggle="tooltip" data-original-title="Add to Wishlist"><img src="{{asset('assets/front/images/heart.png')}}" class="img-fluid" alt="" /></a>
												</div>
												<div class="description">
													<p>Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Viva..</p>
												</div>
												<div class="price-box">
													<span class="old-price">sold(23)</span>
													<span class="new-price">SAR90.00</span>
												</div>
												<div class="counter">
													<span class="down" onClick='decreaseCount(event, this)'>-</span>
													<input type="text" value="1">
													<span class="up"  onClick='increaseCount(event, this)'>+</span>
												</div>
												
												<div class="pro-actions">
													<a class="action-btn action-btn-1" href="cart.html"><i class="pe-7s-cart"></i>Add to Cart</a>
												</div>
												
											</div>
											<div class="col-3"></div>
						</div>
											
										</div>
								
		 	</div>

		</div>
						<!--//banner-slider-->
						<!--//banner-slider-->
						<div class="right-banner">
							<div class="right-1">
							</div>
						</div>
					</div>

</section>

	  <script src="{{asset('assets/front/js/jquery-2.1.4.min.js')}}"></script>

	  <script data-require="jquery@3.1.1" data-semver="3.1.1" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
      <script src="{{asset('assets/front/js/jquery-3.3.1.min.js')}}"></script>

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
<script src="{{asset('assets/front/js/main.js')}}"></script>

</body>
</html>


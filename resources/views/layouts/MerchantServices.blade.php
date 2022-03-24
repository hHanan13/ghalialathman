
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
  <link rel="stylesheet" href="{{asset('assets/front/css/owl.carousel.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/front/css/owl.theme.default.css')}}">
  <link rel="stylesheet" href="{{asset('assets/front/css/fontawesome.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/front/css/all.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/front/css/animate.min.css')}}">

  <link href="//fonts.googleapis.com/css?family=Oswald:300,400,500,600&display=swap" rel="stylesheet">
  <link href="//fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,900&display=swap" rel="stylesheet">

</head>
<body>
<!--w3l-banner-slider-main-->
<section id="wrapper" class="w3l-banner-slider-main">
	<div class="top-header-content">
	<header class="tophny-header">
			
			<!--/nav-->
				<div class="container serarc-fluid">
                    <div class="row">
                        <div class="col-xl-2 col-lg-2 col-md-3 col-4">
                            <a class="navbar-brand" href="#index.html">
                                <img src="{{asset('assets/front/images/logoblack.png')}}" alt="Your logo" title="Your logo" style="height:150px;" />
                            </a> 
                        </div>
				
                        <div class="col-xl-5 col-lg-5 col-md-4 col-8 d-flex align-items-center" id="">
                            <ul class="navbar-nav ml-auto">
                              <li class="nav-item">
                              <img src="{{asset('assets/front/images/icon/Group 3579.png')}}" class="img-fluid" alt="" />
                                <a class="nav-link" href="index.html">Home</a>
                              </li>
                              <li class="nav-item">
                              <img src="{{asset('assets/front/images/icon/Group 3580.png')}}" class="img-fluid" alt="" />
                                <a class="nav-link" href="about.html">Merchant Services</a>
                              </li>
                              <li class="nav-item">
                              <img src="{{asset('assets/front/images/icon/Group 3583.png')}}" class="img-fluid" alt="" />
                                <a class="nav-link" href="about.html">perfume</a>
                                </li>

                              <!-- <li class="nav-item">
                              <img src="{{asset('assets/front/images/icon/Group 3584.png')}}" class="img-fluid" alt="" />
                                <a class="nav-link" href="contact.html">cart</a>
                              </li> -->
                            </ul>

				               	</div>
                         <div class="search-right col-xl-1 col-lg-1 col-md-1 col-2">

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
					
                      <ul class="top-hnt-right-content col-xl-2 col-lg-2 col-md-2 col-7">
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
				           	<div class="col-xl-2 col-lg-2 col-md-2 col-2 d-flex justify-content-end align-items-center">
                        <button type="button" class="hamburger animated fadeInLeft " onclick="openNav()" data-toggle="offcanvas">
                                        
                        </button>
                         <!-- Sidebar -->
                         <div id="mySidenav" class="sidenav">
                                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                                    <a class="navbar-brand logo_layer" href="#index.html">
                                            <img src="{{asset('assets/front/images/logoblack.png')}}" alt="Your logo" title="Your logo" style="height:150px;" />
						                        	</a> 
                                        <a href="#">Homepage</a>
                                        <a href="#">Shop</a>
                                        <a href="#">Perfume manufacturing</a>
                                        <a href="{{ route('MerchantServices') }}">Merchant Services</a>
                                        <a href="#">Bank Accounts</a>
                                        <a href="#">checkout</a>
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
                            
                 </div>
			
			<!--//nav-->
		</header>
		</br></br>
		<div class="bannerhny-content1">
			<div class="single_slider  d-flex align-items-center slider_bg_1">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-xl-5 col-lg-5 col-md-6 col-12">
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
						<div class="col-xl-1 col-lg-1 col-md-1 col-12"></div>
						<div class="col-xl-6 col-lg-6 col-md-5 col-12">
						<img src="{{asset('assets/front/images/Group 453.png')}}" class="img-fluid wow fadeInRight" data-wow-duration="1s" data-wow-delay=".4s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.4s; animation-name: fadeInRight;" alt="" />
						
						</div>
						<div class="icon_links col-xl-2 offset-xl-8 col-lg-2 offset-lg-8 col-md-2 offset-md-8 col-11">
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
					<div class="col-xl-6 col-lg-6 col-md-5 col-12">
						<img src="{{asset('assets/front/images/Group 471.png')}}" class="img-fluid wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".4s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.4s; animation-name: fadeInLeft;" alt="" />
						
					</div>
						
						<div class="col-xl-1 col-lg-1 col-md-1 col-12"></div>
						<div class="col-xl-5 col-lg-5 col-md-6 col-12">
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
					
					<div class="col-xl-5 col-lg-5 col-md-6 col-12">
							<div class="slider_text2">
									<h3 class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".3s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.3s; animation-name: fadeInLeft;">perfume supply</h3>
									<div class="line wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".4s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.4s; animation-name: fadeInLeft;"></div>
									<div class="space"></div>
									<p class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".5s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.5s; animation-name: fadeInLeft;">After activating your merchant account, we start supplying perfumes and entering them into your account. We support the account with any new perfumes without any new payments.</p>
									<div class="type"></div>
							</div>
						</div>
						<div class="col-xl-1 col-lg-1 col-md-1 col-12"></div>
						<div class="col-xl-6 col-lg-6 col-md-5 col-12">
						<img src="{{asset('assets/front/images/Group 543.png')}}" class="img-fluid wow fadeInRight" data-wow-duration="1s" data-wow-delay=".4s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.4s; animation-name: fadeInRight;" alt="" />
						
						</div>
					
						
					</div>
				</div>
</section>
<!-- third section -->
<section class="forth">
                <div class="container">
					<div class="row align-items-center">
						<div class="col-xl-6 col-lg-6 col-md-5 col-12">
								<img src="{{asset('assets/front/images/Group 1786.png')}}" class="img-fluid wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".4s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.4s; animation-name: fadeInLeft;" alt="" />
							
							</div>
						
						<div class="col-xl-1 col-lg-1 col-md-1 col-12"></div>
						<div class="col-xl-5 col-lg-5 col-md-6 col-12">
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
					<div class="col-xl-5 col-lg-5 col-md-6 col-12">
							<div class="slider_text4">
									<h3 class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".3s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.3s; animation-name: fadeInLeft;">cargo management system</h3>
									<div class="line wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".4s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.4s; animation-name: fadeInLeft;"></div>
									<div class="space"></div>
									<p class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".5s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.5s; animation-name: fadeInLeft;">Your account is linked with the shipment management systems through multiple shipping companies on the same policy for the store and without additional costs.</p>
									<div class="type"></div>
							</div>
						</div>
						<div class="col-xl-1 col-lg-1 col-md-1 col-12"></div>
						<div class="col-xl-6 col-lg-6 col-md-5 col-12">
						<img src="{{asset('assets/front/images/Group 1900.png')}}" class="img-fluid wow fadeInRight" data-wow-duration="1s" data-wow-delay=".4s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.4s; animation-name: fadeInRight;" alt="" />
						
						</div>
					</div>
				</div>
</section>
<!-- fifth section -->
<section class="sixth">
                <div class="container">
					<div class="row align-items-center">
              	    	<div class="col-xl-6 col-lg-6 col-md-5 col-12">
					    	<img src="{{asset('assets/front/images/Group 2369.png')}}" class="img-fluid wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".4s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.4s; animation-name: fadeInLeft;" alt="" />
						</div>
						
						<div class="col-xl-1 col-lg-1 col-md-1 col-12"></div>
						<div class="col-xl-5 col-lg-5 col-md-6 col-12">
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
					
					<div class="col-xl-5 col-lg-5 col-md-6 col-12">
							<div class="slider_text6">
									<h3 class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".3s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.3s; animation-name: fadeInLeft;">Marketing</h3>
									<div class="line wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".4s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.4s; animation-name: fadeInLeft;"></div>
									<div class="space"></div>
									<p class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".5s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.5s; animation-name: fadeInLeft;">We carry out promotional campaigns through social media platforms, celebrities or exhibitions to support the brand, which supports you in selling and winning customers.</p>
									<div class="type"></div>
							</div>
						</div>
						<div class="col-xl-1 col-lg-1 col-md-1 col-12"></div>
						<div class="col-xl-6 col-lg-6 col-md-5 col-12">
						<img src="{{asset('assets/front/images/Group 3576.png')}}" class="img-fluid wow fadeInRight" data-wow-duration="1s" data-wow-delay=".4s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.4s; animation-name: fadeInRight;" alt="" />
						
						</div>
					
						
					</div>
				</div>
</section>
<!-- seventh section -->
<section class="eight">
                <div class="container">
					<div class="row align-items-center">
              		<div class="col-xl-6 col-lg-6 col-md-5 col-12">
						<img src="{{asset('assets/front/images/Group 2247.png')}}" class="img-fluid wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".4s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.4s; animation-name: fadeInLeft;" alt="" />
						
						</div>
						
						<div class="col-xl-1 col-lg-1 col-md-1 col-12"></div>
						<div class="col-xl-5 col-lg-5 col-md-6 col-12">
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
					<div class="col-xl-5 col-lg-5 col-md-6 col-12">
							<div class="slider_text8">
									<h3 class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".3s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.3s; animation-name: fadeInLeft;">Advertising and design management</h3>
									<div class="line wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".4s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.4s; animation-name: fadeInLeft;"></div>
									<div class="space"></div>
									<p class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".5s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.5s; animation-name: fadeInLeft;">We provide paid advertising management services for free to any merchant on the site, and we also provide him with the necessary designs for the campaign.</p>
									<div class="type"></div>
							</div>
						</div>
						<div class="col-xl-1 col-lg-1 col-md-1 col-12"></div>
						<div class="col-xl-6 col-lg-6 col-md-5 col-12">
						<img src="{{asset('assets/front/images/Group 2319.png')}}" class="img-fluid wow fadeInRight" data-wow-duration="1s" data-wow-delay=".4s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.4s; animation-name: fadeInRight;" alt="" />
						
						</div>
					
						
					</div>
				</div>
</section>
<!-- nine section -->
<section class="ten">
                <div class="container">
					<div class="row align-items-center">
              		<div class="col-xl-6 col-lg-6 col-md-5 col-12">
						<img src="{{asset('assets/front/images/Group 2371.png')}}" class="img-fluid wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".4s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.4s; animation-name: fadeInLeft;" alt="" />
						
						</div>
						
						<div class="col-xl-1 col-lg-1 col-md-1 col-12"></div>
						<div class="col-xl-5 col-lg-5 col-md-6 col-12">
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
				<h5><span><i class="fas fa-info-circle"></i></span>The number is limited and preference is determined by region, capital and experience</h5>
				<div class="row">
					<div class="col-xl-7 col-lg-7 col-md-7 col-12">
				<form action="/action_page.php">
      
					<div class="row">
					<div class="col-xl-6 col-lg-6 col-md-6 col-12">
						<input type="text" id="email" name="email" placeholder="email" spellcheck="false" data-ms-editor="true">
						<input type="text" id="fname" name="firstname" placeholder="name" spellcheck="false" data-ms-editor="true">
						<div class="telphone">
						<input type="tel" class="" placeholder="Mobile number">
						<select name="cars" id="cars">
							<option value="volvo">+966</option>
							<option value="saab">+965</option>
							<option value="opel">+967</option>
							<option value="audi">+964</option>
						</select>
						</div>
					</div>

					<div class="col-xl-6 col-lg-6 col-md-6 col-12">
					
						<input type="text" id="adr" name="address" placeholder="address" spellcheck="false" data-ms-editor="true">
						<input type="text" id="The_required_number" name="The_required_number" placeholder="The required number" spellcheck="false" data-ms-editor="true">            
						<input type="text" id="share_capital" name="share_capital" placeholder="share capital" spellcheck="false" data-ms-editor="true" data-toggle="tooltip" data-placement="top" title="Preference is determined by money">           
						<input type="submit" value="Submit" class="btn">

					</div>
					
					</div>
				
                </form>
				</div>
				<div class="col-xl-5 col-lg-5 col-md-5 col-12">
					<p>
					This text is an example of text that can be replaced in the same space.This text is an example of text that can be replaced in the same space.This text is an example of text that can be replaced in the same space.This text is an example of text that can be replaced in the same space.This text is an example of text that can be replaced in the same space.This text is an example of text that can be replaced in the same space.
					</p>
				<div class="icon_links col-md-2 offset-md-2">
						            <ul class="icons mt-4">

										<li><a class="" href="#"><i class="fab fa-facebook-f"></i></a>
										</li>
										<li><a class="" href="#"><i class="fab fa-twitter"></i></a>
										</li>
										<li><a class="" href="#"><i class="fas fa-envelope"></i></a>
										</li>	
										<li><a class="" href="#"><i class="fab fa-instagram"></i></a>
										</li>							
								
					            	</ul>
						</div>
				</div>
				</div>
			</article>
		</div>
		</div>
</section>

<section class="second_footer">
			<div class="container">
					<div class="row">
						<div class="col-xl-12">
						<p class="copy_right text-center">

						Copyright ©<script>document.write(new Date().getFullYear());</script>  All rights reserved to Al-Riyadah Company</a>

						</p>
					</div>
				</div>
            </div>

</section>

	  <script src="{{asset('assets/front/js/jquery-2.1.4.min.js')}}"></script>
<script src="{{asset('assets/front/js/jquery-3.3.1.min.js')}}"></script>
 <!-- cart-js -->
 <script src="{{asset('assets/front/js/minicart.js')}}"></script>

<script src="{{asset('assets/front/js/jquery.magnific-popup.js')}}"></script>
<!--//pop-up-box-->

<script src="{{asset('assets/front/js/owlcarousel2.2.1.js')}}"></script>
<script src="{{asset('assets/front/js/wow.min.js')}}"></script>
<script src="{{asset('assets/front/js/wow.js')}}"></script>
<script src="{{asset('assets/front/js/all.min.js')}}"></script>
<script src="{{asset('assets/front/js/fontawesome.min.js')}}"></script>
<script src="{{asset('assets/front/js/popper1.16.min.js')}}"></script>

<script src="{{asset('assets/front/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/front/js/main.js')}}"></script>

</body>
</html>


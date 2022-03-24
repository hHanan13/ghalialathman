
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
                        <div class="col-xl-2 col-lg-2 col-md-2 col-4">
                            <a class="navbar-brand" href="#index.html">
                                <img src="{{asset('assets/front/images/logoblack.png')}}" alt="Your logo" title="Your logo" style="height:150px;" />
                            </a> 
                        </div>
				
                        <div class="col-xl-5 col-lg-5 col-md-5 col-8 d-flex align-items-center" id="">
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
				 	<div class="col-xl-2 col-lg-2 col-md-1 col-2 d-flex justify-content-end align-items-center">
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
		<div class="bannerhny-content1 content">
			<div class="single_slider  d-flex align-items-center slider_bg_1">
				<div class="container">
					<div class="row align-items-center">
                    <div class="col-xl-5 col-lg-5 col-md-6 col-12">
							<div class="slider_text">
									<h3 class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".3s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.3s; animation-name: fadeInLeft;">Perfume industry</h3>
									<div class="space"></div>
									<p class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".5s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.5s; animation-name: fadeInLeft;">We start with you from supplying perfumes to preparing your account as a merchant on the site and linking your account to inventory management systems and shipping companies in a timely manner. We also provide you with training on operations and business and support you with services .&nbsp;</p>
											</br>
											</br>
											<div class="icon_links col-md-12 ">
						            <ul class="icons">

										<li><a class="youtube" href="#"><i class="fab fa-linkedin-in"></i></a>
										</li>
										<li><a class="facebook" href="#"><i class="fab fa-twitter"></i></a>
										</li>
										<li><a class="google" href="#"><i class="fab fa-facebook-f"></i></a>
										</li>								
								
					            	</ul>
						</div>
									
							</div>
						</div>
						<div class="col-xl-1 col-lg-1 col-md-1 col-12"></div>
                        <div class="col-xl-6 col-lg-6 col-md-5 col-12">
						<img src="{{asset('assets/front/images/Group 4510.png')}}" class="manufacturing_img img-fluid wow fadeInRight" data-wow-duration="1s" data-wow-delay=".4s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.4s; animation-name: fadeInRight;" alt="" />
						
						</div>
                        
					</div>
				</div>
			</div>
		</div>

</section>
<!-- first section -->
<section class="eleven">
                <div class="container">
					<div class="row align-items-center">
				    	
						<div class="col-xl-6 col-lg-6 col-md-5 col-12">
						  <img src="{{asset('assets/front/images/Group 4506.png')}}" class="img-fluid wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".4s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.4s; animation-name: fadeInLeft;" alt="" />
						
						</div>
						<div class="col-xl-5 col-lg-5 col-md-6 col-12">
							<div class="slider_text10">
									<h3 class="wow fadeInRight" data-wow-duration="1s" data-wow-delay=".3s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.3s; animation-name: fadeInRight;">The stage of choosing the aromatic note</h3>
									<div class="line wow fadeInRight" data-wow-duration="1s" data-wow-delay=".4s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.4s; animation-name: fadeInRight;"></div>
									<div class="space"></div>
									<p class="wow fadeInRight" data-wow-duration="1s" data-wow-delay=".5s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.5s; animation-name: fadeInRight;">It begins with choosing and designing the note, the aromatic base, the components, the aromatic extract, the focus and the selection of the size.</p>
									<div class="space"></div>
									<p class="wow fadeInRight" data-wow-duration="1s" data-wow-delay=".5s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.5s; animation-name: fadeInRight;">After opening an account for you, the specialized team will guide you to the most important aromatic notes, and you can design your own note    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a class="remark">   See the page How to choose the aromatic note</a></p>

							</div>
						</div>
						
					</div>
				</div>
</section>
<!-- second section -->
<section class="twelve">
                <div class="container">
					<div class="row align-items-center">
					
					<div class="col-xl-5 col-lg-5 col-md-6 col-12">
							<div class="slider_text11">
									<h3 class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".3s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.3s; animation-name: fadeInLeft;">The stage of designing the identity and shape of the fragrance</h3>
									<div class="line wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".4s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.4s; animation-name: fadeInLeft;"></div>
									<div class="space"></div>
									<p class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".5s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.5s; animation-name: fadeInLeft;">Where this stage begins with the selection and design of glass containers, choosing the most appropriate size, pump, covers, accessories, coloring, carton and packaging.</p>
							</div>
						</div>
						<div class="col-xl-1 col-lg-1 col-md-1 col-12"></div>
						<div class="col-xl-6 col-lg-6 col-md-5 col-12">
			      			<img src="{{asset('assets/front/images/Group 4515.png')}}" class="img-fluid wow fadeInRight" data-wow-duration="1s" data-wow-delay=".4s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.4s; animation-name: fadeInRight;" alt="" />
						
						</div>
					
						
					</div>
				</div>
</section>
<!-- third section -->
<section class="thirteen">
                <div class="container">
					<div class="row align-items-center">
					<div class="col-xl-6 col-lg-6 col-md-5 col-12">
						<img src="{{asset('assets/front/images/Group 3754.png')}}" class="img-fluid wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".4s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.4s; animation-name: fadeInLeft;" alt="" />
					</div>
						
						<div class="col-xl-1 col-lg-1 col-md-1 col-12"></div>
						<div class="col-xl-5 col-lg-5 col-md-6 col-12">
							<div class="slider_text12">
									<h3 class="wow fadeInRight" data-wow-duration="1s" data-wow-delay=".3s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.3s; animation-name: fadeInRight;">The stage of preparing your store</h3>
									<div class="line wow fadeInRight" data-wow-duration="1s" data-wow-delay=".4s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.4s; animation-name: fadeInRight;"></div>
									<div class="space"></div>
									<p class="wow fadeInRight" data-wow-duration="1s" data-wow-delay=".5s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.5s; animation-name: fadeInRight;">We provide you with storage space in Riyadh, Jeddah and Dammam. An account as a merchant is linked to inventory management systems automatically, which supports the management of inventory movement, distribution and receipt movement upon supply for each new and upon delivery.</p>
							</div>
						</div>
					
					</div>
				</div>
</section>
<!-- forth section -->
<section class="fourteen">
                <div class="container">
					<div class="row align-items-center">
					
					<div class="col-xl-5 col-lg-5 col-md-6 col-12">
							<div class="slider_text13">
									<h3 class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".3s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.3s; animation-name: fadeInLeft;">Administrative support stage</h3>
									<div class="line wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".4s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.4s; animation-name: fadeInLeft;"></div>
									<div class="space"></div>
									<p class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".5s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.5s; animation-name: fadeInLeft;">Your account is linked with the shipment management systems through multiple shipping companies on the same policy for the store and without additional costs.</p>
							</div>
						</div>
						<div class="col-xl-1 col-lg-1 col-md-1 col-12"></div>
						<div class="col-xl-6 col-lg-6 col-md-5 col-12">
						<img src="{{asset('assets/front/images/Group 4516.png')}}" class="img-fluid wow fadeInRight" data-wow-duration="1s" data-wow-delay=".4s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.4s; animation-name: fadeInRight;" alt="" />
						
						</div>
					
						
					</div>
				</div>
</section>
<!-- fifth section -->
<section class="fifteen">
                <div class="container">
					<div class="row align-items-center">
              		<div class="col-xl-6 col-lg-6 col-md-5 col-12">
						<img src="{{asset('assets/front/images/Group 4517.png')}}" class="img-fluid wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".4s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.4s; animation-name: fadeInLeft;" alt="" />
					
					</div>
						
						<div class="col-xl-1 col-lg-1 col-md-1 col-12"></div>
						<div class="col-xl-5 col-lg-5 col-md-6 col-12">
							<div class="slider_text14">
									<h3 class="wow fadeInRight" data-wow-duration="1s" data-wow-delay=".3s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.3s; animation-name: fadeInRight;">Advertising launch stage</h3>
									<div class="line wow fadeInRight" data-wow-duration="1s" data-wow-delay=".4s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.4s; animation-name: fadeInRight;"></div>
									<div class="space"></div>
									<p class="wow fadeInRight" data-wow-duration="1s" data-wow-delay=".5s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.5s; animation-name: fadeInRight;">Your account is linked to many payment systems that support you in increasing sales more easily.</p>
							</div>
						</div>
					
					</div>
				</div>
</section>
<!-- sixth section -->
<section class="sixteen">
                <div class="container">
					<div class="row align-items-center">
					
					<div class="col-xl-5 col-lg-5 col-md-6 col-12">
							<div class="slider_text15">
									<h3 class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".3s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.3s; animation-name: fadeInLeft;">Representing you in exhibitions</h3>
									<div class="line wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".4s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.4s; animation-name: fadeInLeft;"></div>
									<div class="space"></div>
									<p class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".5s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.5s; animation-name: fadeInLeft;">We carry out promotional campaigns through social media platforms, celebrities or exhibitions to support the brand, which supports you in selling and winning customers.</p>
							</div>
						</div>
						<div class="col-xl-1 col-lg-1 col-md-1 col-12"></div>
						<div class="col-xl-6 col-lg-6 col-md-5 col-12">
					     	<img src="{{asset('assets/front/images/Group 4518.png')}}" class="img-fluid wow fadeInRight" data-wow-duration="1s" data-wow-delay=".4s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.4s; animation-name: fadeInRight;" alt="" />
						
						</div>
					
					</div>
				</div>
</section>
<!-- seventh section -->
<section class="seventeen">
                <div class="container">
					<div class="row align-items-center">
              		<div class="col-xl-6 col-lg-6 col-md-5 col-12">
						<img src="{{asset('assets/front/images/Group 4328.png')}}" class="img-fluid wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".4s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.4s; animation-name: fadeInLeft;" alt="" />
						
					</div>
						
						<div class="col-xl-1 col-lg-1 col-md-1 col-12"></div>
						<div class="col-xl-5 col-lg-5 col-md-6 col-12">
							<div class="slider_text16">
									<h3 class="wow fadeInRight" data-wow-duration="1s" data-wow-delay=".3s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.3s; animation-name: fadeInRight;">Store management service</h3>
									<div class="line wow fadeInRight" data-wow-duration="1s" data-wow-delay=".4s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.4s; animation-name: fadeInRight;"></div>
									<div class="space"></div>
									<p class="wow fadeInRight" data-wow-duration="1s" data-wow-delay=".5s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.5s; animation-name: fadeInRight;">We provide training and continuous support to support you in selling and managing your account as a merchant.</p>
							</div>
						</div>
					
						
					</div>
				</div>
</section>
<!-- eight section -->

<section class="form_register">
	<div class="wrapper">
		<div class="container">
			<article class="part card-details">
				<h1>
				Perfume industry
				</h1>
				<h5><span><i class="fas fa-info-circle"></i></span>The number is limited and preference is determined by region, capital and experience</h5>
				<div class="row">
					<div class="col-12">
				<form action="/action_page.php">
      
					<div class="row">
					<div class="col-xl-4 col-lg-4 col-md-4 col-12">
						<input type="text" id="email" name="email" placeholder="email" spellcheck="false" data-ms-editor="true">
						<input type="text" id="fname" name="firstname" placeholder="name" spellcheck="false" data-ms-editor="true">
						
					</div>

					<div class="col-xl-4 col-lg-4 col-md-4 col-12">
					
						<input type="text" id="adr" name="address" placeholder="city" spellcheck="false" data-ms-editor="true">
						<input type="text" id="The_required_number" name="The_required_number" placeholder="The required number" spellcheck="false" data-ms-editor="true">            

					</div>
					<div class="col-xl-4 col-lg-4 col-md-4 col-12">
					<div class="telphone">
						<input type="tel" class="" placeholder="Mobile number">
						<select name="cars" id="cars">
							<option value="volvo">+966</option>
							<option value="saab">+965</option>
							<option value="opel">+967</option>
							<option value="audi">+964</option>
						</select>
						</div>
						<input type="text" id="share_capital" name="share_capital" placeholder="share capital" spellcheck="false" data-ms-editor="true" data-toggle="tooltip" data-placement="top" title="Preference is determined by money">           
						<input type="submit" value="Submit" class="btn">

					</div>
					
					</div>
				
                </form>
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
<!--pop-up-box-->
<script src="{{asset('assets/front/js/jquery.magnific-popup.js')}}"></script>
<!--//search-bar-->
<!-- disable body scroll which navbar is in active -->

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


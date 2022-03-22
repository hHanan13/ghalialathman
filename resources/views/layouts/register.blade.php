
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
  <!-- Template CSS -->
  <link href="//fonts.googleapis.com/css?family=Oswald:300,400,500,600&display=swap" rel="stylesheet">
  <link href="//fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,900&display=swap" rel="stylesheet">
 
</head>
<body>
<!--w3l-banner-slider-main-->
<section id="wrapper" class="w3l-banner-slider-main">
    <header class="tophny-header main">
			
			<!--/nav-->
				<div class="container serarc-fluid">
                    <div class="row">
                        <div class="col-xl-2 col-lg-2 col-md-3 col-6">
                        <a class="navbar-brand" href="#index.html">
								<img src="{{asset('assets/front/images/logo-4.png')}}" alt="Your logo" title="Your logo" style="height:150px;" />
							</a> 
                        </div>
				
                    <div class="col-xl-5 col-lg-4 col-md-4 col-5 header-menu d-flex align-items-center justify-content-start">
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
					
					<ul class="top-hnt-right-content col-xl-3 col-lg-3 col-md-3 col-7">
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
					<div class="col-xl-2 col-lg-3 col-md-2 col-4 d-flex justify-content-end align-items-center">
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

</section>
<section class="loginWrapper col-11">
   <div class="container">
        <div class="row">
                    <ul class="tabs col-xl-2">
                        <li class="active"><span><img src="{{asset('assets/front/images/Group152.png')}}" class="img-fluid log" alt="" /></span>&nbsp;  Login</li>
                        <li><span><img src="{{asset('assets/front/images/Group151.png')}}" class="img-fluid log" alt="" /></span>&nbsp;&nbsp;&nbsp;Register</li>
                    </ul>

                    <ul class="tab__content col-xl-10">
            
                        <li class="active">
                            <div class="content__wrapper">
                                <form method="POST" action="">
                                  <div class="row">
                                     <div class="col-xl-8 col-lg-8 col-md-12 col-12">
                                            <div class="form-group row">
                                                        <label class="col-xl-3 col-lg-3 col-md-3 col-2 col-form-label">Email</label>
                                                        <div class="col-xl-9 col-lg-9 col-md-9 col-10">
                                                            <input type="email" name="email" placeholder="">
                                                        </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-xl-3 col-lg-3 col-md-3 col-2 col-form-label">Password</label>
                                                <div class="col-xl-9 col-lg-9 col-md-9 col-10">
                                                                <input type="password" name="password" placeholder="">
                                                                
                                                </div>

                                            </div>
                                            <div class="col-12">
                                                        <a href="#" class="eye"><img src="{{asset('assets/front/images/eye.png')}}" class="img-fluid" alt="" /></a>
                                            </div>
                                            <div class="col-xl-12 col-lg-10 col-md-10 col-12 form-group text-center">
                                                        <input type="checkbox" tabindex="3" class="check" name="remember" id="remember">
                                                        <label class="remember" for="remember"> Remember Me</label>
                                            </div>
                                            <div class="col-12 text-center">
                                                <input type="submit" value="Login" name="login">
                                            </div>
                                            <div class="col-12">
                                                    <div class="text-center">
                                                                <a href="#" tabindex="5" class="forgot-password">Forgot Password?</a>
                                                        </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-12 col-12">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>
                    
                        <li>
                            <div class="content__wrapper">
                                <form method="POST" action="">
                                  <div class="row">
                                        <div class="col-xl-8 col-lg-8 col-md-12 col-12">
                                        
                                            <div class="form-group row">
                                                    <label class="col-xl-3 col-lg-3 col-md-3 col-3 col-form-label">Email</label>
                                                    <div class="col-xl-9 col-lg-9 col-md-9 col-9">
                                                        <input type="email" name="email" placeholder="">
                                                    </div>
                                            </div>
                                            <div class="form-group row">
                                                    <label class="col-xl-3 col-lg-3 col-md-3 col-3 col-form-label">First Name</label>
                                                    <div class="col-xl-9 col-lg-9 col-md-9 col-9">
                                                        <input type="name" name="name" placeholder="">
                                                    </div>
                                            </div>
                                            <div class="form-group row">
                                                    <label class="col-xl-3 col-lg-3 col-md-3 col-3 col-form-label">Last Name</label>
                                                    <div class="col-xl-9 col-lg-9 col-md-9 col-9">
                                                        <input type="name" name="name" placeholder="">
                                                    </div>
                                            </div>
                                            <div class="form-group row">
                                                    <label class="col-xl-3 col-lg-3 col-md-3 col-3 col-form-label">Store Name</label>
                                                    <div class="col-xl-9 col-lg-9 col-md-9 col-9">
                                                        <input type="name" name="sname" placeholder="">
                                                    </div>
                                            </div>
                                            <div class="form-group row">
                                                    <label class="col-xl-3 col-lg-3 col-md-3 col-3 col-form-label">Store Link</label>
                                                    <div class="col-xl-9 col-lg-9 col-md-9 col-9">
                                                        <input type="url" name="slink" placeholder="">
                                                    </div>
                                            </div>
                                            <div class="form-group row">
                                                    <label class="col-xl-3 col-lg-3 col-md-3 col-3 col-form-label">Phone</label>
                                                    <div class="col-xl-9 col-lg-9 col-md-9 col-9">
                                                        <input type="tel" name="phone" placeholder="">
                                                    </div>
                                            </div>
                                        
                                            <div class="col-12 form-group text-center">
                                                        <input type="checkbox" tabindex="3" class="check1" name="remember" id="remember">
                                                        <label class="remember" for="remember">I have read and agree to the Terms & Conditions.</label>
                                            </div>
                                            <div class="col-12 text-center">
                                                <input type="submit" value="Register" name="Register">
                                            </div>
                                            <div class="col-lg-12">
                                                    <div class="text-center">
                                                        <a class="title">I'm Client.</a>
                                                                <a href="#" tabindex="5" class="forgot-password">Login</a>
                                                        </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-12 col-12">
                                            <div class="note">
                                            <a href="#"><img src="{{asset('assets/front/images/Group160.png')}}" class="img-fluid" alt="" /></a>
                                                <h5>Your personal data will be used to support your experience throughout this website.</h5>
                                            </div>
                                        </div>
                                  </div>
                                </form>
                               
                            </div>
                        </li>
            </ul>
        </div>
    </div>
</section>
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

<script src="{{asset('assets/front/js/jquery.magnific-popup.js')}}"></script>
<!--//pop-up-box-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function(){
    
    // Variables
    var clickedTab = $(".tabs > .active");
    var tabWrapper = $(".tab__content");
    var activeTab = tabWrapper.find(".active");
    var activeTabHeight = activeTab.outerHeight();
    
    // Show tab on page load
    activeTab.show();
    
    // Set height of wrapper on page load
    tabWrapper.height(activeTabHeight);
    
    $(".tabs > li").on("click", function() {
        
        // Remove class from active tab
        $(".tabs > li").removeClass("active");
        
        // Add class active to clicked tab
        $(this).addClass("active");
        
        // Update clickedTab variable
        clickedTab = $(".tabs .active");
        
        // fade out active tab
        activeTab.fadeOut(250, function() {
            
            // Remove active class all tabs
            $(".tab__content > li").removeClass("active");
            
            // Get index of clicked tab
            var clickedTabIndex = clickedTab.index();

            // Add class active to corresponding tab
            $(".tab__content > li").eq(clickedTabIndex).addClass("active");
            
            // update new active tab
            activeTab = $(".tab__content > .active");
            
            // Update variable
            activeTabHeight = activeTab.outerHeight();
            
            // Animate height of wrapper to new tab height
            tabWrapper.stop().delay(50).animate({
                height: activeTabHeight
            }, 500, function() {
                
                // Fade in active tab
                activeTab.delay(50).fadeIn(250);
                
            });
        });
    });
});
</script>
<script src="{{asset('assets/front/js/owlcarousel2.2.1.js')}}"></script>
<script src="{{asset('assets/front/js/wow.min.js')}}"></script>
<script src="{{asset('assets/front/js/wow.js')}}"></script>
<script src="{{asset('assets/front/js/all.min.js')}}"></script>
<script src="{{asset('assets/front/js/fontawesome.min.js')}}"></script>
<script src="{{asset('assets/front/js/popper1.16.min.js')}}"></script>
<script>
              new WOW().init();
              </script>

<script src="{{asset('assets/front/js/bootstrap.min.js')}}"></script>
<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();   
});
</script>
<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "230px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>

</body>
</html>


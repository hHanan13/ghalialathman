
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
		<header class="tophny-header" style="z-index: 9999;">
			<div class="container-fluid" style="height: 60px;">
            <a class="navbar-brand1" href="#index.html">
								<img src="{{asset('assets/front/images/logo-4.png')}}" alt="Your logo" title="Your logo" style="height:150px;" />
							</a> 
			</div>
			<!--/nav-->
		
			<!--//nav-->
		</header>
		

</section>
<section class="loginWrapper col-lg-11">
  
  <ul class="tabs">
      <li class="active"><span><img src="{{asset('assets/front/images/Group152.png')}}" class="img-fluid log" alt="" /></span>&nbsp; &nbsp;&nbsp;&nbsp; Login</li>
      <li><span><img src="{{asset('assets/front/images/Group151.png')}}" class="img-fluid log" alt="" /></span>&nbsp;&nbsp;&nbsp;Register</li>
  </ul>

  <ul class="tab__content">
  
      <li class="active">
          <div class="content__wrapper">
              <form method="POST" action="">
                <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" name="email" placeholder="">
                        </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                                <input type="password" name="password" placeholder="">
                        </div>

               </div>
               <div class="col-12">
                        <a href="#" class="eye"><img src="{{asset('assets/front/images/eye.png')}}" class="img-fluid" alt="" /></a>
                </div>
                <div class="form-group text-center">
							<input type="checkbox" tabindex="3" class="check" name="remember" id="remember">
							<label class="remember" for="remember"> Remember Me</label>
				</div>
                  <input type="submit" value="Login" name="login">
                  <div class="col-lg-12">
                        <div class="text-center">
                                    <a href="#" tabindex="5" class="forgot-password">Forgot Password?</a>
                            </div>
                    </div>
              </form>
          </div>
      </li>
 
      <li>
          <div class="content__wrapper">
              <form method="POST" action="">
              
                  <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" name="email" placeholder="">
                        </div>
                </div>
                <div class="form-group row">
                        <label class="col-sm-2 col-form-label">First Name</label>
                        <div class="col-sm-10">
                            <input type="name" name="name" placeholder="">
                        </div>
                </div>
                <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Last Name</label>
                        <div class="col-sm-10">
                            <input type="name" name="name" placeholder="">
                        </div>
                </div>
                <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Store Name</label>
                        <div class="col-sm-10">
                            <input type="name" name="sname" placeholder="">
                        </div>
                </div>
                <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Store Link</label>
                        <div class="col-sm-10">
                            <input type="url" name="slink" placeholder="">
                        </div>
                </div>
                <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Phone</label>
                        <div class="col-sm-10">
                            <input type="tel" name="phone" placeholder="">
                        </div>
                </div>
               
                <div class="form-group text-center">
							<input type="checkbox" tabindex="3" class="check1" name="remember" id="remember">
							<label class="remember" for="remember">I have read and agree to the Terms & Conditions.</label>
				</div>
                  <input type="submit" value="Register" name="Register">
                  <div class="col-lg-12">
                        <div class="text-center">
                            <a class="title">I'm Client.</a>
                                    <a href="#" tabindex="5" class="forgot-password">Login</a>
                            </div>
                    </div>
              </form>
              <div class="note">
                <a href="#"><img src="{{asset('assets/front/images/Group160.png')}}" class="img-fluid" alt="" /></a>
                    <h5>Your personal data will be used to support your experience throughout this website.</h5>
              </div>
          </div>
      </li>
  </ul>
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



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
	<div class="top-header-content">
		<header class="tophny-header toph">
			<div class="container-fluid" style="height: 40px;">
				<div class="top-right-strip row">
					<!--/left-->
					<!-- locale -->
					<!-- @if(App::getLocale() == 'en')
						<a href="{{ route('homepage') }}">en</a>
					
					@else
					<a href="{{ route('') }}">ar</a>
					@endif -->
					<ul class="local log">
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

            <div class="container serarc-fluid">
                    <div class="row">
                        <div class="col-xl-2 col-lg-2 col-md-3 col-7">
                            <a class="navbar-brand" href="#index.html">
                                <img src="{{asset('assets/front/images/logoblack.png')}}" alt="Your logo" title="Your logo" style="height:140px;" />
                            </a> 
                        </div>
				
                        <div class="col-xl-5 col-lg-5 col-md-5 col-5 align-items-center" id="center_navbar">
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
                         <div class="search-right col-xl-1 col-lg-1 col-md-1 col-1">

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
					
                      <ul class="top-hnt-right-content col-xl-2 col-lg-2 col-md-2 col-3">
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
                                <div class="col-xl-2 col-lg-2 col-md-2 col-1 d-flex justify-content-end align-items-center">
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
		
            </header>
    <div class="bannerhny-content cartban">

							<!--/banner-slider-->
		<div class="content-baner-inf">
             <div class="container">
                   <div class="row">
                           <div class="shopping-cart col-lg-8">

                            <div class="column-labels">
                                    <label class="product-removal"></label>
                                    <label class="product-image">Product</label>
                                    <label class="product-details">Product Name</label>
                                    <label class="product-price">Price</label>
                                    <label class="product-quantity">Quantity</label>
                                    <label class="product-line-price">Total</label>
                            </div>

                            <div class="product">
                                    <div class="product-removal">
                                        <button class="remove-product">
                                          <i class="far fa-trash-alt"></i>
                                        </button>
                                    </div>
                                    <div class="product-image">
                                     <img src="{{asset('assets/front/images/workshop.png')}}" alt="" title=""  />
                                    </div>
                                    <div class="product-details">
                                        <div class="product-title">Dingo Dog Bones</div>
                                    </div>
                                    <div class="product-price">12.99 SAR</div>
                                    <div class="product-quantity">
                                    <div class="counter">
																	<span class="down" onClick='decreaseCount(event, this)'>-</span>
																	<input type="text" value="1">
																	<span class="up"  onClick='increaseCount(event, this)'>+</span>
																</div>
                                    </div>
                                    
                                    <div class="product-line-price">25.98</div>
                            </div>

                            <div class="product">
                                    <div class="product-removal">
                                       <button class="remove-product">
                                         <i class="far fa-trash-alt"></i>
                                        </button>
                                    </div>
                                    <div class="product-image">
                                    <img src="{{asset('assets/front/images/workshop.png')}}" alt="" title=""  />
                                    </div>
                                    <div class="product-details">
                                        <div class="product-title">Nutro™ Adult Lamb and Rice Dog Food</div>
                                    </div>
                                    <div class="product-price">45.99 SAR</div>
                                    <div class="product-quantity">
                                    <div class="counter">
																	<span class="down" onClick='decreaseCount(event, this)'>-</span>
																	<input type="text" value="1">
																	<span class="up"  onClick='increaseCount(event, this)'>+</span>
																</div>                                    </div>
                                   
                                    <div class="product-line-price">45.99</div>
                            </div>
                                
                           </div>
                           <div class="col-lg-1"></div>
                           <div class="col-lg-3">
                               <div class="row">
                                    <div class="cart_shop col-lg-12">
                                                <div class="totals">
                                                        <div class="totals-item">
                                                            <h4>Cart Total</h4>
                                                            <label>Subtotal</label>
                                                            <div class="totals-value" id="cart-subtotal">71.97</div>
                                                        </div>
                                                        <div class="totals-item">
                                                            <h5>Enter your address to view shipping options</h5>
                                                            <label><u>Shipping cost calculation</u></label>
                                                        </div>
                                                        
                                                        <div class="totals-item totals-item-total">
                                                            <label>Total</label>
                                                            <div class="totals-value" id="cart-total">90.57</div>
                                                        </div>
                                                </div>
                                            
                                        </div>
                                    <button class="checkout col-lg-12">Checkout</button>

                                    <div class="card1 col-lg-12 mt-3">
                                                        <div class="card-body">
                                                            <form>
                                                                <div class="form-group"> <label>discount coupon</label>
                                                                    <div class="input-group"> <input type="text" class="form-control coupon" name="" placeholder="Apply the discount coupon here"> <span class="input-group-append"> <button class="btn btn-primary btn-apply coupon">Apply</button> </span> </div>
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
@include('front.includes.footer')

	  <script src="{{asset('assets/front/js/jquery-2.1.4.min.js')}}"></script>

	  <script data-require="jquery@3.1.1" data-semver="3.1.1" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
      <script src="{{asset('assets/front/js/jquery-3.3.1.min.js')}}"></script>
	  <script src="{{asset('assets/front/js/owlcarousel2.2.1.js')}}"></script>
<script src="{{asset('assets/front/js/wow.min.js')}}"></script>
<script src="{{asset('assets/front/js/wow.js')}}"></script>
<script src="{{asset('assets/front/js/all.min.js')}}"></script>
<script src="{{asset('assets/front/js/fontawesome.min.js')}}"></script>

<script>
              new WOW().init();
    </script>

<script src="{{asset('assets/front/js/main.js')}}"></script>
<script src="{{asset('assets/front/js/popper1.16.min.js')}}"></script>
<script src="{{asset('assets/front/js/bootstrap.min.js')}}"></script>

<script>
    /* Set rates + misc */
        var taxRate = 0.05;
        var shippingRate = 15.00; 
        var fadeTime = 300;
        /* Assign actions */
        $('.product-quantity input').change( function() {
        updateQuantity(this);
        });

        $('.product-removal button').click( function() {
        removeItem(this);
        });

        /* Recalculate cart */
        function recalculateCart()
        {
        var subtotal = 0;
        
        /* Sum up row totals */
        $('.product').each(function () {
            subtotal += parseFloat($(this).children('.product-line-price').text());
        });
        
        /* Calculate totals */
        var tax = subtotal * taxRate;
        var shipping = (subtotal > 0 ? shippingRate : 0);
        var total = subtotal + tax + shipping;
        
        /* Update totals display */
        $('.totals-value').fadeOut(fadeTime, function() {
            $('#cart-subtotal').html(subtotal.toFixed(2));
            $('#cart-tax').html(tax.toFixed(2));
            $('#cart-shipping').html(shipping.toFixed(2));
            $('#cart-total').html(total.toFixed(2));
            if(total == 0){
            $('.checkout').fadeOut(fadeTime);
            }else{
            $('.checkout').fadeIn(fadeTime);
            }
            $('.totals-value').fadeIn(fadeTime);
        });
        }

        /* Update quantity */
        function updateQuantity(quantityInput)
        {
        /* Calculate line price */
        var productRow = $(quantityInput).parent().parent();
        var price = parseFloat(productRow.children('.product-price').text());
        var quantity = $(quantityInput).val();
        var linePrice = price * quantity;
        
        /* Update line price display and recalc cart totals */
        productRow.children('.product-line-price').each(function () {
            $(this).fadeOut(fadeTime, function() {
            $(this).text(linePrice.toFixed(2));
            recalculateCart();
            $(this).fadeIn(fadeTime);
            });
        });  
        }

        /* Remove item from cart */
        function removeItem(removeButton)
        {
        /* Remove row from DOM and recalc cart total */
        var productRow = $(removeButton).parent().parent();
        productRow.slideUp(fadeTime, function() {
            productRow.remove();
            recalculateCart();
        });
        }
</script>
</body>
</html>


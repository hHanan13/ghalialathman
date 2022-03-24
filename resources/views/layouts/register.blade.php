
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


<script src="{{asset('assets/front/js/jquery.magnific-popup.js')}}"></script>
<!--//pop-up-box-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

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


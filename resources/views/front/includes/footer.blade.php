<section class="w3l-footer-22">
      <!-- footer-22 -->
      <div class="footer-hny pt-5">
          <div class="container">
              <div class="text-txt row pb-5">
                  <div class="left-side col-lg-3">
                      <a class="logo-footer" href="/">
                      <img src="{{asset('assets/front/images/logo-4.png')}}" alt="Your logo" title="Your logo" style="height:150px;" />
                      </a>
                  </div>
                    
                    <div class="sub-columns col-lg-9 pl-lg-5">
                        <div class="sub-one-left">
                        
                            <div class="footer-hny-ul">
                                <ul>
                                    <li><a href="index.html">Home</a></li>
                                    <li><a href="about.html">Shop</a></li>
                                    <li><a href="#">Perfume ratings</a></li>
                                    <li><a href="contact.html">Merchant Packages</a></li>
                                    <li><a href="contact.html">Recommendations</a></li>
                                </ul>
                                <ul>
                                    <li><a href="#">Perfume manufacturing</a></li>
                                    <li><a href="#">oriental perfume</a></li>
                                    <li><a href="#">French perfumes</a></li>
                                    <li><a href="contact.html">niche perfumes</a></li>
                                </ul>
                            </div>

                        </div>
                        <div class="sub-two-right">
                            <h6>We accept:</h6>
                            <ul>
                                <li><a class="pay-method" href="#">
                                <img src="{{asset('assets/front/images/Amazon-2.png')}}" class="img-fluid" alt="" />
                                </a>
                                </li>
                                <li><a class="pay-method" href="#">
                                <img src="{{asset('assets/front/images/Master-Card-2.png')}}" class="img-fluid" alt="" />
                                </a>
                                </li>
                                <li><a class="pay-method" href="#">
                                <img src="{{asset('assets/front/images/Discover-2.png')}}" class="img-fluid" alt="" />
                                </a>
                                </li>
                                <li><a class="pay-method" href="#">
                                <img src="{{asset('assets/front/images/Visa-2.png')}}" class="img-fluid" alt="" />
                                </a>
                                </li>
                            </ul>
                            <br/>
                            
                            <h6>Contact us:</h6>
                            <ul>
                                <li><a class="pay-method" href="#">
                                <img src="{{asset('assets/front/images/Group1110.png')}}" class="img-fluid" alt="" />
                                </a>
                                </li>
                                <li><a class="pay-method" href="#">
                                <img src="{{asset('assets/front/images/Group 1111.png')}}" class="img-fluid" alt="" />
                                </a>
                                </li>
                                <li><a class="pay-method" href="#">
                                <img src="{{asset('assets/front/images/Group1112.png')}}" class="img-fluid" alt="" />
                                </a>
                                </li>
                                <li><a class="pay-method" href="#">
                                <img src="{{asset('assets/front/images/Group1113.png')}}" class="img-fluid" alt="" />
                                </a>
                                </li>
                            </ul>
                        </div>
                    </div> 
              
              </div>
              <div class="below-section row">
                  <div class="columns col-lg-2">
                     
                  </div>
                  <div class="columns col-lg-6 text-lg-right">
                      <p>All rights reserved 2021 Ghalialathman ©.
                      </p>
                  </div>
                  <button onclick="topFunction()" id="movetop" title="Go to top">
                      <span class="fa fa-angle-double-up"></span>
                  </button>
              </div>
          </div>
      </div>
      <!-- //titels-5 -->
      <!-- move top -->

      <script>
          // When the user scrolls down 20px from the top of the document, show the button
          window.onscroll = function () {
              scrollFunction()
          };

          function scrollFunction() {
              if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                  document.getElementById("movetop").style.display = "block";
              } else {
                  document.getElementById("movetop").style.display = "none";
              }
          }

          // When the user clicks on the button, scroll to the top of the document
          function topFunction() {
              document.body.scrollTop = 0;
              document.documentElement.scrollTop = 0;
          }
      </script>
      <!-- /move top -->
  </section>

// quantity

function increaseCount(a, b) {
    var input = b.previousElementSibling;
    var value = parseInt(input.value, 10); 
    value = isNaN(value)? 0 : value;
    value ++;
    input.value = value;
  }
  function decreaseCount(a, b) {
    var input = b.nextElementSibling;
    var value = parseInt(input.value, 10); 
    if (value > 1) {
      value = isNaN(value)? 0 : value;
      value --;
      input.value = value;
    }
  }

// 

$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();   
});

// 
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

//  login

$(function () {
    $('.navbar-toggler').click(function () {
      $('body').toggleClass('noscroll');
    })
  });

//   slider

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
// SLIDER2
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
  
  if($('.bbb_viewed_prev1').length)
  {
  var prev1 = $('.bbb_viewed_prev1');
  prev1.on('click', function()
  {
  viewedSlider1.trigger('prev1.owl.carousel');
  });
  }

  if($('.bbb_viewed_next1').length)
  {
  var next1 = $('.bbb_viewed_next1');
  next1.on('click', function()
  {
  viewedSlider1.trigger('next1.owl.carousel');
  });
  }
  }
  });

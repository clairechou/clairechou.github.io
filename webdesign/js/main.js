$(function () {

  "use strict";

  //===== Prealoder
  $(window).on('load', function (event) {
    $('#preloader').delay(500).fadeOut(500);
  });


  //===== Mobile Menu 
  $(".navbar-toggler").on('click', function () {
    $(this).toggleClass('active');
  });

  $(".navbar-nav a").on('click', function () {
    $(".navbar-toggler").removeClass('active');
  });


  //===== close navbar-collapse when a  clicked
  $(".navbar-nav a").on('click', function () {
    $(".navbar-collapse").removeClass("show");
  });

  //back-to-top//
  $(".goTop").click(function () {
    $("html, body").animate({ scrollTop: 0 }, 500);
  });

});

//owlCarousel Banner//
$(document).ready(function () {
  $('.indexBannerContainerInner .owl-carousel').owlCarousel({
    items: 3,
    loop: true,
    margin: 0,
    nav: true,
    navSpeed: 800,
    autoplay: 6000,
    lazyLoad: true,
    dots: true,
    responsiveClass: true,
    navText: ["<span class='material-icons'>keyboard_arrow_left</span>", "<span class='material-icons'>keyboard_arrow_right</span>"],
    responsive: {
      0: {
        items: 1
      },
      568: {
        items: 1
      },
      767: {
        items: 1
      },
      991: {
        items: 1
      }
    }
  })
});

//owlCarousel Knowledge//
$('.index-card .owl-carousel').owlCarousel({
  loop: false,
  margin: 20,
  nav: true,
  dots: false,
  navText: ["<span class='material-icons'>arrow_back</span>", "<span class='material-icons'>arrow_forward</span>"],
  responsive: {
    0: {
      items: 1
    },
    568: {
      items: 1
    },
    767: {
      items: 2
    },
    991: {
      items: 3
    }
  }
});


/*
Theme Name: WP Creptaam
Author: TrendyTheme
*/

/* ======= TABLE OF CONTENTS ================================== 
    ## INVIEW SUPPORT
    ## COUNTDOWN
    ## PRELOADER
    ## OFF CANVAS MENU OVERLAY
    ## ADD OR REMOVE CLASSES
    ## ENABLE BOOTSTRAP TOOLTIP
    ## DETECT IE VERSION
    ## DETECT IOS MOBILE DEVICE
    ## TOGGLE SEARCH
    ## PAGE SCROLLING
    ## MOBILE DROPDOWN MENU
    ## DROPDOWN MENU OFFEST
    ## NAVBAR COLLAPSE ON CLICK
    ## STICKY MENU
    ## TOGGLE SIDE MENU
    ## FULL HEIGHT ELEMENT
    ## MAGNIFIC POPUP
    ## MASONRY GRID
    ## SWIPER SLIDER
    ## SWIPER SLIDER FOR TIMELINE
    ## SWIPER SLIDER HEADER MARKET PRICE
    ## TT CAROUSEL
    ## STICKY SIDEBAR
    ## WORK FILTER
    ## PRODUCT QUANTITY
    ## PARTICLES
========================================================= */

jQuery(function ($) {

    'use strict';


    /* ======= PRELOADER ======= */
    (function () {
        $('#status').fadeOut();
        $('#preloader').delay(200).fadeOut('slow');
    }());


    /* === INVIEW SUPPORT === */
    $('.fund-progress .progress').on('inview', function(event, visible, visiblePartX, visiblePartY) {
        if (visible) {
            $.each($('.fund-progress .progress-bar'),function(){
                $(this).css('width', $(this).attr('aria-valuenow')+'%');
            });
            $(this).off('inview');
        }
    });




    /* ======= COUNTDOWN ======= */    
    (function () {
        $('[data-countdown]').each(function() {
            var $this = $(this), finalDate = $(this).data('countdown');
            $this.countdown(finalDate, function(event) {
                $this.html(event.strftime(''
                    + '<li><span class="days">%D</span><p>'+creptaamJSObject.count_day+'</p></li>'
                    + '<li><span class="hours">%H</span><p>'+creptaamJSObject.count_hour+'</p></li>'
                    + '<li><span class="minutes">%M</span><p>'+creptaamJSObject.count_minutes+'</p></li>'
                    + '<li><span class="second">%S</span><p>'+creptaamJSObject.count_second+'</p></li>'
                ));
            });
        });
    }());


    /* === jQuery for page scrolling feature - requires jQuery Easing plugin === */
    (function () {

        $('.navbar-nav a[href^="#"], .tt-scroll').on('click', function (e) {
            e.preventDefault();

            var target = this.hash;
            var $target = $(target);
            var headerHeight = $('.header-wrapper, .header-wrapper.sticky').outerHeight();
            
            if (target) {
                $('html, body').stop().animate({
                    'scrollTop': $target.offset().top - headerHeight + "px"
                }, 1200, 'swing');
            }
        });
    }());


    /* ======= OFF CANVAS MENU OVERLAY ======= */
    (function () {
        $('li.side-menu a').on('click', function(){
            $('.body-overlay').addClass('active');
        });
        $('.body-overlay').on('click', function(){
            $(this).removeClass('active');
            $('.side').removeClass('on');
            $('body').removeClass('on-side');
        });
        $('.side .close-side').on('click', function(){
            $('.body-overlay').removeClass('active');
        });

        $('.side .mobile-menu a[href^="#"]').on('click', function (e) {
          e.preventDefault();
          $('.side').removeClass('on');
          $('.body-overlay').removeClass('active');
        });


    }());


    /* ===  ADD OR REMOVE CLASSES === */
    (function () {
        $('#respond textarea, #respond input[type=text], #respond input[type=email], #respond input[type=url]').addClass('form-control');
        $('.wpb_widgetised_column .wpb_wrapper').addClass('right-sidebar tt-sidebar-wrapper');
    }());


    /* ======= ENABLE BOOTSTRAP TOOLTIP ======= */
    (function () {
        $('[data-toggle="tooltip"]').tooltip()
    }());


    /* === DETECT IE VERSION === */
    (function () {  
        function getIEVersion() {
            var match = navigator.userAgent.match(/(?:MSIE |Trident\/.*; rv:)(\d+)/);
            return match ? parseInt(match[1], 10) : false;
        }

        if( getIEVersion() ){
            $('html').addClass('ie ie'+getIEVersion());
        }
    }());

    /* === DETECT IOS MOBILE DEVICE === */
    (function () {
        if( navigator.userAgent.match(/iP(hone|od|ad)/i) ) {
             jQuery('html').addClass('ios-browser');
        }
    }());

    /* === TOGGLE SEARCH === */
    (function () {
        $("nav.navbar .attr-nav").each(function(){  
            $("li.search > a", this).on("click", function(e){
                e.preventDefault();
                $(".top-search form").slideToggle();
                $(".top-search form input.form-control").focus();
                $(this).toggleClass('form-visible');
            });
        });
    }());


    /* === PAGE SCROLLING === */
    (function () {
        $('a.scroll-top').on('click', function(){
            $("html, body").animate({ scrollTop: 0 }, 800);
            return false;
        });
    }());


    /* === MOBILE DROPDOWN MENU === */
    (function(){
        $('.dropdown-menu-trigger').each(function() {
            $(this).on('click', function(e){
                $(this).toggleClass('menu-collapsed');
            });
        });
    }());


    /* === DROPDOWN MENU OFFEST === */
    $(window).on('load resize', function () {
        $(".dropdown-wrapper > ul > li, .child-category").each(function() {
            var $this = $(this),
                $win = $(window);

            if ($this.offset().left + 195 > $win.width() + $win.scrollLeft() - $this.width()) {
                $this.addClass("dropdown-inverse");
            } else {
                $this.removeClass("dropdown-inverse");
            }
        });
    });


    /* === NAVBAR COLLAPSE ON CLICK === */
    $('.navbar-nav > li > a[href^="#"]').on('click', function(e) {
        $('.mobile-toggle').removeClass('in');
    });


    /* === STICKY MENU === */
    (function () {
        if (creptaamJSObject.creptaam_sticky_menu == true) {
            var nav = $('.navbar-fixed-top');
            var scrolled = false;

            $(window).on('scroll', function () {

                if (80 < $(window).scrollTop() && !scrolled) {
                    nav.addClass('sticky').animate({ 'margin-top': '0px' });
                    scrolled = true;
                }

                if (80 > $(window).scrollTop() && scrolled) {
                    nav.removeClass('sticky').css('margin-top', '0px');
                    scrolled = false;
                }
            });
        }

    }());


    /* ===== TOGGLE SIDE MENU ===== */
    $("nav.navbar .attr-nav").each(function(){  
        $("li.side-menu > a", this).on("click", function(e){
            e.preventDefault();
            $("nav.navbar > .side").toggleClass("on");
            $("body").toggleClass("on-side");
        });
    });
    $(".side .close-side").on("click", function(e){
        e.preventDefault();
        $("nav.navbar > .side").removeClass("on");
        $("body").removeClass("on-side");
    });


    /* ======= FULL HEIGHT ELEMENT ======= */
    $(".tt-fullHeight").height($(window).height());
    $(window).on('resize', function(){
        $(".tt-fullHeight").height($(window).height());
    });


    /* ======= MAGNIFIC POPUP ======= */
    $(window).on('load', function(){
        $(".woocommerce div.product div.images a").magnificPopup({
            type: 'image',
            mainClass: 'mfp-fade',
            removalDelay: 160,
            fixedContentPos: false,
            gallery:{
                enabled:true
            }
        });

        // TT LIGHTBOX
        if ($('.tt-lightbox').length > 0) {
            $('.tt-lightbox').magnificPopup({
                type: 'image',
                mainClass: 'mfp-fade',
                removalDelay: 160,
                fixedContentPos: false
                // other options
            });
        }

        // POPUP GALLERY
        $('.popup-vimeo, .popup-video a, .popup-play').magnificPopup({
            disableOn: 200,
            type: 'iframe',
            mainClass: 'mfp-fade',
            removalDelay: 160,
            preloader: false,
            fixedContentPos: false
        });
    });


    /* === MASONRY GRID  === */
    $(window).on('load', function () {
        $('.masonry-wrap').masonry({
            "columnWidth" : ".masonry-column"
        });
    });


    /* === SWIPER SLIDER  === */
    $(window).on('load', function(){
        var swiper = new Swiper('.swiper-container', {
            nextButton: '.swiper-button-next',
            prevButton: '.swiper-button-prev',
            slidesPerView: 1,
            paginationClickable: true,
            spaceBetween: 30,
            loop: true
        });
    });

    // SWIPER SLIDER FOR TIMELINE
    $(window).on('load', function(){
        var timelineWrapper = $('.time-lines-wrapper');
        var initialSlide = timelineWrapper.attr('data-initial-slide');
        var swiper = new Swiper(timelineWrapper, {
          slidesPerView: 6,
          spaceBetween: 50,
          initialSlide: initialSlide,
          centeredSlides: true,
          paginationClickable: true,
          nextButton: '.swiper-button-next',
          prevButton: '.swiper-button-prev',
          breakpoints: {
            1170: {
              slidesPerView: 6,
              spaceBetween: 40,
            },
            1024: {
              slidesPerView: 4,
              spaceBetween: 40,
            },
            768: {
              slidesPerView: 3,
              spaceBetween: 30,
            },
            640: {
              slidesPerView: 2,
              spaceBetween: 20,
            },
            320: {
              slidesPerView: 1,
              spaceBetween: 10,
            }
          }
        });
    });


    // SWIPER SLIDER HEADER MARKET PRICE
    $(window).on('load', function(){
        var swiper = new Swiper('.creptaam-coin-list', {
          slidesPerView: 8,
          spaceBetween: 10,
          loop: false,
          initialSlide: 0,
          paginationClickable: true,
          nextButton: '.swiper-nav-next',
          prevButton: '.swiper-nav-prev',
          breakpoints: {
            1170: {
              slidesPerView: 8,
            },
            1024: {
              slidesPerView: 6,
            },
            768: {
              slidesPerView: 4,
            },
            640: {
              slidesPerView: 3,
            },
            320: {
              slidesPerView: 2,
              spaceBetween: 10,
            }
          }
        });
    });


   /* ======= TT CAROUSEL  ======= */

   (function () {

      if($('.tt-carousel-wrapper').length > 0){
          
          $('.tt-carousel-wrapper').each(function(){
              // carousel height issue 
              var carouselWrapper = $(this).find('.tt-carousel');

              $(window).on('load', function(){
                
                    $('.tt-carousel-inner, .tt-extra-image>div').removeClass('zoomOut');
                    $('.tt-carousel-inner, .tt-extra-image>div').addClass('zoomIn');
               
              })

            //   if($('#preloader').fadeOut()){
                // $('.tt-carousel-inner, .tt-extra-image>div').removeClass('zoomOut');
                // $('.tt-carousel-inner, .tt-extra-image>div').addClass('zoomIn');
            // }

            console.log($('#preloader').fadeOut());
              

              var dataNav = carouselWrapper.attr('data-navigation');
              var dataDots = carouselWrapper.attr('data-dots');
              var sliderLoop = carouselWrapper.attr('data-slider-loop');
              var sliderAutoPlay = carouselWrapper.attr('data-slider-autoplay');
              var sliderMouseDrag = carouselWrapper.attr('data-slider-mousedrag');
              
              var campusOwl = $(carouselWrapper).owlCarousel({
                  items : 1,
                  autoplay: sliderAutoPlay==='autoplay-true'?true:false,
                  autoplayTimeout: 5000,
                  autoplayHoverPause: true,
                  autoplaySpeed: 800,
                  navSpeed: 800,
                  dotsSpeed: 800,
                  loop: sliderLoop==='loop-true'?true:false,
                  mouseDrag: sliderMouseDrag==='mousedrag-true'?true:false,
                  nav: dataNav==='nav-visible'?true:false,
                  navText: ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
                  dots: dataDots==='dots-visible'?true:false,
                  rtl: false
              });


              // add animate.css class(es) to the elements to be animated
              function setAnimation ( _elem, _InOut ) {
                  // Store all animationend event name in a string.
                  // cf animate.css documentation
                  var animationEndEvent = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';

                  _elem.each ( function () {
                  var $elem = $(this);
                  var $animationType = 'animated ' + $elem.data( 'animation-' + _InOut );

                  $elem.addClass($animationType).one(animationEndEvent, function () {
                      $elem.removeClass($animationType); // remove animate.css Class at the end of the animations
                  });
                  });
              }


              // Fired after current slide has been changed
              campusOwl.on('changed.owl.carousel', function(event) {

                  var $currentItem = $('.owl-item', campusOwl).eq(event.item.index);
                  var $elemsToanim = $currentItem.find("[data-animation-in]");
                  setAnimation ($elemsToanim, 'in');
              });

              if(carouselWrapper.hasClass('tt-custom-height')){
                  var carouselItem = $('.tt-carousel .owl-item .item');
          
              var largeHeight = carouselWrapper.attr('data-lg-height'),
                  mediumHeight = carouselWrapper.attr('data-md-height'),
                  smallHeight = carouselWrapper.attr('data-sm-height'),
                  mobileHeight = carouselWrapper.attr('data-xs-height'),
                  mobileSmallHeight = carouselWrapper.attr('data-xxs-height');
                  
                  $(window).on('resize load', function(e){
                      if(carouselWrapper.innerWidth() > 1400){
                          carouselItem.css('height', largeHeight+'px');
                      } else if(carouselWrapper.innerWidth() > 991 && carouselWrapper.innerWidth() < 1399){
                          carouselItem.css('height', mediumHeight+'px');
                      } else if(carouselWrapper.innerWidth() > 767 && carouselWrapper.innerWidth() < 992){
                          carouselItem.css('height', smallHeight+'px');
                      } else if(carouselWrapper.innerWidth() > 575 && carouselWrapper.innerWidth() < 768){
                          carouselItem.css('height', mobileHeight+'px');
                      } else {
                          carouselItem.css('height', mobileSmallHeight+'px');
                      }
                  });
              }
      
              // Mouse move animation
              if ($('.tt-extra-image').length > 0 ) {
                  var lFollowX = 0,
                      lFollowY = 0,
                      x = 0,
                      y = 0,
                      friction = 1 / 20;
      
                  function moveBackground() {
                  x += (lFollowX - x) * friction;
                  y += (lFollowY - y) * friction;
                  
                  var translate = 'translate(' + x + 'px, ' + y + 'px)';
      
                  $('.tt-carousel .item .tt-extra-image > div').css({
                      '-webkit-transform': translate,
                      '-moz-transform': translate,
                      'transform': translate
                  });
      
                  window.requestAnimationFrame(moveBackground);
              }
      
              $(window).on('mousemove click', function(e) {

                  var lMouseX = Math.max(-100, Math.min(100, $(window).width() / 2 - e.clientX));
                  var lMouseY = Math.max(-100, Math.min(100, $(window).height() / 2 - e.clientY));
                  lFollowX = (20 * lMouseX) / 100; // 100 : 12 = lMouxeX : lFollow
                  lFollowY = (10 * lMouseY) / 100;
      
              });
              moveBackground();
              }
          })
      }

  }());



    /* ======= STICKY SIDEBAR ======= */
    (function(){
        $('.sidebar-sticky').ttStickySidebar({
          additionalMarginTop: 30
        });
    }());


    /* === WORK FILTER  === */
    if ($('.work-container').length > 0) {
        $(window).on('load', function () {
            
            $('.work-container').each(function(i, e){

                var buttonFilter;
                var ttGrid = $(this).find('.tt-grid');

                var $grid = ttGrid.isotope({
                    itemSelector: '.tt-item',
                    percentPosition: true,
                    masonry: {
                        columnWidth: '.tt-item'
                    },

                    filter: function () {
                        var $this = $(this);
                        var buttonResult = buttonFilter ? $this.is(buttonFilter) : true;
                        return buttonResult;
                    }
                });

                $(this).find('ul.tt-filter li button').on('click', function () {
                    buttonFilter = $(this).attr('data-filter');
                    $grid.isotope();
                });
            });

            $('.tt-filter').each(function (i, buttonGroup) {
                var $buttonGroup = $(buttonGroup);
                $buttonGroup.on('click', 'li button', function () {
                    $buttonGroup.find('.active').removeClass('active');
                    $(this).addClass('active');
                });
            });
        });
    }



    /* === Particles === */
    (function(){
        if ($('.particle-effect').length > 0) {
            $('.particle-effect').each(function () {

                var particleColor = $(this).find('.particles-js').attr('data-particle-color');

                if (particleColor) {
                    particleColor;
                } else {
                    particleColor = "#000000";
                }

                particlesJS('particles-js',
                    {
                    "particles": {
                      "number": {
                        "value": 40,
                        "density": {
                          "enable": true,
                          "value_area": 800
                        }
                      },
                      "color": {
                        "value": particleColor
                      },
                      "shape": {
                        "type": "circle",
                        "stroke": {
                          "width": 0,
                          "color": "#000000"
                        },
                        "polygon": {
                          "nb_sides": 5
                        },
                        "image": {
                          "src": "img/github.svg",
                          "width": 100,
                          "height": 100
                        }
                      },
                      "opacity": {
                        "value": 0.5,
                        "random": false,
                        "anim": {
                          "enable": false,
                          "speed": 1,
                          "opacity_min": 0.1,
                          "sync": false
                        }
                      },
                      "size": {
                        "value": 7,
                        "random": true,
                        "anim": {
                          "enable": false,
                          "speed": 40,
                          "size_min": 0.1,
                          "sync": false
                        }
                      },
                      "line_linked": {
                        "enable": true,
                        "distance": 150,
                        "color": particleColor,
                        "opacity": 0.4,
                        "width": 1
                      },
                      "move": {
                        "enable": true,
                        "speed": 3,
                        "direction": "none",
                        "random": false,
                        "straight": false,
                        "out_mode": "out",
                        "attract": {
                          "enable": false,
                          "rotateX": 600,
                          "rotateY": 1200
                        }
                      }
                    },
                    "interactivity": {
                      "detect_on": "canvas",
                      "events": {
                        "onhover": {
                          "enable": false,
                          "mode": "repulse"
                        },
                        "onclick": {
                          "enable": false,
                          "mode": "push"
                        },
                        "resize": true
                      },
                      "modes": {
                        "grab": {
                          "distance": 400,
                          "line_linked": {
                            "opacity": 1
                          }
                        },
                        "bubble": {
                          "distance": 400,
                          "size": 40,
                          "duration": 2,
                          "opacity": 8,
                          "speed": 5
                        },
                        "repulse": {
                          "distance": 200
                        },
                        "push": {
                          "particles_nb": 4
                        },
                        "remove": {
                          "particles_nb": 2
                        }
                      }
                    },
                    "retina_detect": true,
                    "config_demo": {
                      "hide_card": false,
                      "background_color": "#b61924",
                      "background_image": "",
                      "background_position": "50% 50%",
                      "background_repeat": "no-repeat",
                      "background_size": "cover"
                    }
                });

            });
        }
    }());
});
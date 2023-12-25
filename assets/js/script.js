(function (jQuery) {

    "use strict";


    /*------------------------------------------
        = ALL ESSENTIAL FUNCTIONS
    -------------------------------------------*/
    // Toggle mobile navigation
    function toggleMobileNavigation() {
        var navbar = jQuery(".navigation-holder");
        var openBtn = jQuery(".mobail-menu .open-btn");
        var xbutton = jQuery(".mobail-menu .navbar-toggler");

        openBtn.on("click", function (e) {
            e.stopImmediatePropagation();
            navbar.toggleClass("slideInn");
            xbutton.toggleClass("x-close");
            return false;
        })
    }

    toggleMobileNavigation();


    // Function for toggle class for small menu
    function toggleClassForSmallNav() {
        var windowWidth = window.innerWidth;
        var mainNav = jQuery("#navbar > ul");

        if (windowWidth <= 991) {
            mainNav.addClass("small-nav");
        } else {
            mainNav.removeClass("small-nav");
        }
    }

    toggleClassForSmallNav();


    // Function for small menu
    function smallNavFunctionality() {
        var windowWidth = window.innerWidth;
        var mainNav = jQuery(".navigation-holder");
        var smallNav = jQuery(".navigation-holder > .small-nav");
        var subMenu = smallNav.find(".sub-menu");
        var megamenu = smallNav.find(".mega-menu");
        var menuItemWidthSubMenu = smallNav.find(".menu-item-has-children > a");

        if (windowWidth <= 991) {
            subMenu.hide();
            megamenu.hide();
            menuItemWidthSubMenu.on("click", function (e) {
                var jQuerythis = jQuery(this);
                jQuerythis.siblings().slideToggle();
                e.preventDefault();
                e.stopImmediatePropagation();
                jQuerythis.toggleClass("rotate");
            })
        } else if (windowWidth > 991) {
            mainNav.find(".sub-menu").show();
            mainNav.find(".mega-menu").show();
        }
    }

    smallNavFunctionality();

    jQuery("body").on("click", function () {
        jQuery('.navigation-holder').removeClass('slideInn');
    });
    jQuery(".menu-close").on("click", function () {
        jQuery('.navigation-holder').removeClass('slideInn');
    });
    jQuery(".menu-close").on("click", function () {
        jQuery('.open-btn').removeClass('x-close');
    });

    // toggle1
    jQuery('#toggle1').on("click", function () {
        jQuery('.create-account').slideToggle();
        jQuery('.caupon-wrap.s1').toggleClass('active-border')
    })

    // toggle2
    jQuery('#toggle2').on("click", function () {
        jQuery('#open2').slideToggle();
        jQuery('.caupon-wrap.s2').toggleClass('coupon-2')
    })

    // toggle3
    jQuery('#toggle3').on("click", function () {
        jQuery('#open3').slideToggle();
        jQuery('.caupon-wrap.s2').toggleClass('coupon-2')
    })
    // toggle4
    jQuery('#toggle4').on("click", function () {
        jQuery('#open4').slideToggle();
        jQuery('.caupon-wrap.s3').toggleClass('coupon-2')
    })

    jQuery('.payment-select .addToggle').on('click', function () {
        jQuery('.payment-name').addClass('active')
        jQuery('.payment-option').removeClass('active')
    })


    jQuery('.payment-select .removeToggle').on('click', function () {
        jQuery('.payment-option').addClass('active')
        jQuery('.payment-name').removeClass('active')
    });


    // tooltips

    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl)
    })

    // Parallax background
    function bgParallax() {
        if (jQuery(".parallax").length) {
            jQuery(".parallax").each(function () {
                var height = jQuery(this).position().top;
                var resize = height - jQuery(window).scrollTop();
                var doParallax = -(resize / 5);
                var positionValue = doParallax + "px";
                var img = jQuery(this).data("bg-image");

                jQuery(this).css({
                    backgroundImage: "url(" + img + ")",
                    backgroundPosition: "50%" + positionValue,
                    backgroundSize: "cover"
                });
            });
        }
    }

    // HERO SLIDER
    var menu = [];
    jQuery('.swiper-slide').each(function (index) {
        menu.push(jQuery(this).find('.slide-inner').attr("data-text"));
    });
    var interleaveOffset = 0.5;
    var swiperOptions = {
        loop: true,
        speed: 1000,
        parallax: true,
        autoplay: {
            delay: 6500,
            disableOnInteraction: false,
        },
        watchSlidesProgress: true,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },

        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },

        on: {
            progress: function () {
                var swiper = this;
                for (var i = 0; i < swiper.slides.length; i++) {
                    var slideProgress = swiper.slides[i].progress;
                    var innerOffset = swiper.width * interleaveOffset;
                    var innerTranslate = slideProgress * innerOffset;
                    swiper.slides[i].querySelector(".slide-inner").style.transform =
                        "translate3d(" + innerTranslate + "px, 0, 0)";
                }
            },

            touchStart: function () {
                var swiper = this;
                for (var i = 0; i < swiper.slides.length; i++) {
                    swiper.slides[i].style.transition = "";
                }
            },

            setTransition: function (speed) {
                var swiper = this;
                for (var i = 0; i < swiper.slides.length; i++) {
                    swiper.slides[i].style.transition = speed + "ms";
                    swiper.slides[i].querySelector(".slide-inner").style.transition =
                        speed + "ms";
                }
            }
        }
    };

    var swiper = new Swiper(".swiper-container", swiperOptions);

    // DATA BACKGROUND IMAGE
    var sliderBgSetting = jQuery(".slide-bg-image");
    sliderBgSetting.each(function (indx) {
        if (jQuery(this).attr("data-background")) {
            jQuery(this).css("background-image", "url(" + jQuery(this).data("background") + ")");
        }
    });





    /*------------------------------------------
        = HIDE PRELOADER
    -------------------------------------------*/
    function preloader() {
        if (jQuery('.preloader').length) {
            jQuery('.preloader').delay(100).fadeOut(500, function () {

                //active wow
                wow.init();



            });
        }
    }


    /*------------------------------------------
        = WOW ANIMATION SETTING
    -------------------------------------------*/
    var wow = new WOW({
        boxClass: 'wow',      // default
        animateClass: 'animated', // default
        offset: 0,          // default
        mobile: true,       // default
        live: true        // default
    });


    /*------------------------------------------
         = ACTIVE POPUP IMAGE
     -------------------------------------------*/
    if (jQuery(".fancybox").length) {
        jQuery(".fancybox").fancybox({
            openEffect: "elastic",
            closeEffect: "elastic",
            wrapCSS: "project-fancybox-title-style"
        });
    }


    /*------------------------------------------
        = POPUP YOUTUBE, VIMEO, GMAPS
    -------------------------------------------*/
    jQuery('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
        type: 'iframe',
        mainClass: 'mfp-fade',
        removalDelay: 160,
        preloader: false,
        fixedContentPos: false
    });



    /*------------------------------------------
        = POPUP VIDEO
    -------------------------------------------*/
    if (jQuery(".video-btn").length) {
        jQuery(".video-btn").on("click", function () {
            jQuery.fancybox({
                href: this.href,
                type: jQuery(this).data("type"),
                'title': this.title,
                helpers: {
                    title: { type: 'inside' },
                    media: {}
                },

                beforeShow: function () {
                    jQuery(".fancybox-wrap").addClass("gallery-fancybox");
                }
            });
            return false
        });
    }


    /*------------------------------------------
        = ACTIVE GALLERY POPUP IMAGE
    -------------------------------------------*/
    if (jQuery(".popup-gallery").length) {
        jQuery('.popup-gallery').magnificPopup({
            delegate: 'a',
            type: 'image',

            gallery: {
                enabled: true
            },

            zoom: {
                enabled: true,

                duration: 300,
                easing: 'ease-in-out',
                opener: function (openerElement) {
                    return openerElement.is('img') ? openerElement : openerElement.find('img');
                }
            }
        });
    }


    /*------------------------------------------
        = FUNCTION FORM SORTING GALLERY
    -------------------------------------------*/
    function sortingGallery() {
        if (jQuery(".sortable-gallery .gallery-filters").length) {
            var jQuerycontainer = jQuery('.gallery-container');
            jQuerycontainer.isotope({
                filter: '*',
                animationOptions: {
                    duration: 750,
                    easing: 'linear',
                    queue: false,
                }
            });

            jQuery(".gallery-filters li a").on("click", function () {
                jQuery('.gallery-filters li .current').removeClass('current');
                jQuery(this).addClass('current');
                var selector = jQuery(this).attr('data-filter');
                jQuerycontainer.isotope({
                    filter: selector,
                    animationOptions: {
                        duration: 750,
                        easing: 'linear',
                        queue: false,
                    }
                });
                return false;
            });
        }
    }

    sortingGallery();


    /*------------------------------------------
        = MASONRY GALLERY SETTING
    -------------------------------------------*/
    function masonryGridSetting() {
        if (jQuery('.masonry-gallery').length) {
            var jQuerygrid = jQuery('.masonry-gallery').masonry({
                itemSelector: '.grid-item',
                columnWidth: '.grid-item',
                percentPosition: true
            });

            jQuerygrid.imagesLoaded().progress(function () {
                jQuerygrid.masonry('layout');
            });
        }
    }

    masonryGridSetting();

    /*------------------------------------------
      = FUNFACT
  -------------------------------------------*/
    if (jQuery(".odometer").length) {
        jQuery('.odometer').appear();
        jQuery(document.body).on('appear', '.odometer', function (e) {
            var odo = jQuery(".odometer");
            odo.each(function () {
                var countNumber = jQuery(this).attr("data-count");
                jQuery(this).html(countNumber);
            });
        });
    }



    /*------------------------------------------
        = STICKY HEADER
    -------------------------------------------*/

    // Function for clone an element for sticky menu
    function cloneNavForSticyMenu(jQueryele, jQuerynewElmClass) {
        jQueryele.addClass('original').clone().insertAfter(jQueryele).addClass(jQuerynewElmClass).removeClass('original');
    }

    // clone home style 1 navigation for sticky menu
    if (jQuery('.wpo-site-header .navigation').length) {
        cloneNavForSticyMenu(jQuery('.wpo-site-header .navigation'), "sticky-header");
    }

    var lastScrollTop = '';

    function stickyMenu(jQuerytargetMenu, jQuerytoggleClass) {
        var st = jQuery(window).scrollTop();
        var mainMenuTop = jQuery('.wpo-site-header .navigation');

        if (jQuery(window).scrollTop() > 1000) {
            if (st > lastScrollTop) {
                // hide sticky menu on scroll down
                jQuerytargetMenu.removeClass(jQuerytoggleClass);

            } else {
                // active sticky menu on scroll up
                jQuerytargetMenu.addClass(jQuerytoggleClass);
            }

        } else {
            jQuerytargetMenu.removeClass(jQuerytoggleClass);
        }

        lastScrollTop = st;


    }



    /*------------------------------------------
            = Header search toggle
        -------------------------------------------*/
    if (jQuery(".header-search-form-wrapper").length) {
        var searchToggleBtn = jQuery(".search-toggle-btn");
        var searchToggleBtnIcon = jQuery(".search-toggle-btn i");
        var searchContent = jQuery(".header-search-form");
        var body = jQuery("body");

        searchToggleBtn.on("click", function (e) {
            searchContent.toggleClass("header-search-content-toggle");
            searchToggleBtnIcon.toggleClass("fi flaticon-magnifiying-glass fi ti-close");
            e.stopPropagation();
        });

        body.on("click", function () {
            searchContent.removeClass("header-search-content-toggle");
        }).find(searchContent).on("click", function (e) {
            e.stopPropagation();
        });
    }


    /*------------------------------------------
        = Header header right Menu toggle
    -------------------------------------------*/
    if (jQuery(".header-right-menu-wrapper").length) {
        var cartToggleBtn = jQuery(".right-menu-toggle-btn");
        var cartContent = jQuery(".header-right-menu-wrap");
        var cartCloseBtn = jQuery(".right-menu-close");
        var body = jQuery("body");

        cartToggleBtn.on("click", function (e) {
            cartContent.toggleClass("right-menu-active");
            e.stopPropagation();
        });

        cartCloseBtn.on("click", function (e) {
            cartContent.removeClass("right-menu-active");
            e.stopPropagation();
        });

        body.on("click", function () {
            cartContent.removeClass("right-menu-active");
        }).find(cartContent).on("click", function (e) {
            e.stopPropagation();
        });
    }


    /*------------------------------------------
        = Testimonial SLIDER
    -------------------------------------------*/
    if (jQuery(".wpo-breacking-wrap").length) {
        jQuery(".wpo-breacking-wrap").owlCarousel({
            autoplay: true,
            smartSpeed: 900,
            margin: 0,
            loop: true,
            autoplayHoverPause: true,
            dots: false,
            nav: false,
            responsive: {
                0: {
                    items: 1,
                    dots: false,
                    nav: false
                },

                500: {
                    items: 1,
                    dots: false,
                    nav: false
                },

                768: {
                    items: 2,
                },

                1200: {
                    items: 3
                },

                1400: {
                    items: 3
                },

            }
        });
    }



    /*------------------------------------------
        = Testimonial SLIDER
    -------------------------------------------*/
    if (jQuery(".wpo-testimonial-slider").length) {
        jQuery(".wpo-testimonial-slider").owlCarousel({
            autoplay: false,
            smartSpeed: 300,
            margin: 20,
            loop: true,
            autoplayHoverPause: true,
            dots: false,
            nav: true,
            navText: ['<i class="ti-arrow-left"></i>', '<i class="ti-arrow-right"></i>'],
            responsive: {
                0: {
                    items: 1,
                    dots: true,
                    nav: false
                },

                500: {
                    items: 1,
                    dots: true,
                    nav: false
                },

                768: {
                    items: 2,
                },

                1200: {
                    items: 3
                },

                1400: {
                    items: 3
                },

            }
        });
    }


    /*------------------------------------------
        = POST SLIDER
    -------------------------------------------*/
    if (jQuery(".post-slider".length)) {
        jQuery(".post-slider").owlCarousel({
            mouseDrag: false,
            smartSpeed: 500,
            margin: 30,
            loop: true,
            nav: true,
            navText: ['<i class="fi ti-arrow-left"></i>', '<i class="fi ti-arrow-right"></i>'],
            dots: false,
            items: 1
        });
    }


    /*------------------------------------------
        = SHOP DETAILS PAGE PRODUCT SLIDER
    -------------------------------------------*/
    if (jQuery(".shop-single-slider").length) {
        jQuery('.slider-for').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            fade: true,
            asNavFor: '.slider-nav'
        });
        jQuery('.slider-nav').slick({
            slidesToShow: 5,
            slidesToScroll: 1,
            asNavFor: '.slider-for',
            focusOnSelect: true,
            prevArrow: '<i class="nav-btn nav-btn-lt ti-arrow-left"></i>',
            nextArrow: '<i class="nav-btn nav-btn-rt ti-arrow-right"></i>',

            responsive: [
                {
                    breakpoint: 500,
                    settings: {
                        slidesToShow: 3,
                        infinite: true
                    }
                },
                {
                    breakpoint: 400,
                    settings: {
                        slidesToShow: 2
                    }
                }
            ]

        });
    }


    /*------------------------------------------
        = TOUCHSPIN FOR PRODUCT SINGLE PAGE
    -------------------------------------------*/
    if (jQuery("input[name='product-count']").length) {
        jQuery("input[name='product-count']").TouchSpin({
            verticalbuttons: true
        });
    }

    /*-----------------------
       cart-plus-minus-button 
     -------------------------*/
    jQuery(".cart-plus-minus").append('<div class="dec qtybutton">-</div><div class="inc qtybutton">+</div>');
    jQuery(".qtybutton").on("click", function () {
        var jQuerybutton = jQuery(this);
        var oldValue = jQuerybutton.parent().find("input").val();
        if (jQuerybutton.text() == "+") {
            var newVal = parseFloat(oldValue) + 1;
        } else {
            // Don't allow decrementing below zero
            if (oldValue > 0) {
                var newVal = parseFloat(oldValue) - 1;
            } else {
                newVal = 0;
            }
        }
        jQuerybutton.parent().find("input").val(newVal);
    });



    /*------------------------------------------
       = BACK TO TOP BTN SETTING
   -------------------------------------------*/
    jQuery("body").append("<a href='#' class='back-to-top'><i class='ti-arrow-up'></i></a>");

    function toggleBackToTopBtn() {
        var amountScrolled = 1000;
        if (jQuery(window).scrollTop() > amountScrolled) {
            jQuery("a.back-to-top").fadeIn("slow");
        } else {
            jQuery("a.back-to-top").fadeOut("slow");
        }
    }

    jQuery(".back-to-top").on("click", function () {
        jQuery("html,body").animate({
            scrollTop: 0
        }, 700);
        return false;
    })


    /*------------------------------------------
        = CONTACT FORM SUBMISSION
    -------------------------------------------*/
    if (jQuery("#contact-form-main").length) {
        jQuery("#contact-form-main").validate({
            rules: {
                name: {
                    required: true,
                    minlength: 2
                },

                email: "required",

                phone: "required",

                subject: {
                    required: true
                }


            },

            messages: {
                name: "Please enter your name",
                email: "Please enter your email address",
                phone: "Please enter your phone number",
                subject: "Please select your contact subject"
            },

            submitHandler: function (form) {
                jQuery.ajax({
                    type: "POST",
                    url: "mail-contact.php",
                    data: jQuery(form).serialize(),
                    success: function () {
                        jQuery("#loader").hide();
                        jQuery("#success").slideDown("slow");
                        setTimeout(function () {
                            jQuery("#success").slideUp("slow");
                        }, 3000);
                        form.reset();
                    },
                    error: function () {
                        jQuery("#loader").hide();
                        jQuery("#error").slideDown("slow");
                        setTimeout(function () {
                            jQuery("#error").slideUp("slow");
                        }, 3000);
                    }
                });
                return false; // required to block normal submit since you used ajax
            }

        });
    }



    /*==========================================================================
        WHEN DOCUMENT LOADING
    ==========================================================================*/
    jQuery(window).on('load', function () {

        preloader();

        masonryGridSetting();

        toggleMobileNavigation();

        smallNavFunctionality();

        sortingGallery();

    });



    /*==========================================================================
        WHEN WINDOW SCROLL
    ==========================================================================*/
    jQuery(window).on("scroll", function () {

        if (jQuery(".wpo-site-header").length) {
            stickyMenu(jQuery('.wpo-site-header .navigation'), "sticky-on");
        }

        toggleBackToTopBtn();

    });


    /*==========================================================================
        WHEN WINDOW RESIZE
    ==========================================================================*/
    jQuery(window).on("resize", function () {
        toggleClassForSmallNav();
        //smallNavFunctionality();

        clearTimeout(jQuery.data(this, 'resizeTimer'));
        jQuery.data(this, 'resizeTimer', setTimeout(function () {
            smallNavFunctionality();
        }, 200));

    });


    // login

    jQuery(".reveal6").on('click', function () {
        var jQuerypwd = jQuery(".pwd6");
        if (jQuerypwd.attr('type') === 'text') {
            jQuerypwd.attr('type', 'password');
        } else {
            jQuerypwd.attr('type', 'text');
        }
    });


    jQuery(".reveal3").on('click', function () {
        var jQuerypwd = jQuery(".pwd2");
        if (jQuerypwd.attr('type') === 'text') {
            jQuerypwd.attr('type', 'password');
        } else {
            jQuerypwd.attr('type', 'text');
        }
    });

    jQuery(".reveal2").on('click', function () {
        var jQuerypwd = jQuery(".pwd3");
        if (jQuerypwd.attr('type') === 'text') {
            jQuerypwd.attr('type', 'password');
        } else {
            jQuerypwd.attr('type', 'text');
        }
    });



})(window.jQuery);

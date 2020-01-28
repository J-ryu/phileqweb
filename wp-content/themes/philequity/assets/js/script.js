(function($) {

	"use strict";


    /*------------------------------------------
        = FUNCTIONS
    -------------------------------------------*/
    // Check ie and version
    function isIE () {
        var myNav = navigator.userAgent.toLowerCase();
        return (myNav.indexOf('msie') != -1) ? parseInt(myNav.split('msie')[1], 10) : false;
    }


    // Toggle mobile navigation
    function toggleMobileNavigation() {
        var navbar = $(".navigation-holder");
        var openBtn = $(".navbar-header .open-btn");
        var closeBtn = $(".navigation-holder .close-navbar");

        openBtn.on("click", function() {
            if (!navbar.hasClass("slideInn")) {
                navbar.addClass("slideInn");
            }
            return false;
        })

        closeBtn.on("click", function() {
            if (navbar.hasClass("slideInn")) {
                navbar.removeClass("slideInn");
            }
            return false;            
        })
    }

    toggleMobileNavigation();


    // Function for toggle a class for small menu
    function toggleClassForSmallNav() {
        var windowWidth = window.innerWidth;
        var mainNav = $("#navbar > ul");

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
        var mainNav = $(".navigation-holder");
        var smallNav = $(".navigation-holder > .small-nav");
        var subMenu = smallNav.find(".sub-menu");
        var megamenu = smallNav.find(".mega-menu");
        var menuItemWidthSubMenu = smallNav.find(".menu-item-has-children > a");

        if (windowWidth <= 991) {
            subMenu.hide();
            megamenu.hide();
            menuItemWidthSubMenu.on("click", function(e) {
                var $this = $(this);
                $this.siblings().slideToggle();
                 e.preventDefault();
                e.stopImmediatePropagation();
            })
        } else if (windowWidth > 991) {
            mainNav.find(".sub-menu").show();
            mainNav.find(".mega-menu").show();
        }
    }

    smallNavFunctionality();


    // Parallax background
    function bgParallax() {
        if ($(".parallax").length) {
            $(".parallax").each(function() {
                var height = $(this).position().top;
                var resize     = height - $(window).scrollTop();
                var doParallax = -(resize/5);
                var positionValue   = doParallax + "px";
                var img = $(this).data("bg-image");

                $(this).css({
                    backgroundImage: "url(" + img + ")",
                    backgroundPosition: "50%" + positionValue,
                    backgroundSize: "cover"
                });
            });
        }
    }


    // Hero slider background setting
    function sliderBgSetting() {
        if ($(".hero-slider .slide").length) {
            $(".hero-slider .slide").each(function() {
                var $this = $(this);
                var img = $this.find(".slider-bg").attr("src");

                $this.css({
                    backgroundImage: "url("+ img +")",
                    backgroundSize: "cover",
                    backgroundPosition: "center center"
                })
            });
        }
    }


    //Setting hero slider
    function heroSlider() {
        if ($(".hero-slider").length) {
            $(".hero-slider").slick({
                autoplay: true,
                autoplaySpeed: 6000,
                pauseOnHover: true,
                arrows: true,
                prevArrow: '<button type="button" class="slick-prev">Previous</button>',
                nextArrow: '<button type="button" class="slick-next">Next</button>',
                dots: true,
                fade: true,
                cssEase: 'linear'
            });
        }
    }


    /*------------------------------------------
        = HIDE PRELOADER
    -------------------------------------------*/
    function preloader() {
        if($('.preloader').length) {
            $('.preloader').delay(100).fadeOut(500, function() {

                //active wow
                wow.init();

                //Active heor slider
                heroSlider();

            });
        }
    }


    /*------------------------------------------
        = WOW ANIMATION SETTING
    -------------------------------------------*/
    var wow = new WOW({
        boxClass:     'wow',      // default
        animateClass: 'animated', // default
        offset:       0,          // default
        mobile:       true,       // default
        live:         true        // default
    });


    /*------------------------------------------
        = ACTIVE POPUP IMAGE
    -------------------------------------------*/  
    if ($(".fancybox").length) {
        $(".fancybox").fancybox({
            openEffect  : "elastic",
            closeEffect : "elastic",
            wrapCSS     : "project-fancybox-title-style"
        });
    }


    /*------------------------------------------
        = POPUP VIDEO
    -------------------------------------------*/  
    if ($(".video-btn").length) {
        $(".video-btn").on("click", function(){
            $.fancybox({
                href: this.href,
                type: $(this).data("type"),
                'title'         : this.title,
                helpers     : {  
                    title : { type : 'inside' },
                    media : {}
                },

                beforeShow : function(){
                    $(".fancybox-wrap").addClass("gallery-fancybox");
                }
            });
            return false
        });    
    }


    /*------------------------------------------
        = ACTIVE GALLERY POPUP IMAGE
    -------------------------------------------*/  
    if ($(".popup-gallery").length) {
        $('.popup-gallery').magnificPopup({
            delegate: 'a',
            type: 'image',

            gallery: {
              enabled: true
            },

            zoom: {
                enabled: true,

                duration: 300,
                easing: 'ease-in-out',
                opener: function(openerElement) {
                    return openerElement.is('img') ? openerElement : openerElement.find('img');
                }
            }
        });    
    }


    /*------------------------------------------
        = FUNCTION FORM SORTING GALLERY
    -------------------------------------------*/
    function sortingGallery() {
        if ($(".sortable-gallery .gallery-filters").length) {
            var $container = $('.gallery-container');
            $container.isotope({
                filter:'*',
                animationOptions: {
                    duration: 750,
                    easing: 'linear',
                    queue: false,
                }
            });

            $(".gallery-filters li a").on("click", function() {
                $('.gallery-filters li .current').removeClass('current');
                $(this).addClass('current');
                var selector = $(this).attr('data-filter');
                $container.isotope({
                    filter:selector,
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
        if ($('.masonry-gallery').length) {
            var $grid =  $('.masonry-gallery').masonry({
                itemSelector: '.grid-item',
                columnWidth: '.grid-item',
                percentPosition: true
            });

            $grid.imagesLoaded().progress( function() {
                $grid.masonry('layout');
            });
        }
    }

    // masonryGridSetting();
	
	
    /*------------------------------------------
        = STICKY HEADER
    -------------------------------------------*/

    // Function for clone an element for sticky menu
    function cloneNavForSticyMenu($ele, $newElmClass) {
        $ele.addClass('original').clone().insertAfter($ele).addClass($newElmClass).removeClass('original');
    }

    // clone home style 1 navigation for sticky menu
    if ($('.site-header .navigation').length) {
        cloneNavForSticyMenu($('.site-header .navigation'), "sticky-header");
    }

    // Function for sticky menu
    function stickIt($stickyClass, $toggleClass) {

        if ($(window).scrollTop() >= 300) {
            var orgElement = $(".original");
            var coordsOrgElement = orgElement.offset();
            var leftOrgElement = coordsOrgElement.left;  
            var widthOrgElement = orgElement.css("width");

            $stickyClass.addClass($toggleClass);

            $stickyClass.css({
                "width": widthOrgElement
            }).show();

            $(".original").css({
                "visibility": "hidden"
            });

        } else {

            $(".original").css({
                "visibility": "visible"
            });

            $stickyClass.removeClass($toggleClass);
        }
    }


    /*------------------------------------------
        = HEADER SEARCH AREA
    -------------------------------------------*/
    if ($(".header-search-area").length) {
        var serachFormBox = $(".header-search-area .header-search-form");
        var openSeachBtn = $(".header-search-area .open-btn");
        
        $(document.body).append(serachFormBox);
        serachFormBox.hide();

        openSeachBtn.on("click", function(e) {
            serachFormBox.slideDown();
            return false;
        });

        serachFormBox.on("click", function() {
            serachFormBox.slideUp();
            return false;
        }).find(".form").on("click", function(e) {
            e.stopPropagation();
        })
    }


    /*------------------------------------------
        = PROGRESS BAR
    -------------------------------------------*/
    function progressBar() {
        if ($(".progress-bar").length) {
            var $progress_bar = $('.progress-bar');
            $progress_bar.appear();
            $(document.body).on('appear', '.progress-bar', function() {
                var current_item = $(this);
                if (!current_item.hasClass('appeared')) {
                    var percent = current_item.data('percent');
                    current_item.append('<span>' + percent + '%' + '</span>').css('width', percent + '%').addClass('appeared');
                }
                
            });
        };
    }

    progressBar();


    /*------------------------------------------
        = PARTNERS SLIDER
    -------------------------------------------*/
    if ($(".partners-slider").length) {
        $(".partners-slider").owlCarousel({
            autoplay:true,
            smartSpeed: 300,
            margin: 30,
            loop:true,
            autoplayHoverPause:true,
            dots: false,
            responsive: {
                0 : {
                    items: 2
                },

                400 : {
                    items: 3
                },

                550 : {
                    items: 4
                },

                992 : {
                    items: 5
                }
            }
        });
    }


    /*------------------------------------------
        = TESTIMONIALS SLIDER
    -------------------------------------------*/
    if ($(".testimonials-slider").length) {
        $(".testimonials-slider").owlCarousel({
            autoplay:true,
            smartSpeed: 300,
            loop:true,
            autoplayHoverPause:true,
            dots: false,
            nav: true,
            navText: ['<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>'],
            responsive: {
                0 : {
                    items: 1
                },

                600 : {
                    items: 2
                }
            }
        });
    }


    /*------------------------------------------
        = SERVICES S2 SLIDER
    -------------------------------------------*/
    if ($(".services-s2-slider").length) {
        $(".services-s2-slider").owlCarousel({
            autoplay:true,
            smartSpeed: 300,
            margin: 30,
            loop:true,
            autoplayHoverPause:true,
            responsive: {
                0 : {
                    items: 1
                },

                600 : {
                    items: 2
                },

                1200 : {
                    items: 3
                }
            }
        });
    }


    /*------------------------------------------
        = FAN FACT COUNT
    -------------------------------------------*/
    if ($(".start-count").length) {
        $('.counter').appear();
        $(document.body).on('appear', '.counter', function(e) {
            var $this = $(this),
            countTo = $this.attr('data-count');

            $({ countNum: $this.text()}).animate({
                countNum: countTo
            }, {
                duration: 3000,
                easing:'linear',
                step: function() {
                    $this.text(Math.floor(this.countNum));
                },
                complete: function() {
                    $this.text(this.countNum);
                }
            });
        });
    }


    /*------------------------------------------
        = BACK TO TOP BTN SETTING
    -------------------------------------------*/
    $("body").append("<a href='#' class='back-to-top'><i class='fa fa-long-arrow-up'></i></a>");

    function toggleBackToTopBtn() {
        var amountScrolled = 300;
        if ($(window).scrollTop() > amountScrolled) {
            $("a.back-to-top").fadeIn("slow");
        } else {
            $("a.back-to-top").fadeOut("slow");
        }
    }

    $(".back-to-top").on("click", function() {
        $("html,body").animate({
            scrollTop: 0
        }, 700);
        return false;
    });


    /*------------------------------------------
        = SERVICES S2 SLIDER
    -------------------------------------------*/
    if ($(".pricing-slider").length) {
        $(".pricing-slider").owlCarousel({
            autoplay:true,
            smartSpeed: 300,
            margin: 30,
            loop:true,
            autoplayHoverPause:true,
            responsive: {
                0 : {
                    items: 1
                },

                600 : {
                    items: 2
                },

                1200 : {
                    items: 3,
                    center: true,
                }
            }
        });
    }


   /*------------------------------------------
        = CAROUSEL - 2
    -------------------------------------------*/

	$('#myCarousel').carousel({
        interval: 100000
      });
  
      // handles the carousel thumbnails
      $('[id^=carousel-selector-]').hover(function() {
        var id_selector = $(this).attr("id");
        //console.log(id_selector);
        var id = id_selector.substr(id_selector.length - 1);
        //console.log(id);
        id = parseInt(id);
        $('#myCarousel').carousel(id - 1);
        $('[id^=carousel-selector-]').removeClass('selected');
        $(this).addClass('selected');
        //console.log(this);
      });
  
      // when the carousel slides, auto update
      $('#myCarousel').on('slid.bs.carousel', function(e) {
        var id = $('.item.active').data('slide-number');
        id = parseInt(id);
        $('[id^=carousel-selector-]').removeClass('selected');
        $('[id=carousel-selector-' + id + ']').addClass('selected');
      });



    /*------------------------------------------
        = CHART
    -------------------------------------------*/
    function caseStudyChart() {
        if ($("#chart").length) {

            var $chart = $("#chart");
            $chart.appear();

            $(document.body).on('appear', '#chart', function() {
                var current_item = $(this);
                
                if (!current_item.hasClass('appeared')) {
                    current_item.addClass('appeared');

                    var ctx = $("#chart");
                    var lineChart = new Chart(ctx, {
                        type: "line",
                        data: {
                            labels: ["May", "June", "July", "Aug", "Sep"],
                            datasets: [
                                {
                                    label: "Other Clients",
                                    data: [2000, 3500, 2900, 3800, 3000],
                                    backgroundColor: "rgba(236,233,233, 0.5)",
                                    borderColor: "#7da2f5",
                                    borderWidth: 2,
                                    lineTension: 0,
                                    pointRadius: 4,
                                    pointBorderColor: "#7da2f5",
                                    pointBackgroundColor: "#fff"

                                },

                                {
                                    label: "Our clients",
                                    data: [3000, 5000,4000, 5500, 4000],
                                    backgroundColor: "rgba(254,245,231, 0.5)",
                                    borderColor: "#f6b34a",
                                    borderWidth: 2,
                                    lineTension: 0,
                                    pointRadius: 4,
                                    pointBorderColor: "#f6b34a",
                                    pointBackgroundColor: "#fff"

                                },
                            ]
                        },
                        options: {
                            maintainAspectRatio: false,
                            animation: {
                                duration: 2500,
                            }
                        }
                    });
                }                
            });
        }
    }

    caseStudyChart();
    


    /*------------------------------------------
        = GOOGLE MAP
    -------------------------------------------*/  
    function map() {

        var locations = [
            ['Hotel royal international khulna ', 22.8103888, 89.5619609,1],
            ['City inn khulna', 22.820884, 89.551216,2],
        ];

        var map = new google.maps.Map(document.getElementById('map'), {
            center: new google.maps.LatLng( 22.8103888, 89.5619609),
            zoom: 12,
            scrollwheel: false,
            mapTypeId: google.maps.MapTypeId.ROADMAP

        });

        var infowindow = new google.maps.InfoWindow();

        var marker, i;

        for (i = 0; i < locations.length; i++) {  
                marker = new google.maps.Marker({
                position: new google.maps.LatLng(locations[i][1], locations[i][2]),
                map: map,
                icon:'assets/images/map-marker.png'
            });

            google.maps.event.addListener(marker, 'click', (function(marker, i) {
                return function() {
                    infowindow.setContent(locations[i][0]);
                    infowindow.open(map, marker);
                }
            })(marker, i));
        }

    }; 


    /*------------------------------------------
        = CONTACT FORM SUBMISSION
    -------------------------------------------*/  
    if ($("#contact-form").length) {
        $("#contact-form").validate({
            rules: {
                name: {
                    required: true,
                    minlength: 2
                },

                email: "required",

                phone: "required",

                business: "required",
				
				subject: "required",

                message: "required",
				
				address: "required",

               
            },

            messages: {
                name: "Please enter your name",
                email: "Please enter your email",
                phone: "Please enter your phone",
                address: "Please write your address",
				subject: "Please select a subject",
                message: "Please write your message",
               
            },

            submitHandler: function (form) {
                $.ajax({
                    type: "POST",
                    url: "mail.php",
                    data: $(form).serialize(),
                    success: function () {
                        $( "#loader").hide();
                        $( "#success").slideDown( "slow" );
                        setTimeout(function() {
                        $( "#success").slideUp( "slow" );
                        }, 3000);
                        form.reset();
                    },
                    error: function() {
                        $( "#loader").hide();
                        $( "#error").slideDown( "slow" );
                        setTimeout(function() {
                        $( "#error").slideUp( "slow" );
                        }, 3000);
                    }
                });
                return false; // required to block normal submit since you used ajax
            }

        });
    }

    // Contact page form
    if ($("#contact-form-s2").length) {
        $("#contact-form-s2").validate({
            rules: {
                name: {
                    required: true,
                    minlength: 2
                },

                email: {
                    required: true,
                    minlength: 2
                },

                location: "required",

            },

            messages: {
                name: "Please enter your name",
                email: "Please enter your email",
                location: "Please enter your location",
            },

            submitHandler: function (form) {
                $.ajax({
                    type: "POST",
                    url: "mail-2.php",
                    data: $(form).serialize(),
                    success: function () {
                        $( "#loader").hide();
                        $( "#success").slideDown( "slow" );
                        setTimeout(function() {
                        $( "#success").slideUp( "slow" );
                        }, 3000);
                        form.reset();
                    },
                    error: function() {
                        $( "#loader").hide();
                        $( "#error").slideDown( "slow" );
                        setTimeout(function() {
                        $( "#error").slideUp( "slow" );
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
        $(window).on('load', function() {

            preloader();

            sliderBgSetting();
			
            toggleMobileNavigation();

            smallNavFunctionality();

            sortingGallery();

            if($("#map").length) {
                map();
            }

        });





    /*==========================================================================
        WHEN WINDOW SCROLL
    ==========================================================================*/
    $(window).on("scroll", function() {

		if ($(".site-header").length) {
            stickIt($(".sticky-header"), "sticky-on"); 
        }

        toggleBackToTopBtn();
        
    });

    
    /*==========================================================================
        WHEN WINDOW RESIZE
    ==========================================================================*/
    $(window).on("resize", function() {
        
        toggleClassForSmallNav();

        clearTimeout($.data(this, 'resizeTimer'));
        $.data(this, 'resizeTimer', setTimeout(function() {
            smallNavFunctionality();
        }, 200));

    });

   /*==========================================================================
        Number adds comma RESIZE
    ==========================================================================*/

    $('input.number').keyup(function(event) {

        // skip for arrow keys
        if(event.which >= 37 && event.which <= 40) return;
      
        // format number
        $(this).val(function(index, value) {
          return value
          .replace(/\D/g, "")
          .replace(/\B(?=(\d{3})+(?!\d))/g, ",")
          ;
        });
      });



       /*==========================================================================
    RETURN FUNDS CALCULATOR
    ==========================================================================*/

//     $('#computeReturn').click(function(){  
//         $('#return-funds-form').hide();  
//         $('#return-funds-form').addClass('hide');

    
//    });  



    /*==========================================================================
        INVESTMENT CALCULATOR
    ==========================================================================*/

    $('#submit_investment').click(function(){  
       
       
        var investment_years = $('#inv_years').val();  
        var investment_initial = $('#inv_initial').val();     
        // var contribution_option = document.getElementById('inv_contribution_option_1').value;
        // var contribution_option = $('#inv_contribution').val(); 

        var contribution_option = document.getElementById("inv_contribution").value;
        
        var contribution_amount_initial = document.getElementById('inv_contribution_initial').value;
        // console.log('contribution_option',contribution_option);

        var cagr_amount;
        
    
        investment_initial=investment_initial.replace(/\,/g,''); // 1125, but a string, so convert it to number
        investment_initial=parseInt(investment_initial,10);

        contribution_amount_initial=contribution_amount_initial.replace(/\,/g,''); // 1125, but a string, so convert it to number
        contribution_amount_initial=parseInt(contribution_amount_initial,10);


        if (contribution_option == 1) {
            contribution_option = 1;
            // contribution_option = document.getElementById('inv_contribution_option_1').value;

            if (investment_years >= 9) {
                cagr_amount = 0.1;
            } 
            else if (investment_years < 9 && investment_years > 3 ) {
                cagr_amount = 0.05;
            } 
            else {
                cagr_amount = 0.01;
            } 

            
        }

        else if (contribution_option == 2) {
            contribution_option = 2;
            
            // contribution_option = document.getElementById('inv_contribution_option_2').value;

            if (investment_years >= 9) {
                cagr_amount = 0.0488;
            } 
            else if (investment_years < 9 && investment_years > 3 ) {
                cagr_amount = 0.225;
            } 
            else {
                cagr_amount = 0.008;
            } 

        }

        else if (contribution_option == 4) {
            contribution_option = 4;
            // contribution_option = document.getElementById('inv_contribution_option_3').value;

            
            if (investment_years >= 9) {
                cagr_amount = 0.0241;
            } 
            else if (investment_years < 9 && investment_years > 3 ) {
                cagr_amount = 0.0112;
            } 
            else {
                cagr_amount = 0.004;
            } 
        }

        else {

            // contribution_option = document.getElementById('inv_contribution_option_4').value;
           
            contribution_option = 12;
            if (investment_years >= 9) {
                cagr_amount = 0.008;
            } 
            else if (investment_years < 9 && investment_years > 3 ) {
                cagr_amount = 0.0037;
            } 
            else {
                cagr_amount = 0.0013;
            } 

        }
      
       

        // console.log('contribution_option',contribution_option);
        // console.log('cagr_amount',cagr_amount);


        var investment_additional = getAdditionalInvestment(contribution_amount_initial, contribution_option);
        var totalContribution = parseInt(investment_initial) + ((parseInt(investment_additional) * parseInt(investment_years)) - parseInt(contribution_amount_initial))
      

        showHiddenClass();

        getloops(investment_years,investment_initial,cagr_amount,contribution_option);


    
   });  

function getloops(investment_years, investment_initial, cagr, contribution_option) {

    var initial =  parseInt(investment_initial);
    var result;
    var resultstart;
    var years = parseInt(investment_years);
    var contribute;
    var year_new;
    var real_initial =  parseInt(investment_initial);
    var thisyr;
   

    if (contribution_option == 1) {
         contribute = 'Yearly'  
         thisyr = years * 1; 
        //  console.log(thisyr);
    }

    else if (contribution_option == 2) {
        
        contribute = 'Semi-annually' 
           thisyr = years * 2;
        // console.log(thisyr);
       
    }

    else if (contribution_option == 4) {
        
        contribute = 'Quarterly' 
        thisyr = years * 4;
        // console.log(thisyr);
     
    }

    else if (contribution_option == 12) {
        
        contribute = 'Monthly' 
        thisyr = years * 12;
        // console.log(thisyr);
      

    }
    

       
    $( "#tbody-investment" ).empty();
       
    for (var startInit = 0; startInit < thisyr ; startInit++) {
       
        result = (initial * cagr) + initial;
        resultstart = (real_initial * cagr) + real_initial;

        real_initial = result - 1000;
        initial = result + 1000;
        
        year_new = startInit + 1;
   

      var tablediv = document.getElementById('tbody-investment');
      var resultdiv = "<tr> <td class='text-center'>" + year_new + "</td> <td class='text-center'> " +  parseInt(real_initial).toFixed(2) + "  </td>  <td class='text-center'> " +  parseFloat(result).toFixed(2) + "  </td> </tr>";
      tablediv.innerHTML += resultdiv;  
    
      
    }

    
    

    var div = document.getElementById('result-investment');
    var txt1 = " <p> Your Initial Investment: " + parseInt(investment_initial) + " <br> Years of Invested plan: " + thisyr + " <br> Your Payment option Contribution: " + contribute + " <br><br> Expected Value: <span style='color:red; font-weight:bolder !important'>" + parseFloat(result).toFixed(2) + "  </span>  .</p>";  
    div.innerHTML = txt1;           

    var div2 = document.getElementById('result-investment-2');
    var txt2 = "<div class='col col-md-12'>  <p style='text-align:center;border:solid 1px red;padding: 10px;'> <em> Figures above are based on the historical performance of the fund for presentation purposes only.<br> Above figures are not actual and in no way depict guarantees by Philequity Management Inc. <br> Investing involves risk, consult us before investing.</em></p> </div> <div class='btns text-center'> <a style='width: 250px; margin:10px;' href='https://uat.philequity.net/all-calculator' class='theme-btn'>Other calculators</a> <a style='width: 250px; margin:10px;' href='https://uat.philequity.net/contact-us' class='theme-btn'>Talk to us</a> <a style='width: 250px; margin:10px;'  href='https://uat.philequity.net'  class='theme-btn'>Learn more</a> </div>";
    
    div2.innerHTML = txt2;         
  
}


function getAdditionalInvestment(x,y) {
    
    var result = parseInt(x) *  parseInt(y);

    return result;
}

function showHiddenClass() {

    var resultinvestment = document.getElementById("result-investment");
    resultinvestment.classList.remove("hidden");

    var resultinvestment2 = document.getElementById("result-investment-2");
    resultinvestment2.classList.remove("hidden");

    // var tableinvestment = document.getElementById("table-investment");
    // tableinvestment.classList.remove("hidden");
    
}




})(window.jQuery);

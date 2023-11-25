(function ($) {
    "use strict";

    var windowWidth = $(window).width(),
        windowHeight = $(window).height(),
        headTag = $('head'),
        body = $('body'),
        isMobile = windowWidth < 768;

    $('.scroll_button h6 a').bind('click', function (event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top + 2 + 'px'
        }, 1500, 'easeInOutCubic');
        event.preventDefault();
    });

    var project_slider = $('.project_slider');
    project_slider.owlCarousel({
        loop: true,
        margin: 0,
        autoplay: true,
        dots: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            992: {
                items: 4
            }
        }
    });

    $('ul.project_nav li').eq(0).on('click', function () {
        project_slider.trigger('prev.owl.carousel');
    });
    $('ul.project_nav li').eq(1).on('click', function () {
        project_slider.trigger('next.owl.carousel');
    });
    // Jquery counterUp
    $('.counter').counterUp({
        time: 3000
    });

    $(".scroll_button > p a, .footer_area .scroll_button i").on('click', function () {
        $("#footermap").toggleClass('show');
    });

    var client_slider = $('.client_slider');
    client_slider.owlCarousel({
        loop: true,
        margin: 0,
        autoplay: true,
        dots: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            992: {
                items: 1
            }
        }
    });

    var partner_slider = $('.partner_slider');
    partner_slider.owlCarousel({
        loop: true,
        margin: 0,
        autoplay: true,
        dots: true,
        responsive: {
            0: {
                items: 2
            },
            600: {
                items: 4
            },
            992: {
                items: 6
            }
        }
    });

    var clientsd = $('.clientsd');
    clientsd.owlCarousel({
        loop: true,
        margin: 0,
        autoplay: true,
        dots: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            992: {
                items: 1
            }
        }
    });

    var pro_sing_slider = $('.pro_sing_slider');
    pro_sing_slider.owlCarousel({
        loop: true,
        margin: 0,
        autoplay: true,
        dots: false,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            992: {
                items: 2
            }
        }
    });

    $('ul.pro_sing_nav .testi_next').on('click', function () {
        pro_sing_slider.trigger('next.owl.carousel');
    });
    $('ul.pro_sing_nav .testi_prev').on('click', function () {
        pro_sing_slider.trigger('prev.owl.carousel');
    });

    var googleMapSelector = $('#map'),
        myCenter = new google.maps.LatLng(-11.859432, -77.131611);

    function initialize() {
        var mapProp = {
            center: myCenter,
            zoom: 16,
            scrollwheel: false,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        var map = new google.maps.Map(document.getElementById("map"), mapProp);
        var marker = new google.maps.Marker({
            position: myCenter,
            animation: google.maps.Animation.BOUNCE,
            icon: 'img/google-pin.png'
        });
        marker.setMap(map);
    }
    if (googleMapSelector.length) {
        google.maps.event.addDomListener(window, 'load', initialize);
    }

    isMobile ? windowHeight = 648 : null;
    var camWraper = $('.camera_wraper');
    if (camWraper.length) {
        camWraper.camera({
            height: windowHeight + 'px',
            pagination: true,
            autoAdvance: true,
            thumbnails: true,
            loader: true,
            playPause: false,
            fx: 'random'
        });
    }

    $('nav.mb_menu').meanmenu({
        meanScreenWidth: '767'
    });

    $(window).load(function(){
        $('.grid').masonry({

            itemSelector: '.grid-item'
        });
    });

})(jQuery);
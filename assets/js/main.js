
var chart, options, options1, options2, options3;

jQuery(document).ready( function($) {
    $('body').scrollTop(0);

    if ( $(window).outerWidth() < 900 ) $('.header-height').removeClass('header').addClass('whiteHeader');
    $(window).load(function () {
        $('.load-overlay').fadeOut('slow');
    });


    $('.hamburger').on('click', function(){
        closeOpen($(this));
    });

    $('.closeHamburger').on('click', function(){
        closeOpen($(this));
    });

    function closeOpen (a) {


        if (a.hasClass('is-active')) {
            $(".mobile-menu").fadeOut('fast');
            a.removeClass('is-active');
            $("body").css({
                height: 'auto',
                overflow: 'visible'
            });
            $('.hamburger').removeClass('is-active');
        }
        else {
            a.addClass('is-active');
            $(".mobile-menu").fadeIn('fast');
            $("body").css({
                height: '100%',
                overflow: 'hidden'
            });
            $('.closeHamburger').addClass('is-active');

        }
        //(function fadeNext(collection){
        //    collection.eq(0).fadeIn(100,  function(){
        //        (collection=collection.slice(1)).length
        //        && fadeNext(collection)
        //    });
        //})($('.mobile-menu-content li'))
    }

    $(function() {
        //caches a jQuery object containing the header element
        var header = $(".header");
        $(window).scroll(function() {
            var scroll = $(window).scrollTop();

            if (scroll >= 10) {
                header.removeClass('header').addClass("whiteHeader");
            } else {
                header.removeClass("whiteHeader").addClass('header');
            }
        });
    });

    // Hide Header on on scroll down
    var didScroll;
    var lastST = 0;
    var delta = 5;
    var navbarHeight = $('.header-height').outerHeight();

    $(window).scroll(function(event){
        didScroll = true;
    });

    setInterval(function() {
        if (didScroll) {
            hasScrolled();
            didScroll = false;
        }
    }, 250);

    function hasScrolled() {
        var st = $(this).scrollTop();
        // Make sure they scroll more than delta
        if(Math.abs(lastST - st) <= delta){
            //console.log(lastST);
            //console.log(st);

            return;
        }

        // If they scrolled down and are past the navbar, add class .nav-up.
        // This is necessary so you never see what is "behind" the navbar.
        if (st > lastST && st > navbarHeight){
            // Scroll Down
            $('.header-height').removeClass('nav-down').addClass('nav-up');
        } else {
            // Scroll Up
            if(st + $(window).height() < $(document).height()) {
                $('.header-height').removeClass('nav-up').addClass('nav-down');
            }
        }

        lastST = st;
    }

    var lastScrollTop = $(window).scrollTop();

    $(window).scroll(function(){
        var scrollAmt = $(this).scrollTop();
        var deltaS = scrollAmt - lastScrollTop;
        $('.hero-content').css({
            bottom: "-=" + deltaS/4.5,
            opacity: "-=" + deltaS/700
        });
        lastScrollTop = scrollAmt;
    });

    var swiper = new Swiper('.product-swiper', {
        slidesPerView: 1,
        pagination: '.swiper-pagination',
        paginationClickable: true,
        autoplay: 5000,
        autoplayDisableOnInteraction: false
    });

    var swiper = new Swiper('.home-swiper', {
        slidesPerView: 1,
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        pagination: '.swiper-pagination',
        paginationClickable: true
    });


    var galleryTop = new Swiper('.gallery-top', {
        keyboardControl: true,
        spaceBetween: 10,
        preloadImages: false,
        lazyLoading: true,
        grabCursor: true

    });
    var galleryThumbs = new Swiper('.gallery-thumbs', {
        spaceBetween: 10,
        centeredSlides: true,
        slidesPerView: 'auto',
        touchRatio: 0.2,
        slideToClickedSlide: true
    });
    galleryTop.params.control = galleryThumbs;
    galleryThumbs.params.control = galleryTop;




    $('.spec-header p').on('click', function () {
            var value = $(this).data('value');
            $('.spec-header p').removeClass('active-spec');
            $(this).addClass('active-spec');
            $('.testet').removeClass('hide-chart');
            $('.testet').each(function () {
                if( !$(this).hasClass(value) ){
                    $(this).addClass('hide-chart');
                }
            });
    });

    $('select').select2();


    $('.change-chart').on('change', function(){
        var id = $(this).val();
        $('#container').empty();
        if (id == 1) options = options1;
        if (id == 2) options = options2;
        if (id == 3) options = options3;
        chart = new Highcharts.chart(options);
    });

    options1 = {
        chart: {
            renderTo:'container',
            type: 'line'
        },
        xAxis: {
            categories: [0.5,1,1.5,2,2.5,3,3.5,4,4.5,5,5.5]
        },
        yAxis: {
            min: 0,
            max: 1,
            tickInterval: 0.1,
            title: {
                text: 'DQE'

            }
        },
        plotOptions: {
            line: {
                dataLabels: {
                    enabled: false
                }
            }
        },
        series: [
            {
                name: "CC on 0.75 mm",
                data: [0.91, 0.85, 0.80, 0.72, 0.61, 0.55, 0.48, 0.39, 0.31, 0.24]
            },
            {
                name: "CC off 0.75 mm",
                data: [0.88, 0.84, 0.77, 0.71, 0.62, 0.59, 0.49, 0.45, 0.33, 0.24]
            },
            {
                name: "CC on 2.00 mm",
                data: [0.90, 0.85, 0.80, 0.70, 0.61, 0.53, 0.45, 0.40, 0.31, 0.25]
            },
            {
                name: "CC off 2.00 mm",
                data: [0.79, 0.76, 0.71, 0.66, 0.61, 0.55, 0.49, 0.41, 0.34, 0.25]
            }
            ],

    }

    options2 = {
        chart: {
            renderTo:'container',
            type: 'line'
        },
        xAxis: {
            categories: [0,1,2,3,4,5,6,7,8,9,10]
        },
        yAxis: {
            min: 0,
            max: 1,
            tickInterval: 0.20,
            title: {
                text: 'MTF'

            }
        },
        series: [
            {
                name: "CC on 0.75 mm",
                data: [1.000, 0.931, 0.805, 0.690, 0.595, 0.480, 0.375, 0.260, 0.140, 0.060, 0.040]
            },
            {
                name: "CC off 0.75 mm",
                data: [1.000, 0.940, 0.805, 0.675, 0.545, 0.415, 0.295, 0.190, 0.090, 0.040, 0.059]
            },
            {
                name: "CC on 2.00 mm",
                data: [1.000, 0.940, 0.815, 0.700, 0.600, 0.495, 0.375, 0.260, 0.155, 0.060, 0.025]
            },
            {
                name: "CC off 2.00 mm",
                data: [1.000, 0.950, 0.835, 0.710, 0.580, 0.450, 0.330, 0.215, 0.115, 0.038, 0.038]
            }
            ],

    }

    if ( $('#container').hasClass('chart') ) chart = new Highcharts.chart(options1);
    
    // $(function () {

    // HOME SLIDE

    var slidesWrapper = $('.cd-hero-slider');

    //check if a .cd-hero-slider exists in the DOM
    if ( slidesWrapper.length > 0 ) {
        var primaryNav = $('.cd-primary-nav'),
            sliderNav = $('.cd-slider-nav'),
            navigationMarker = $('.cd-marker'),
            slidesNumber = slidesWrapper.children('li').length,
            visibleSlidePosition = 0,
            autoPlayId,
            autoPlayDelay = 6000;

        //upload videos (if not on mobile devices)
        uploadVideo(slidesWrapper);

        //autoplay slider
        setAutoplay(slidesWrapper, slidesNumber, autoPlayDelay);

        //on mobile - open/close primary navigation clicking/tapping the menu icon
        primaryNav.on('click', function(event){
            if($(event.target).is('.cd-primary-nav')) $(this).children('ul').toggleClass('is-visible');
        });

        //change visible slide
        sliderNav.on('click', 'li', function(event){
            event.preventDefault();
            var selectedItem = $(this);
            if(!selectedItem.hasClass('selected')) {
                // if it's not already selected
                var selectedPosition = selectedItem.index(),
                    activePosition = slidesWrapper.find('li.selected').index();

                if( activePosition < selectedPosition) {
                    nextSlide(slidesWrapper.find('.selected'), slidesWrapper, sliderNav, selectedPosition);
                } else {
                    prevSlide(slidesWrapper.find('.selected'), slidesWrapper, sliderNav, selectedPosition);
                }

                //this is used for the autoplay
                visibleSlidePosition = selectedPosition;

                updateSliderNavigation(sliderNav, selectedPosition);
                updateNavigationMarker(navigationMarker, selectedPosition+1);
                //reset autoplay
                setAutoplay(slidesWrapper, slidesNumber, autoPlayDelay);
            }
        });
    }

    function nextSlide(visibleSlide, container, pagination, n){
        visibleSlide.removeClass('selected from-left from-right').addClass('is-moving').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function(){
            visibleSlide.removeClass('is-moving');
        });

        container.children('li').eq(n).addClass('selected from-right').prevAll().addClass('move-left');
        checkVideo(visibleSlide, container, n);
    }

    function prevSlide(visibleSlide, container, pagination, n){
        visibleSlide.removeClass('selected from-left from-right').addClass('is-moving').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function(){
            visibleSlide.removeClass('is-moving');
        });

        container.children('li').eq(n).addClass('selected from-left').removeClass('move-left').nextAll().removeClass('move-left');
        checkVideo(visibleSlide, container, n);
    }

    function updateSliderNavigation(pagination, n) {
        var navigationDot = pagination.find('.selected');
        navigationDot.removeClass('selected');
        pagination.find('li').eq(n).addClass('selected');
    }

    function setAutoplay(wrapper, length, delay) {
        if(wrapper.hasClass('autoplay')) {
            clearInterval(autoPlayId);
            autoPlayId = window.setInterval(function(){autoplaySlider(length)}, delay);
        }
    }

    function autoplaySlider(length) {
        if( visibleSlidePosition < length - 1) {
            nextSlide(slidesWrapper.find('.selected'), slidesWrapper, sliderNav, visibleSlidePosition + 1);
            visibleSlidePosition +=1;
        } else {
            prevSlide(slidesWrapper.find('.selected'), slidesWrapper, sliderNav, 0);
            visibleSlidePosition = 0;
        }
        updateNavigationMarker(navigationMarker, visibleSlidePosition+1);
        updateSliderNavigation(sliderNav, visibleSlidePosition);
    }

    function uploadVideo(container) {
        container.find('.cd-bg-video-wrapper').each(function(){
            var videoWrapper = $(this);
            if( videoWrapper.is(':visible') ) {
                // if visible - we are not on a mobile device
                var	videoUrl = videoWrapper.data('video'),
                    video = $('<video loop><source src="'+videoUrl+'" type="video/mp4" /><source src="'+videoUrl+'.webm" type="video/webm" /></video>');
                video.appendTo(videoWrapper);
                // play video if first slide
                if(videoWrapper.parent('.cd-bg-video.selected').length > 0) video.get(0).play();
            }
        });
    }

    function checkVideo(hiddenSlide, container, n) {
        //check if a video outside the viewport is playing - if yes, pause it
        var hiddenVideo = hiddenSlide.find('video');
        if( hiddenVideo.length > 0 ) hiddenVideo.get(0).pause();

        //check if the select slide contains a video element - if yes, play the video
        var visibleVideo = container.children('li').eq(n).find('video');
        if( visibleVideo.length > 0 ) visibleVideo.get(0).play();
    }

    function updateNavigationMarker(marker, n) {
        marker.removeClassPrefix('item').addClass('item-'+n);
    }

    $.fn.removeClassPrefix = function(prefix) {
        //remove all classes starting with 'prefix'
        this.each(function(i, el) {
            var classes = el.className.split(" ").filter(function(c) {
                return c.lastIndexOf(prefix, 0) !== 0;
            });
            el.className = $.trim(classes.join(" "));
        });
        return this;
    };

    $(window).on('resize', function(){
        if ( $(window).outerWidth() < 900 ) $('.header-height').removeClass('header').addClass('whiteHeader');
        if ( $(window).outerWidth() > 900 && $(window).scrollTop() < 10 ) $('.header-height').removeClass('whiteHeader').addClass('header');
    });


});

jQuery(document).ready( function($) {

    var faqTrigger = $('.faq-trigger');

    //show faq content clicking on faqTrigger
    faqTrigger.on('click', function(event){
        event.preventDefault();
        $(this).next('.faq-content').slideToggle(200).end().parent('li').toggleClass('content-visible');
        $(this).toggleClass('toggle-plus');
    });
});
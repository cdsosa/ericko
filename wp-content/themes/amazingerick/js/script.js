jQuery(document).ready(function() {

    // Mobile-Nav

    var mbutton = jQuery('.mobileToggle');

    mbutton.click( function() {

        var  mnav = jQuery('.mainMenu');

        if (mnav.is(':visible')) {
            mnav.fadeOut(225);
            mnav.removeClass('gloss');
            mbutton.removeClass('active');
        }
        else {
            mnav.fadeIn(225);
            mnav.addClass('gloss');
            mbutton.addClass('active');
        }
    });

    //Header Scroll

    jQuery(window).scroll(function () {
        jQuery('header').toggleClass("shadow", (jQuery(window).scrollTop() > 250));
    });

    var parallax = jQuery('.parallax'),
        divOuterHeight = parallax.outerHeight();
    console.log(parallax);

    jQuery(window).scroll(function() {
        var scrollY = jQuery(window).scrollTop();

        var speedScroll = (scrollY/divOuterHeight)*160;

        if (speedScroll == 0) {
            parallax.css('background-position', '50% 0%');
        } else if (speedScroll < 100) {
            parallax.css('background-position', '50% ' + speedScroll + '%');
        } else if (speedScroll > 100) {
            parallax.css('background-position', '50% 100%');
        }
    });

    //Lightbox
    var lbTrigger = jQuery('.lightbox-trigger')

    lbTrigger.click( function() {
        var  lb = jQuery('.lightbox');
        if (lb.is(':visible')) {
            lb.fadeOut(225);
        }
        else {
            lb.fadeIn(225);
            jQuery('.lightbox iframe').attr('src', 'https://player.vimeo.com/video/151284807?autoplay=1');
        }
    });

    var faTimes = jQuery('.fa-times');

    faTimes.click( function() {
        var  lb = jQuery('.lightbox');

        lb.fadeOut(225);
        jQuery('.lightbox iframe').attr('src', '');
    });

    //Masonry

    var jQuerygrid = jQuery('.masonary').masonry({
        itemSelector: '.item',
        columnWidth: '.item-sizer',
        percentPosition: true
    }).imagesLoaded(function() {
        jQuery(this).masonry('reload');
    });

});


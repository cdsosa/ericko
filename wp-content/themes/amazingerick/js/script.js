$(document).ready(function() {

    // Mobile-Nav

    var mbutton = jQuery('.mobileToggle');

    mbutton.click( function() {

        var  mnav = jQuery('.mobileNav');

        if (mnav.is(':visible')) {
            mnav.slideUp(250);
            ('.cover').show();
        }
        else {
            mnav.slideDown(250);
        }
    });

    $(".accordian > ul > li").click(function(){
        //slide up all the link lists
        $(".accordian > ul > ul").slideUp();
        //slide down the link list below the h3 clicked - only if its closed
        if(!$(this).next().is(":visible"))
        {
            $(this).next().slideDown();
        }
    })

    $(".accordian > ul > li").click(function(){
        $(".accordian > ul > li ").removeClass('rotate');
        if(!$(this).hasClass('rotate')) {
            $(this).addClass('rotate');
        }
    })

    // Initialize Masonry
    $('#content').masonry({
        columnWidth: 320,
        itemSelector: '.item',
        isFitWidth: true,
        isAnimated: !Modernizr.csstransitions
    }).imagesLoaded(function() {
        $(this).masonry('reload');
    });

});


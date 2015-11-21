jQuery(document).ready(function() {

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

    jQuery(".accordian > ul > li").click(function(){
        //slide up all the link lists
        jQuery(".accordian > ul > ul").slideUp();
        //slide down the link list below the h3 clicked - only if its closed
        if(!jQuery(this).next().is(":visible"))
        {
            jQuery(this).next().slideDown();
        }
    })

    jQuery(".accordian > ul > li").click(function(){
        jQuery(".accordian > ul > li ").removeClass('rotate');
        if(!jQuery(this).hasClass('rotate')) {
            jQuery(this).addClass('rotate');
        }
    })

    var jQuerygrid = jQuery('.masonary').masonry({
        itemSelector: '.item',
        columnWidth: '.item-sizer',
        percentPosition: true
    }).imagesLoaded(function() {
        jQuery(this).masonry('reload');
    });

});


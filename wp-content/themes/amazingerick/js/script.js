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

    //Masonry

    var jQuerygrid = jQuery('.masonary').masonry({
        itemSelector: '.item',
        columnWidth: '.item-sizer',
        percentPosition: true
    }).imagesLoaded(function() {
        jQuery(this).masonry('reload');
    });

});


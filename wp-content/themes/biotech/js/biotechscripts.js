/**
 * biotechscripts.js
 *
 * Handles toggling the navigation menu for small screens and enables tab
 * support for dropdown menus.
 */
jQuery(document).ready(function($) {

    // Inside of this function, $() will work as an alias for jQuery()
    // and other libraries also using $ will not be accessible under this shortcut

//SLIDESHOW
//$(function () {
//
//    /* SET PARAMETERS */
//    var change_img_time     = 5000;
//    var transition_speed    = 1000;
//
//    var simple_slideshow    = $("#slideshow"),
//        listItems           = simple_slideshow.children('li'),
//        listLen             = listItems.length,
//        i                   = 0,
//
//        changeList = function () {
//
//            listItems.eq(i).fadeOut(transition_speed, function () {
//                i += 1;
//                if (i === listLen) {
//                    i = 0;
//                }
//                listItems.eq(i).fadeIn(transition_speed);
//            });
//
//        };
//
//    listItems.not(':first').hide();
//    setInterval(changeList, change_img_time);
//
//});

    $(function slideSwitch() {

    /* SET PARAMETERS */

var $active = $('#slideshow li.active');

    if ( $active.length == 0 ) $active = $('#slideshow li:last');

    var $next =  $active.next().length ? $active.next()
        : $('#slideshow li:first');

    $active.addClass('last-active');

    $next.css({opacity: 0.0})
        .addClass('active')
        .animate({opacity: 1.0}, 1000, function() {
            $active.removeClass('active last-active');
        });
}

$(function() {
    setInterval( "slideSwitch()", 5000 );
});

});

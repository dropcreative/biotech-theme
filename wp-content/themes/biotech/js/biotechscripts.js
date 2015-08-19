/**
 * biotechscripts.js
 *
 * Handles toggling the navigation menu for small screens and enables tab
 * support for dropdown menus.
 */
jQuery(document).ready(function($) {

    // Inside of this function, $() will work as an alias for jQuery()
    // and other libraries also using $ will not be accessible under this shortcut
//Problem: Images do not appear in a slideshow
//Solution: Change the z-index so that the active image is on top which fades into the next image

    var slideshow = document.getElementById('slideshow');
    //Find first image in slideshow
    var firstImage = function(){
        // Change class to"active"
        for(var i = 0;  i <  slideshow.children.length; i++){

                slideshow.className = 'TEST';

            }
        }
firstImage();


    //Find the second image in the slideshow
        //Change class to "next-active"

    //Find the third image in the slideshow
        // Change the class to "last-active"

    //Cycle through the items at a set rate




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
/////////////////////////////////////
//    $(function slideSwitch() {
//
//    /* SET PARAMETERS */
//
//var $active = $('#slideshow li.active');
//
//    if ( $active.length == 0 ) $active = $('#slideshow li:last');
//
//    var $next =  $active.next().length ? $active.next()
//        : $('#slideshow li:first');
//
//    $active.addClass('last-active');
//
//    $next.css({opacity: 0.0})
//        .addClass('active')
//        .animate({opacity: 1.0}, 1000, function() {
//            $active.removeClass('active last-active');
//        });
//}
//
//$(function() {
//    setInterval( "slideSwitch()", 5000 );
//});

});

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
$('.slideshow').sss({
slideShow : true, // Set to false to prevent SSS from automatically animating.
startOn : 0, // Slide to display first. Uses array notation (0 = first slide).
transition : 400, // Length (in milliseconds) of the fade transition.
speed : 3500, // Slideshow speed in milliseconds.
showNav : true // Set to false to hide navigation arrows.
});

});

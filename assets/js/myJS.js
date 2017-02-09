/*====================================
 CUSTOM LINKS SCROLLING FUNCTION
======================================*/

$('a[href*=#]').click(function () {
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
   && location.hostname == this.hostname) {
        var $target = $(this.hash);
        $target = $target.length && $target
        || $('[name=' + this.hash.slice(1) + ']');
        if ($target.length) {
            var targetOffset = $target.offset().top;
            $('html,body')
            .animate({ scrollTop: targetOffset }, 800); //set scroll speed here
            return false;
        }
    }
});
/*====================================
VAGAS SLIDESHOW SCRIPTS
======================================*/
/*====================================
VAGAS SLIDESHOW SCRIPTS
======================================*/
var home = 'assets/img/1.jpg';
var overlay = 'assets/plugins/vegas/overlays/14.png';

$(function () {
    $.vegas('slideshow', {
        backgrounds: [
          { src: home, fade: 1000, delay: 9000 }, //CHANGE THESE IMAGE WITH YOUR ORIGINAL IMAGES


        ]
    })('overlay', {
        /** SLIDESHOW OVERLAY IMAGE **/
        src: overlay // THERE ARE TOTAL 01 TO 15 .png IMAGES AT THE PATH GIVEN, WHICH YOU CAN USE HERE
    });

});

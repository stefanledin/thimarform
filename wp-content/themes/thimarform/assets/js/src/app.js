const WebFont = require('webfontloader');
import AOS from 'aos';

AOS.init();


/**
 *
 * Typsnitt
 *
 */

WebFont.load({
    typekit: {
        id: 'fmh7rug'
    }
});


/**
 *
 * Introfilm
 *
 */

const introVideo = document.querySelector('.intro-video');
if (introVideo) {
    const video = introVideo.querySelector('video');
    video.addEventListener('ended', event => {
        introVideo.classList.add('hidden');
        setTimeout(() => {
            introVideo.remove();
        }, 1000);
    });
}

/**
 *
 * Mobilmeny
 *
 */

const toggleMobileMenyVisibility = (event) => {
    document.body.classList.toggle('mobile-menu--open');
}
const openMobileMenubutton = document.querySelector('svg.menu-icon');
const closeMobileMenubutton = document.querySelector('.mobile-menu__close');
openMobileMenubutton.addEventListener('click', toggleMobileMenyVisibility);
openMobileMenubutton.addEventListener('touch', toggleMobileMenyVisibility);
closeMobileMenubutton.addEventListener('click', toggleMobileMenyVisibility);
closeMobileMenubutton.addEventListener('touch', toggleMobileMenyVisibility);

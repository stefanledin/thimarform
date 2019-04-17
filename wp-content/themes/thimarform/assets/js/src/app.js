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
 * Cookiebar
 *
 */

const cookieBar = document.querySelector('.cookie-bar');
const cookieName = 'thimar_cookies_accepted';
const acceptCookiesButton = document.querySelector('#js-accept-cookies');
if (document.cookie.search(cookieName) === -1) {
    cookieBar.style.display = 'block';
    acceptCookiesButton.addEventListener('click', event => {
        event.preventDefault();
        document.cookie = `${cookieName}=1;expires=60*60*24*365;domain=thimarform.se;path='/'`;

        const height = cookieBar.clientHeight;
        cookieBar.style.marginBottom = `-${height}px`;
        setTimeout(() => {
            cookieBar.remove();
        }, 500);
    });
}

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

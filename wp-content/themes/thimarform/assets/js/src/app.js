import AOS from 'aos';

AOS.init();

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

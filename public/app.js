var scroll = new SmoothScroll('a[href*="#"]');

const socialLinksTL = anime.timeline({

})

const socialLinksAnimation = anime({
    targets: '.social-link',
    translateY: 10,
    delay: (el, i) => { return i * 100; }
    // translateY: 0,
    // delay: (el, i) => { return i * 100; }
})
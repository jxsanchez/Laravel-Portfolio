var scroll = new SmoothScroll('a[href*="#"]');

// Wrap each letter of each title in a span
textWrappers = document.querySelectorAll('.letters');
textWrappers.forEach(text => {
    text.innerHTML = text.textContent.replace(/\S/g, '<span class="letter">$&</span>');
});

const sections = document.querySelectorAll(".section");

const sectionsObserver = new IntersectionObserver((entries, observer) => {
    entries.forEach(entry => {
        if(entry.isIntersecting) {
            if(entry.target.querySelector('.letters')) {
                const sectionTitleAnimation = anime({
                    targets: '.letter',
                    opacity: [0, 1],
                    translateY: ['1.1rem', 0],
                    translateZ: 0,
                    duration: 500,
                    delay: (el, i) => { return i * 50; }
                });

                switch(entry.target.id) {
                    case 'about': {
                        
                    }
                        break;
                    case 'projects' : {

                    }
                        break;
                    case 'contact': {
                        
                    }
                }

                sectionsObserver.unobserve(entry.target);
            }
        } else {
            return;
        }
    });
}, 
{ // options
    root: null,
    threshold: 0.15, // [0, 1] how much of item must be on page to fire
    rootMargin: "100px"
});

sections.forEach(section => {
    sectionsObserver.observe(section);
});

const socialLinksAnimation = anime({
    targets: '.social-link',
    opacity: [0, 1],
    translateY: [50, 0],
    delay: (el, i) => { return i * 100; }
    // translateY: 0,
    // delay: (el, i) => { return i * 100; }
});

// Wrap every letter in a span
// const textWrappers = document.querySelectorAll('.letters');
// textWrappers.forEach((textWrapper) => {
//     textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, '<span class="letter">$&</span>');
// });

// const sectionTitleAnimation = anime({
//     targets: '.letter',
//     opacity: [0, 1],
//     translateY: ['1.1rem', 0],
//     translateZ: 0,
//     duration: 750,
//     delay: (el, i) => { return i * 50; }
// });
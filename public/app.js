var scroll = new SmoothScroll('a[href*="#"]');

// Wrap each letter of each title in a span
textWrappers = document.querySelectorAll('.letters');
textWrappers.forEach(text => {
    text.innerHTML = text.textContent.replace(/\S/g, '<span class="letter">$&</span>');
});

// Animations that use the fade up animation
fadeUpAnimation('.social-link', 50, 25);
fadeUpAnimation('.skill-btn', 50, 100);
fadeUpAnimation('.project-container', 50, 0);

// Title come in from right
const projectTitleAnimation = anime({
    targets: '.project-title',
    opacity: [0, 1],
    translateX: [300, 0],
    duration: 500,
    easing: 'easeInOutSine'
});

// Shift back button text left when hover
$('.back-btn').mouseenter(() => {
    const backBtnAnimation = anime({
        targets: '.back-btn-content',
        translateX: [0, -5],
        duration: 300,
        easing: 'easeInOutSine'
    });  
});

$('.back-btn').mouseleave(() => {
    const backBtnAnimation = anime({
        targets: '.back-btn-content',
        translateX: [-5, 0],
        duration: 300,
        easing: 'easeInOutSine'
    });  
});

// Store all sections
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
                        const skillsListAnimation = anime({
                            targets: '.skill-bullet',
                            opacity: [0, 1],
                            translateY: [-50, 0],
                            delay: (el, i) => { return i * 100; }
                        });
                    }
                        break;
                    case 'projects' : {
                        setTimeout(function() {
                            const projectColumns = document.querySelectorAll('.project-column');
                            
                            projectColumns.forEach(column => {
                                column.classList.toggle('hide');
                            });

                            const projectsAnimation = anime({
                                targets: '.project-column',
                                opacity: [0, 1],
                                translateY: [75, 0],
                                delay: (el, i) => { return i * 300; }
                            });
                        }, 1000);
                    }
                        break;
                    case 'contact': {
                        
                    }
                }

                sectionsObserver.unobserve(entry.target);
            }

            const continueContainerAnimation = anime({
                targets: '.continue-container',
                opacity: [0, 1],
                translateY: [-100, 0]
            });
        } else {
            return;
        }
    });
}, 
{ // options
    root: null,
    threshold: 0.50, // [0, 1] how much of item must be on page to fire
    rootMargin: "200px"
});

// Add observer to each section
sections.forEach(section => {
    sectionsObserver.observe(section);
});

function fadeUpAnimation(targets, translateY1, delayMultiplier) {
    return anime({
        targets: targets,
        opacity: [0, 1],
        translateY: [translateY1, 0],
        delay: (el, i) => { return i * delayMultiplier }
    });
}
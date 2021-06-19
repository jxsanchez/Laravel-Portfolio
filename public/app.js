var scroll = new SmoothScroll('a[href*="#"]');

// Wrap each letter of each title in a span
textWrappers = document.querySelectorAll('.letters');
textWrappers.forEach(text => {
    text.innerHTML = text.textContent.replace(/\S/g, '<span class="letter">$&</span>');
});

// Animate social links in landing section
const socialLinksAnimation = anime({
    targets: '.social-link',
    opacity: [0, 1],
    translateY: [50, 0],
    delay: (el, i) => { return i * 100; }
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
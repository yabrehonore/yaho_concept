// Détecter les événements de défilement avec le pavé tactile ou la molette de la souris
let isScrolling;
window.addEventListener('scroll', () => {
    clearTimeout(isScrolling);

    isScrolling = setTimeout(() => {
        const sections = document.querySelectorAll('section');
        let currentSection = null;

        sections.forEach(section => {
            const sectionTop = section.offsetTop;
            const sectionHeight = section.clientHeight;
            const scrollPosition = window.scrollY;

            if (scrollPosition >= sectionTop - sectionHeight / 3 && scrollPosition < sectionTop + sectionHeight / 3) {
                currentSection = section.id;
            }
        });

        if (currentSection) {
            history.replaceState(null, null, `#${currentSection}`);
        }
    }, 100);
});

// Gérer le défilement fluide au chargement de la page si une ancre est présente dans l'URL
window.addEventListener('load', () => {
    const hash = window.location.hash;
    if (hash) {
        const section = document.getElementById(hash.substring(1));
        if (section) {
            section.scrollIntoView({ behavior: 'smooth', block: 'start' });
        }
    }
});
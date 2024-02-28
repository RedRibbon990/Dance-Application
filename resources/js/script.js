document.addEventListener("DOMContentLoaded", function() {
    const navbar = document.querySelector('.navbar');
    const navbarHeight = navbar.offsetHeight;
    const delta = 5;
    let lastScrollTop = 0;

    window.addEventListener('scroll', function() {
        let currentScroll = window.scrollY || document.documentElement.scrollTop;

        if (Math.abs(lastScrollTop - currentScroll) <= delta)
            return;

        if (currentScroll > lastScrollTop && currentScroll > navbarHeight) {
            // Scrolling verso il basso
            navbar.style.transition = 'transform 0.3s ease';
            navbar.style.transform = 'translateY(-100%)';
        } else {
            // Scrolling verso l'alto o in cima
            navbar.style.transition = 'transform 0.3s ease';
            navbar.style.transform = 'translateY(0)';
        }

        lastScrollTop = currentScroll;
    });

    // Expand / collapse description
    const moreLinks = document.querySelectorAll(".more-link");

    moreLinks.forEach(function(link) {
        link.addEventListener("click", function(e) {
            e.preventDefault();
            const moreContent = this.previousElementSibling;
            moreContent.style.display = moreContent.style.display === "none" ? "inline" : "none";
            this.textContent = this.textContent === "Leggi di più" ? "Leggi meno" : "Leggi di più";
        });
    });
});

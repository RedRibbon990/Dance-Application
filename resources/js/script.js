console.log('Hello, i\'m a finding error message');

let lastScrollTop = 0;
const navbar = document.querySelector('.navbar');
const navbarHeight = navbar.offsetHeight;
const delta = 5;

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

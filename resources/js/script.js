document.addEventListener( "DOMContentLoaded", function () {


    // JavaScript per inizializzare i tooltip di Bootstrap 
    var tooltipTriggerList = [].slice.call( document.querySelectorAll( '.info-icon' ) );
    var tooltipList = tooltipTriggerList.map( function ( tooltipTriggerEl ) {
        return new bootstrap.Tooltip( tooltipTriggerEl );
    } );


    const navbar = document.querySelector( '.navbar' );
    const navbarHeight = navbar.offsetHeight;
    const delta = 5;
    let lastScrollTop = 0;

    window.addEventListener( 'scroll', function () {
        let currentScroll = window.scrollY || document.documentElement.scrollTop;

        if ( Math.abs( lastScrollTop - currentScroll ) <= delta )
            return;

        if ( currentScroll > lastScrollTop && currentScroll > navbarHeight ) {
            // Scrolling verso il basso
            navbar.style.transition = 'transform 0.3s ease';
            navbar.style.transform = 'translateY(-100%)';
        } else {
            // Scrolling verso l'alto o in cima
            navbar.style.transition = 'transform 0.3s ease';
            navbar.style.transform = 'translateY(0)';
        }

        lastScrollTop = currentScroll;
    } );

    // Expand / collapse description
    var tooltipTriggerList = [].slice.call( document.querySelectorAll( '.info-icon' ) );
    var tooltipList = tooltipTriggerList.map( function ( tooltipTriggerEl ) {
        return new bootstrap.Tooltip( tooltipTriggerEl );
    } );

    // Expand / collapse description
    const clickableTexts = document.querySelectorAll( ".card-text-clickable" );

    // Aggiungi un event listener a ciascun testo cliccabile
    clickableTexts.forEach( function ( text ) {
        text.addEventListener( "click", function () {
            // Mostra o nasconde il testo nascosto
            const moreContent = this.querySelector( ".more-content" );
            const moreHidden = this.querySelector( ".more-hidden" );

            if ( moreContent && moreHidden ) {
                moreContent.style.display = moreContent.style.display === "none" ? "inline" : "none";
                moreHidden.style.display = moreHidden.style.display === "none" ? "inline" : "none";
            }
        } );
    } );


} );

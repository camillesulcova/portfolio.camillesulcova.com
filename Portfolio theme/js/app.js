

function showSidebar(){
    const sidebar = document.querySelector('.sidebar')
    sidebar.style.display = 'flex'
}

function hideSidebar(){
    const sidebar = document.querySelector('.sidebar')
    sidebar.style.display = 'none'
}
//Portfolio Mixitup
// var mixer = mixitup('.portfolio__container', {
//     selectors: {
//         target: '.portfolio__content'
//     },
//     animation: {
//         duration: 400
//     }
// });
if (window.location.pathname.includes('work')) {
    // Portfolio Mixitup initialization
    var mixer = mixitup('.portfolio__container', {
        selectors: {
            target: '.portfolio__content'
        },
        animation: {
            duration: 400
        }
    });
}

//Link active portfolio
const linkPortfolio = document.querySelectorAll('.portfolio__item')

function activePortfolio(){
    if(linkPortfolio){
        linkPortfolio.forEach(l => l.classList.remove('active-portfolio'))
        this.classList.add('active-portfolio')
    }
}

linkPortfolio.forEach(l => l.addEventListener('click', activePortfolio))

/* Scroll reveal animation */
const sr = ScrollReveal({
    origin: 'top',
    distance: '60px',
    duration: 2500,
    delay: 400,
})

sr.reveal('.home__name, .home__info', {origin: 'left'})
sr.reveal('.home__image', {origin: 'right'})








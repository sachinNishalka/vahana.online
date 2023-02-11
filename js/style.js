var navbar = document.querySelector('nav')
var links = document.querySelectorAll('.nav-link')

window.onscroll = function() {

    // pageYOffset or scrollY
    if (window.pageYOffset > 0) {
        navbar.classList.add('scrolled')
        links.forEach(v => {
          v.classList.add('scrolled')
        });
    } else {
        navbar.classList.remove('scrolled')
        links.forEach(v => {
          v.classList.remove('scrolled')
        });
    }
}
b
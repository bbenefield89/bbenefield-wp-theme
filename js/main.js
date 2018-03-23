const body = document.querySelector('body');

body.addEventListener('click', e => {
  if (e.target.classList.contains('fa-bars') || e.path[1].classList.contains('fa-bars')) {
    const navbarLinksContainer = document.querySelector('.navbar__links-container');
    const navbarLinksItem = document.querySelectorAll('.navbar__links-container__item');
    
    
    if (navbarLinksContainer.classList.contains('navbar__links-container--open')) {
      navbarLinksContainer.classList.remove('navbar__links-container--open');
      
      for (let item of navbarLinksItem) {
        // item.classList.remove('navbar__links-container__item--show');
        item.style.opacity = '0';
      }
    }
    else {
      let count = .5;
      
      navbarLinksContainer.classList.add('navbar__links-container--open');
      
      for (let item of navbarLinksItem) {
        // item.classList.add('navbar__links-container__item--show');
        item.style.transition = `${ count }s`;
        item.style.opacity = '1';
        
        count += .2;
      }
    }
  }
});

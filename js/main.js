const body = document.querySelector('body');

body.addEventListener('click', e => {
  if (e.target.classList.contains('fa-bars') || e.path[1].classList.contains('fa-bars')) {
    const navbarLinksContainer = document.querySelector('.navbar__links-container');
    const navbarLinksItem = document.querySelectorAll('.navbar__links-container__item');
    
    const sleep = (ms) => {
      return new Promise(resolve => setTimeout(resolve, ms));
    };
    
    const foo = async () => {
      let count = 50;
      
      for (let item of navbarLinksItem) {
        await sleep(count);
        
        if (navbarLinksContainer.classList.contains('navbar__links-container--open')) {
          item.classList.add('navbar__links-container__item--show');
        }
        else {
          item.classList.remove('navbar__links-container__item--show');
        }
        
        count += 75;
      }
    }; 
    
    if (navbarLinksContainer.classList.contains('navbar__links-container--open')) {
      navbarLinksContainer.classList.remove('navbar__links-container--open');
    }
    else {
      navbarLinksContainer.classList.add('navbar__links-container--open');
    }
    
    foo();
  }
});

// Evento do menu hamburger
    let btnBurger = document.querySelector('.navbar-burger');
    let opMenu = document.querySelector('.navbar-menu');

    btnBurger.addEventListener('click',function() {
        btnBurger.classList.toggle('is-active');
        opMenu.classList.toggle('is-active');
    })
  

function viewHeaderAppStart() {

    const headerMobile = document.querySelector('#header-mobile');
    const mobileMenu   = document.querySelector('#pdexgroup-mobile-menu');

    headerMobile.addEventListener('click', function(e) {
        e.preventDefault();

        buttonValue = e.target.value;

        if(buttonValue == 'close') {
            e.target.value = 'open';
            e.target.classList.add('open');
            mobileMenu.style.display = 'flex';
        } else if(buttonValue == 'open') {
            e.target.value = 'close';
            e.target.classList.remove('open');
            mobileMenu.style.display = 'none';
        }

    });

}
function initBurgerMenu () {

    const button = document.getElementById('burger-button')
    const hiddenMenu = document.querySelector('.primary-nav')
    const closeMenu = document.querySelector('.close-menu')

    button.addEventListener('click', (event) => {
        event.preventDefault()


        if (hiddenMenu.classList.contains('hidden-menu')) {
            hiddenMenu.classList.remove('hidden-menu')
        } 

    })

    closeMenu.addEventListener('click', (event) => {

        if (!hiddenMenu.classList.contains('hidden-menu')) {
            hiddenMenu.classList.add('hidden-menu')
        }
    })
   
}

export {initBurgerMenu}
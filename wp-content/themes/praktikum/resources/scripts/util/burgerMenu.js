function initBurgerMenu () {

    const button = document.getElementById('burger-button')
    const hiddenMenu = document.querySelector('.hidden-menu')
    const closeMenu = document.querySelector('.close-menu')

    button.addEventListener('click', (event) => {
        event.preventDefault()

        hiddenMenu.classList.add('hidden')

        if (hiddenMenu.classList.contains('hidden')) {
            hiddenMenu.classList.remove('hidden')
        } 

    })

    closeMenu.addEventListener('click', (event) => {
        event.preventDefault()


        

        if (!hiddenMenu.classList.contains('hidden')) {
            hiddenMenu.classList.add('hidden')
        } 

    })
}

export {initBurgerMenu}
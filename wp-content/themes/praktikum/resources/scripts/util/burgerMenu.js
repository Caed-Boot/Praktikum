function initBurgerMenu () {

    const button = document.getElementById('burger-button')
    const navBar = document.getElementById('navbar-default')

    button.addEventListener('click', (event) => {
        event.preventDefault()

        navBar.classList.toggle('h-[150px]')
        // if (navBar.contains('h-0')) {
        //     navBar.classList.remove('h-0')
        // }
    })
}

export {initBurgerMenu}
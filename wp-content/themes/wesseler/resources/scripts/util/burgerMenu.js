function initBurgerMenu () {

    const button = document.getElementById('burger-button')
    const hiddenMenu = document.querySelector('.primary-nav')
    const closeMenu = document.querySelector('.close-menu')
    const arrow = document.querySelector('.arrow')
    const subMenu = document.querySelector('.sub-menu')

    console.log(subMenu);
    


    arrow.addEventListener('click',(event) => {
        event.preventDefault()

        subMenu.classList.toggle('h-0')
        arrow.classList.toggle('rotate-180')
                
    })


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
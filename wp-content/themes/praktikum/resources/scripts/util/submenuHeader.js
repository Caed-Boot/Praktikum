function initSubmemuHeader () {

    const subMenu = document.querySelectorAll('.second-hidden-submenu li ul')
    const triangleButton = document.querySelectorAll('.submenu-triangle')



    triangleButton.forEach ((triangle, index) => {

        triangle.addEventListener('click', (event) => {



            subMenu.forEach((element, index) => {
                
                if (element.classList.contains('sub-menu')) {
            
                    element.classList.remove('h-0')
                    element.classList.remove('overflow-hidden')
                    element.classList.add('!h-[500px]')
                    console.log(element)
                }

    
            } )


        })

       

    }) 

}

export {initSubmemuHeader}
function initSubmemuHeader () {

    const subMenus = document.querySelectorAll('.sub-menu')

    const trianglesButton = document.querySelectorAll('.submenu-triangle')

    subMenus.forEach ((submenu, index) => {
                
        submenu.classList.add('submenu-' + index)
        
    })
    
    trianglesButton.forEach ((triangle, index) => {
        
        const triangleId = 'triangle' + '-' + index

        triangle.setAttribute('id', triangleId)
        
        if (triangle.id === 'triangle-0') {
            triangle.classList.add('submenu-0')
        } else if(triangle.id === 'triangle-13') {

            triangle.classList.add('submenu-1')
        } else if (triangle.id === 'triangle-19') {

            triangle.classList.add('submenu-2')

        }

        triangle.addEventListener('click', (event) => {


            subMenus.forEach((submenu, index) => {


                if (submenu.classList.contains('submenu-0') && triangle.classList.contains('submenu-0')) {
                    submenu.classList.toggle('show-submenu')  
                    triangle.classList.toggle('triangle-rotate')                    
                } 
                if (submenu.classList.contains('submenu-1') && triangle.classList.contains('submenu-1')) {
                    submenu.classList.toggle('show-submenu-2')  
                    triangle.classList.toggle('triangle-rotate')  
                } 
                if (submenu.classList.contains('submenu-2') && triangle.classList.contains('submenu-2')) {
                    submenu.classList.toggle('show-submenu-3')  
                    triangle.classList.toggle('triangle-rotate')  
                } 
            })
        })
            
    }) 

   

}

export {initSubmemuHeader}
function initSubmemuHeader () {

    const subMenus = document.querySelectorAll('.sub-menu')

    const trianglesButton = document.querySelectorAll('.submenu-triangle')

    subMenus.forEach ((submenu, index) => {
                
        submenu.classList.add('submenu-' + index)
        console.log(submenu);
        
    })
    
    trianglesButton.forEach ((triangle, index) => {
        
        const triangleId = 'triangle' + '-' + index

        triangle.setAttribute('id', triangleId)
        
        if (triangle.id === 'triangle-0') {
            triangle.classList.add('submenu-0')
            console.log(triangle);
        } else if(triangle.id === 'triangle-13') {

            triangle.classList.add('submenu-1')
            console.log(triangle);
        } else if (triangle.id === 'triangle-19') {

            triangle.classList.add('submenu-2')
            console.log(triangle);

        }

        triangle.addEventListener('click', (event) => {



            subMenus.forEach((submenu, index) => {


                if (submenu.classList.contains('submenu-0') && triangle.classList.contains('submenu-0')) {
                    console.log('epaaa');
                    
                } 
                if (submenu.classList.contains('submenu-1') && triangle.classList.contains('submenu-1')) {
                    console.log('ueue');
                    
                } 
                if (submenu.classList.contains('submenu-2') && triangle.classList.contains('submenu-2')) {
                    console.log('uiiuasodiusaodiusaod');
                    
                } 
            })
        })
            
    }) 

   

}

export {initSubmemuHeader}
function initSubmemuHeader () {

    const subMenuTitles = document.querySelectorAll('.second-hidden-submenu li:nth-child(1) a')
    const subMenus = document.querySelectorAll('.second-hidden-submenu li ul')
    const trianglesButton = document.querySelectorAll('.submenu-triangle')


    trianglesButton.forEach ((triangle, index) => {

       
        

        triangle.addEventListener('click', (event) => {

            const titleId = triangle.id + "-" + index
            console.log(titleId);


            subMenuTitles.forEach((title, index) => {
                
                
                // if (titleText == 'SCHREINERARBEITEN') {
                //     console.log(titleText);
                // }


            });


                
            


        })

       

    }) 

}

export {initSubmemuHeader}
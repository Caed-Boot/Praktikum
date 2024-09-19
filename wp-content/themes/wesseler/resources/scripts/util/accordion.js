function initAccordion () {
    const accordionTitles = document.querySelectorAll('.accordion-title')
    const accordionBodies = document.querySelectorAll('.accordion-body')
    const plusAsset = document.querySelectorAll('.plus-asset')

    

    const obtainLastString = (string) => {

        //Get the Id
        const titleId = string.id

        // Look for the las - of the Id + 1 to not get the -
        const titleLastString = titleId.lastIndexOf('-',) + 1

        // Slice the string with the position of the previous variable
        const slicedLastString = titleId.slice(titleLastString)

        //return the variable
        return slicedLastString
    }

    
    accordionTitles.forEach((title, index) => {
        
        title.addEventListener('click', (event) => {
            event.preventDefault()
            // Call the function and put title as argument inside
            // save in a variable
            const lastStringTitle = obtainLastString(title)
            
            
            plusAsset.forEach((plus, index) => {
                const plusId = plus.id
                
                if (lastStringTitle === plusId) {
                    plus.classList.toggle('rotate-45')
                }
                
            })

            
            accordionBodies.forEach((body, index) => {

               

                // Call the function and put body as parameter inside
                // save in a variable
                const lastStringBody = obtainLastString(body)
                // Compare them
                if (lastStringTitle === lastStringBody) {

                    body.classList.toggle('accordion-body-show')
                    
                    
                } 
            })

        })
    })
}

export {initAccordion};
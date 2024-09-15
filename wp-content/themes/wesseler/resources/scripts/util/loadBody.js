function initLoadBody () {
    
    const app = document.getElementById('app')
    
    window.addEventListener('load', (event) => {

        setTimeout( () => {
            
            app.classList.remove ('opacity-0')

        }, 100)
        
    })

}

export {initLoadBody}
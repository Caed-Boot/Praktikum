function mediaTextObserver () {

    const section = document.querySelector('.section-img')
    const loadImage = (entries, observer) => {
    
        entries.forEach(entry => {
            
            if(entry.isIntersecting) {
                console.log(' la imagen esta en el viewport')
            }
        });
    } 
    
    const observer = new IntersectionObserver(loadImage, {
        root: null,
        rootMargin:'-100px',
        threshold: 1.0
    })
    
    observer.observe(section)
}



export {mediaTextObserver};


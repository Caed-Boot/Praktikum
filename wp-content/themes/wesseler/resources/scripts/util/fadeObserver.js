function mediaTextObserver () {



    const section = document.querySelectorAll('.section-img')
    const loadImage = (entries, observer) => {

        entries.forEach(entry => {
        
            if(entry.isIntersecting) {
            
                entry.target.classList.remove('opacity-0');

            }
        });
    } 
    
    const observer = new IntersectionObserver(loadImage, {
        root: null,
        rootMargin: '100px',
        threshold: 0.7
    })
    
    section.forEach((target) => observer.observe(target))
}



export {mediaTextObserver};


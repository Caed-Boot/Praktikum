function mediaTextObserver () {



    const section = document.querySelectorAll('.section-img')
    const loadImage = (entries, observer) => {

        entries.forEach(entry => {
        
            if(entry.isIntersecting) {
                entry.target.classList.remove('opacity-0')
            }
        });
    } 
    
    const observer = new IntersectionObserver(loadImage, {
        root: null,
        rootMargin:'10px',
        threshold: 1.0
    })
    
    section.forEach((target) => observer.observe(target))
}



export {mediaTextObserver};


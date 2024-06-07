function mediaTextObserver () {



    const section = document.querySelectorAll('.section-img')
    const loadImage = (entries, observer) => {

        entries.forEach(entry => {
        
            if(entry.isIntersecting) {
            
                entry.target.classList.remove('opacity-0');
                entry.target.classList.add('animate-fade');

            }
        });
    } 
    
    const observer = new IntersectionObserver(loadImage, {
        root: null,
        rootMargin: '',
        threshold: 1.0
    })
    
    section.forEach((target) => observer.observe(target))
}



export {mediaTextObserver};


function historyObserver () {

    
    const section = document.querySelectorAll('.history')
    const loadImage = (entries, observer) => {

        entries.forEach(entry => {
                console.log(entry);
            
            if(entry.isIntersecting) {
                console.log(entry);


                entry.target.classList.remove('swift-right');
                entry.target.classList.remove('swift-left');

            }
        });
    } 
    
    const observer = new IntersectionObserver(loadImage, {
        root: null,
        rootMargin: '100px',
        threshold: 1.0
    })
    
    section.forEach((target) => observer.observe(target))
}

export {historyObserver}
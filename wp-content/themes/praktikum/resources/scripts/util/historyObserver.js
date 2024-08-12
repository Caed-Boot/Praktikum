function historyObserver () {

    
    const section = document.querySelectorAll('.history')

    const loadImage = (entries, observer) => {

        entries.forEach(entry => {

            if (entry.intersectionRatio > 0) {
                    
                    if (entry.target.classList.contains('swift-right')) {

                        entry.target.classList.remove('swift-right');
                  
                    } else if (entry.target.classList.contains('swift-left')) {
                        
                        entry.target.classList.remove('swift-left');

                    }

            }
           
        });
    } 
    
    const observer = new IntersectionObserver(loadImage, {
        root: null,
        rootMargin: '100px',
        threshold: 0.3,
    });
    
    section.forEach((target) => observer.observe(target))
}

export {historyObserver}
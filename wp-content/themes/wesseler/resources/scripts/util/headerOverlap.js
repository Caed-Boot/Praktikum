function initOverlap () {

    const overlap = document.querySelector('.swiper__overlap')
    const overlapTitle = document.querySelector('.swiper__overlap-title')

    
    setTimeout(() => {

        overlapTitle.classList.add('transition-all')
        overlapTitle.classList.add('duration-500')
        overlapTitle.classList.remove('opacity-0')
        
        setTimeout(() => {
            
            overlapTitle.classList.add('blur-lg')
            overlapTitle.classList.add('opacity-0')

        },1700)

    },800)


    setTimeout(() => {

        overlap.classList.remove('opacity-50');
        overlap.classList.add('opacity-10');
            

    },2500)
    

}

export {initOverlap}
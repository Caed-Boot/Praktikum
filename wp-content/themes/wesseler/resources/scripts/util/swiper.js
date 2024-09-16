import Swiper from 'swiper/bundle';
// import Swiper and modules styles
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';

// import Swiper bundle with all modules installed

// import styles bundle
import 'swiper/css/bundle';

import { Navigation, Pagination } from 'swiper/modules';
// import Swiper and modules styles

function initSwiper() {

    // Getting slides quantity before slider clones them
  /*  this.slidesQuantity = this.querySelectorAll(".swiper-slide").length;*/
  
      const swiper = new Swiper('.swiper', {
  
        // Optional parameters
        direction: 'horizontal',
        loop: true,
        centeredSlides: true,
        speed: 1000,
  
        // If we need pagination
        pagination: {
            el: '.swiper-pagination',
          },
          
        autoplay: {
          delay: 2000,
        },
    
  
        // Navigation arrows
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
        },
      });
  

  
}

export {initSwiper}
  
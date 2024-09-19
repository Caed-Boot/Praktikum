import Swiper from 'swiper/bundle';

// import styles bundle
import 'swiper/css/bundle';

import { Navigation, Pagination } from 'swiper/modules';
// import Swiper and modules styles

function initSwiper() {

    // Getting slides quantity before slider clones them
  /*  this.slidesQuantity = this.querySelectorAll(".swiper-slide").length;*/
    const swiper = new Swiper('.swiper', {

      direction:'horizontal',
      loop:true,

      speed:500,
      
      autoplay:{
        delay:2000,  
      },

      navigation: {
        nextEl:'.swiper-button-next',
        prevEl:'.swiper-button-prev',
      }
    });

  
}

export {initSwiper}
  
import domReady from '@roots/sage/client/dom-ready';
import { initSwiper } from './util/swiper';
import {mediaTextObserver } from './util/fadeObserver';
import { initAccordion } from './util/accordion';
import { initBurgerMenu } from './util/burgerMenu';
/**
 * Application entrypoint
 */
domReady(async () => {

  try {
    initBurgerMenu()
    initAccordion()
    mediaTextObserver()
    initSwiper();
  } catch (error) {
    console.log(error)
  }

})

/**
 * @see {@link https://webpack.js.org/api/hot-module-replacement/}
 */
if (import.meta.webpackHot) import.meta.webpackHot.accept(console.error);

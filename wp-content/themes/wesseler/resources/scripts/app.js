import domReady from '@roots/sage/client/dom-ready';
import { initSwiper } from './util/swiper';
import {mediaTextObserver } from './util/fadeObserver';
import { initAccordion } from './util/accordion';
import { initBurgerMenu } from './util/burgerMenu';
import { initSubmemuHeader } from './util/submenuHeader';
import { initFormValidation } from './util/form';
import { historyObserver } from './util/historyObserver';
import { initParallax } from './util/parallax';
import { initLoadBody } from './util/loadBody';

/**
 * Application entrypoint
 */
domReady(async () => {

  try {
    initLoadBody()
    initParallax()
    historyObserver()
    initFormValidation()
    initBurgerMenu()
    initAccordion()
    mediaTextObserver()
    initSwiper()
    initSubmemuHeader()
  } catch (error) {
    console.log(error)
  }

})

/**
 * @see {@link https://webpack.js.org/api/hot-module-replacement/}
 */
if (import.meta.webpackHot) import.meta.webpackHot.accept(console.error);

import domReady from '@roots/sage/client/dom-ready';
import { initSwiper } from './util/swiper';
import {imageTextObserver } from './util/fadeObserver';
import { initAccordion } from './util/accordion';
import { initBurgerMenu } from './util/burgerMenu';
import { initSubmemuHeader } from './util/submenuHeader';
import { initFormValidation } from './util/form';
import { historyObserver } from './util/historyObserver';
import { initParallax } from './util/parallax';
import { initLoadBody } from './util/loadBody';
import { initOverlap } from './util/headerOverlap.js';
import { mediaTextObserver } from './util/fadeObserver.js';

/**
 * Application entrypoint
 */
domReady(async () => {

  try {
    initOverlap()
    initLoadBody()
    initParallax()
    historyObserver()
    initFormValidation()
    initBurgerMenu()
    initAccordion()
    imageTextObserver()
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

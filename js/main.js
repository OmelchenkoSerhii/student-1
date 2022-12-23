import $  from 'jquery';

import { lottie } from './lottie';

import { header } from './template-parts/header/header';

//animations
import { scrollToAnchor,scrollToHash, requestQuoteLink } from './animations/scroll-to-anchor';
import { appearence } from './animations/appearence';

//blocks
import { videoBlock } from './template-parts/blocks/video';
import { testimonialsSlider } from './template-parts/blocks/testimonials-slider';
import { coursesSlider } from './template-parts/blocks/courses-slider';
import { tabs } from './parts/tabs';


header();
lottie();

//animations
appearence();

//blocks
videoBlock();
testimonialsSlider();
tabs();


  $(document).ready(function(){
    $(".menu-button").click(function(){
        $("#body").toggleClass("header--active");
      });
  });
import './bootstrap';

import LocomotiveScroll from 'locomotive-scroll';
import 'locomotive-scroll/dist/locomotive-scroll.css';
document.addEventListener("DOMContentLoaded", () => {
  const scroll = new LocomotiveScroll({
    el: document.querySelector('#scroll-container'),
    smooth: true,
    lerp: 0.2,
    smartphone: {
      smooth: true
    },
    tablet: {
      smooth: true
    }
  });
});

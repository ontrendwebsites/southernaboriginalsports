window.addEventListener('DOMContentLoaded', (event) => {
  console.log('DOM fully loaded and parsed');

  const mobileMenuIcon = document.querySelector('.menu-btn');
  const siteBody = document.body;

  mobileMenuIcon.addEventListener('click', function() {
    if ( siteBody.classList.contains('pushy-open-right') ) {
      mobileMenuIcon.classList.add('is-active');
    } else {
      mobileMenuIcon.classList.remove('is-active');
    } 
  });


  // Sticky header on scroll

  const mobileHeader = document.querySelector('header.active');
  let mobileHeaderHeight = mobileHeader.offsetHeight;
  mobileHeader.style.zIndex = '20';
  mobileHeader.style.top = -mobileHeaderHeight + 'px';

  gsap.to(mobileHeader, {
    scrollTrigger: {
      trigger: "#content",
      scrub: true,
        start: "100",
        end: "180",
        //markers: {startColor: "green", endColor: "red", fontSize: "12px"},
    },
    y: mobileHeaderHeight, display:'block',
  })


  // parallax
  const 
  bg = document.getElementById("bg");
  moon = document.getElementById("moon");
  mountain = document.getElementById("mountain");
  road = document.getElementById("road");
  text = document.getElementById("text");

  window.addEventListener('scroll', function() {
    let value = window.scrollY;

    bg.style.top = value * 0.5 + 'px';
    moon.style.left = -value * 0.5 + 'px';
    moon.style.transform =  'rotate(' + -value * 0.05 + 'deg)' ;
    mountain.style.top = -value * 0.15 + 'px';
    road.style.top = value * 0.15 + 'px';
    text.style.top = value * 1 + 'px';
  })

});



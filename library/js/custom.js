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
  var tl = gsap.timeline();
  tl.to(".header", {x: 100, duration: 1});
  tl.pause();
  
  
  gsap.to('.header', {
    scrollTrigger: {
      trigger: '#content',
      start: 'top top+=0',
      endTrigger: '.footer',
      end: 'bottom',
      scrub: true,
      // markers: true
      markers: {startColor: "green", endColor: "red", fontSize: "12px"},
      onEnter: () => tl.play(),
      onLeaveBack: () => tl.reverse(),
      //onToggle: self => console.log("toggled. active?", self.isActive),

      //onEnter: () => console.log('onEnter'),
      onLeave: () => console.log('onLeave'),
      onEnterBack: () => console.log('onEnterBack'),
      //onLeaveBack: () => console.log('onLeaveBack'),


      toggleClass: {targets: ".header", className: "active"}
    } 
  });

});



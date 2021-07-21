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
  gsap.to('.header', {
    scrollTrigger: {
      trigger: '#content',
      start: 'top top+=00',
      endTrigger: '.footer',
      end: 'bottom',
      scrub: true,
      // markers: true
      //markers: {startColor: "green", endColor: "red", fontSize: "12px"},
      onToggle: ({isActive}) => console.log('cunce!'),

      toggleClass: {targets: ".header", className: "active"}
    } 
  });

});




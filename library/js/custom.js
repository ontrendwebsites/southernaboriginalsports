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
  ScrollTrigger.create({

    onEnter: () => {
      console.log('this');
      const mobileHeader = document.querySelector('header.active');
      let mobileHeaderHeight = mobileHeader.offsetHeight;

      var newTl = gsap.timeline({
        delay: .3,
      });
      newTl.fromTo(mobileHeader, {y: -mobileHeaderHeight}, {y: 0, duration: .3});
    },

    trigger: "#content",
    start: "top top+=100",
    endTrigger: ".footer",
    end: "bottom",
    //markers: {startColor: "green", endColor: "red", fontSize: "12px"},
    //onToggle: self => console.log("toggled, isActive:", self.isActive),
    toggleClass: {targets: ".header", className: "active"}
  });

});



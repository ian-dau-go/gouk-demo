$(document).ready(function () {
  $('.owl-carousel').owlCarousel({
      // autoplay: true,
      // /*center: true,
      // loop: true,
      // infinite:true,
      nav: false,
      // rtl: true,
      dots: true,
      items: 1,
      autoplayTimeout: 4000,
      autoplayHoverPause: true,
  });

});

function handleResize() {
    const change = $(".MaskGroup1");
    const change1 = $(".MaskGroup2");
    const bodyWidth = $("body").width();
    if (bodyWidth > 768 && bodyWidth <= 1280) {
        change.css({
            left: bodyWidth - 633 + "px"
        });
        change1.css({
            left: bodyWidth - 954 + "px",
        });
    } else if (bodyWidth > 1280) {
        change.css({
            left: bodyWidth - 710 + "px",
        });
        change1.css({
            left: bodyWidth - 1090 + "px",
        });
    }
}
$(document).ready(handleResize);
$(window).on("resize", handleResize);

const logos = document.querySelectorAll('.logo-wrapper');
gsap.set(logos, { autoAlpha: 1 })

logos.forEach((logo, i) => {
  gsap.set(logo, { xPercent: 100 * i });
});
// since the grid is 5 across, you want any amount more than 5 to enable animation
if (logos.length > 5) {
  // wrap function for looping
  const logosWrap = gsap.utils.wrap(-100, ((logos.length - 1) * 100));
  
  // how long it takes for each logo to move 100%;  
  const duration = logos.length * 2.5;
  gsap.to(logos, {
    xPercent: `-=${logos.length * 100}`,
    duration,
    repeat: -1,
    ease: 'none',
    modifiers: {
      // run xPercent through the wrap function
      xPercent: xPercent => logosWrap(parseFloat(xPercent))
    }
  });
}



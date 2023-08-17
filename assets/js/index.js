(function () {
  init();
  function init() {
    wheelHandler();
    function handleResize() {
      const change = $(".MaskGroup1");
      const change1 = $(".MaskGroup2");
      const bodyWidth = $("body").width();
      if (bodyWidth > 768 && bodyWidth <= 1280) {
        change.css({
          left: bodyWidth - 633 + "px",
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

      console.log(bodyWidth);
    }
    $(document).ready(handleResize);
    $(window).on("resize", handleResize);

    $(document).ready(function () {
      $(".owl-carousel").owlCarousel({
        autoplay: true,
        center: true,
        loop: true,
        infinite: true,
        nav: false,
        dots: true,
        items: 1,
        autoplayTimeout: 5000,
        autoplayHoverPause: true,
      });
    });
  }

  function wheelHandler(evt) {
    const scrollContainer = document.querySelector(".frame34786");
    scrollContainer &&
      scrollContainer.addEventListener("wheel", (evt) => {
        evt.preventDefault();
        scrollContainer.scrollLeft += evt.deltaY;
      });
  }

  function mousemoveHandler() {
    let timeline = document.querySelector(".timeline");

    timeline.addEventListener("mousemove", function (e) {
      let circle = document.getElementById("timelineCircle");
      var offsetX = e.offsetX;
      var offsetY = e.offsetY;
      var x = e.clientX;
      var y = e.clientY;

      var rect = timeline.getBoundingClientRect();
      var offsetX = x - rect.left;
      var offsetY = y - rect.top;

      circle.style.left = offsetX + "px";
      circle.style.top = offsetY + "px";
    });
  }
})();

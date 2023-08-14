(function () {
  init();
  function init() {
    carouselControlHandler();
  }

  function carouselControlHandler() {
    let i = 0;
    $(".carousel-control-next").click(function () {
      var totalItems = $(".carousel-item").length;
      var carousel = document.querySelector(".carousel-inner");
      var card = document.querySelector(".carousel-inner .active");
      var perSlide = parseInt((carousel.offsetWidth + 2) / card.offsetWidth);
      if (i >= totalItems - perSlide) {
        return false;
      }
      $(".carousel-item").eq(i).removeClass("active");
      $(".carousel-item")
        .eq(i + 1)
        .addClass("active");
      i++;
    });
    $(".carousel-control-prev").click(function () {
      var totalItems = $(".carousel-item").length;
      if (i <= 0) {
        return false;
      }
      $(".carousel-item").eq(i).removeClass("active");
      $(".carousel-item")
        .eq(i - 1)
        .addClass("active");
      i--;
    });

    $("#search-btn").click(function () {
      $(this).css("display", "none");
      $("#navbarNav").css("display", "none");
      $("#search-active").css("display", "block");
    });

    $("#icon-close-btn").click(function () {
      $("#search-btn").css("display", "block");
      $("#navbarNav").css("display", "block");
      $("#search-active").css("display", "none");
    });
  }
})();

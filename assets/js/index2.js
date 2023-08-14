
(function () {
    init();
    function init() {
        wheelHandler();
        // mousemoveHandler();

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
          
    }

    function wheelHandler(evt) {
        const scrollContainer = document.querySelector(".frame34786");
        scrollContainer && scrollContainer.addEventListener("wheel", (evt) => {
            evt.preventDefault();
            scrollContainer.scrollLeft += evt.deltaY;
        });
    }

    function mousemoveHandler() {
        let timeline = document.querySelector('.timeline');

        timeline.addEventListener('mousemove', function (e) {
            let circle = document.getElementById('timelineCircle');
            var offsetX = e.offsetX;
            var offsetY = e.offsetY;
            var x = e.clientX; 
            var y = e.clientY; 

            // var element = e.target;
            var rect = timeline.getBoundingClientRect(); 
			var offsetX = x - rect.left; 
			var offsetY = y - rect.top; 
		
            // while (element !== timeline) {
                // offsetY += element.offsetTop;
                // element = element.parentNode;
            // }

            circle.style.left = offsetX + 'px';
            circle.style.top = offsetY + 'px';
        });
    }
})();
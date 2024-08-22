document.addEventListener('DOMContentLoaded', function() {
    // const carouselElement = document.querySelector('#home-carousel');

    // // Initialize Bootstrap carousel
    // const carousel = new bootstrap.Carousel(carouselElement, {
    //     interval: 5000,  // interval time
    //     ride: 'carousel'
    // });

    // // Listen for slide event to handle custom animations
    // carouselElement.addEventListener('slide.bs.carousel', function(event) {
    //     const outgoingItem = event.from;
    //     const incomingItem = event.to;

    //     // Apply animation classes to outgoing and incoming items
    //     const items = carouselElement.querySelectorAll('.carousel-item');
    //     items[outgoingItem].classList.add('fadeOut');
    //     items[incomingItem].classList.add('fadeIn');
    // });

    // // Reset animations after slide transition
    // carouselElement.addEventListener('slid.bs.carousel', function(event) {
    //     const items = carouselElement.querySelectorAll('.carousel-item');
    //     items.forEach(item => {
    //         item.classList.remove('fadeOut', 'fadeIn');
    //     });
    // });

    $('#coin-slider').coinslider({
        // width: $('#coin-slider').parent().width(),
        width: 1000,
        height: 500,
        sDelay: 100,
        delay: 5000,
        navigation: true,
        prevText: '<',
        nextText: '>',
    });

    // // Function to initialize the Coin Slider with viewport dimensions
    // function initializeCoinSlider() {
    //     var viewportWidth = $(window).width();
    //     var viewportHeight = $(window).height() * 0.5;

    //     $('#coin-slider').coinslider({
    //         width: viewportWidth, // Set width based on viewport width
    //         height: viewportHeight, // Set height based on viewport height
    //         sDelay: 100,
    //         delay: 5000,
    //         prevText: '<',
    //         nextText: '>',
    //         navigation: true,
    //     });
    // }

    // // Initialize Coin Slider on document ready
    // initializeCoinSlider();

    // // Reinitialize Coin Slider on window resize
    // $(window).resize(function() {
    //     $('.coin-slider').empty(); // Clear the existing content
    //     // Re-insert images
    //     $('.coin-slider').append(`<div id="coin-slider">
    //         <img src="images/1 首頁-1.jpg" alt="Slide 1">
    //         <img src="images/1 首頁-2.jpg" alt="Slide 2">
    //         <img src="images/1 首頁-3.jpg" alt="Slide 3">
    //         <img src="images/1 首頁-4.jpg" alt="Slide 4">
    //         <img src="images/1 首頁-5.jpg" alt="Slide 5"></div>
    //     `);
    //     initializeCoinSlider(); // Reinitialize with new dimensions
    // });
});
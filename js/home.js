document.addEventListener('DOMContentLoaded', function() {
    const carouselElement = document.querySelector('#home-carousel');

    // Initialize Bootstrap carousel
    const carousel = new bootstrap.Carousel(carouselElement, {
        interval: 7000,  // interval time
        ride: 'carousel'
    });

    // Listen for slide event to handle custom animations
    carouselElement.addEventListener('slide.bs.carousel', function(event) {
        const outgoingItem = event.from;
        const incomingItem = event.to;

        // Apply animation classes to outgoing and incoming items
        const items = carouselElement.querySelectorAll('.carousel-item');
        items[outgoingItem].classList.add('fadeOut');
        items[incomingItem].classList.add('fadeIn');
    });

    // Reset animations after slide transition
    carouselElement.addEventListener('slid.bs.carousel', function(event) {
        const items = carouselElement.querySelectorAll('.carousel-item');
        items.forEach(item => {
            item.classList.remove('fadeOut', 'fadeIn');
        });
    });
});
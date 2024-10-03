document.addEventListener('DOMContentLoaded', function() {
    const carouselElement = document.querySelector('#carouselExampleIndicators');
    const carouselInstance = new bootstrap.Carousel(carouselElement);

    window.showImage = function(src) {
        const mainImage = document.querySelector('#mainImage');
        mainImage.src = src;
    };

    const fixedTop = document.querySelector('.fixed-top');
    const content = document.querySelector('#content');
    const fixedTopHeight = fixedTop.offsetHeight;
    content.style.marginTop = fixedTopHeight + 'px';
});

function showImage(src) {
    const carousel = document.querySelector('#carouselExampleIndicators');
    const carouselItems = carousel.querySelectorAll('.carousel-item');
    
    carouselItems.forEach((item, index) => {
        const images = item.querySelectorAll('img');
        images.forEach(img => {
            if (img.src.includes(src)) {
                const carouselInstance = bootstrap.Carousel.getInstance(carousel);
                carouselInstance.to(index); // 滑動到包含目標圖片的 carousel-item
            }
        });
    });
}
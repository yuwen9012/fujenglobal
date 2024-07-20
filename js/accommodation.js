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

function showImage1(src) {
    const mainImage = document.getElementById('mainImage1');
    mainImage.src = src;
}

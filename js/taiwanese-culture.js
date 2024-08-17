function showImageTC2(src, newTitle, content) {
    const carousel = document.querySelector('#carouselExampleIndicators');
    const carouselItems = carousel.querySelectorAll('.carousel-item');
    const carouselInstance = bootstrap.Carousel.getInstance(carousel);
    const mainImage = document.getElementById('mainImage2');
    mainImage.src = src;
    document.querySelector(".heading2").textContent = newTitle;
    document.querySelector(".content2").textContent = content;
    carouselItems.forEach((item, index) => {
        const images = item.querySelectorAll('image');
        images.forEach(img => {
            if (img.src.includes(src)) {
                carouselInstance.to(index); // 滑动到包含目标图片的 carousel-item
            }
        });
    });
}

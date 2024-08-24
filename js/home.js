document.addEventListener('DOMContentLoaded', function() {
    const canvas = document.getElementById('canvas');
    const ctx = canvas.getContext('2d');

    // Helper function to load an image and draw it on the canvas
    function loadImage(src, desiredWidth, desiredHeight) {
        return new Promise((resolve, reject) => {
            const img = new Image();
            img.onload = () => {
                // Set canvas dimensions
                canvas.width = desiredWidth;
                canvas.height = desiredHeight;

                // Draw the image on the canvas
                ctx.drawImage(img, 0, 0, desiredWidth, desiredHeight);

                // Get image data from canvas
                const resizedImageData = canvas.toDataURL('image/jpeg');
                resolve(resizedImageData);
            };
            img.onerror = reject;
            img.src = src;
        });
    }

    // Function to add images to coin-slider
    async function addImagesToSlider(images, desiredWidth, desiredHeight, callback) {
        const slider = document.getElementById('coin-slider');

        // Clear any existing images
        slider.innerHTML = '';

        for (const src of images) {
            try {
                const resizedImageData = await loadImage(src, desiredWidth, desiredHeight);

                // Create an img element for the resized image
                const imgElement = document.createElement('img');
                imgElement.src = resizedImageData;
                imgElement.alt = 'Slide';

                // Add the image to the slider
                slider.appendChild(imgElement);
            } catch (error) {
                console.error('Error loading image:', error);
            }
        }

        // Call the callback function after all images have been added
        if (callback) {
            callback();
        }
    }

    // Function to initialize the coin-slider with updated dimensions
    function initializeCoinSlider() {
        // 圖片檔
        const images = [
            'images/1 首頁-1coin.jpg',
            'images/1 首頁-2coin.jpg',
            'images/1 首頁-3coin.jpg',
            'images/1 首頁-4coin.jpg',
            'images/1 首頁-5coin.jpg'
        ];

        const desiredWidth = $('#coin-slider').parent().width();
        const desiredHeight = desiredWidth * 0.3;

        addImagesToSlider(images, desiredWidth, desiredHeight, () => {
            $('#coin-slider').coinslider({
                width: desiredWidth,
                height: desiredHeight,
                sDelay: 100,
                delay: 5000,
                navigation: true,
                links: false,
                prevText: '<',
                nextText: '>',
            });
        });
    }

    // Initial load
    initializeCoinSlider();

    // Reinitialize Coin Slider on window resize
    $(window).resize(function() {
        initializeCoinSlider();
    });
});
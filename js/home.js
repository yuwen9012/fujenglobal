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
                const resizedImageData = await loadImage(src.url, desiredWidth, desiredHeight);

                // Create an a element for the link
                const linkElement = document.createElement('a');
                linkElement.href = src.link;
                if (src.target === 'blank') {
                    linkElement.target = '_blank';
                }

                // Create an img element for the resized image
                const imgElement = document.createElement('img');
                imgElement.src = resizedImageData;
                imgElement.alt = 'Slide';

                // Append the img to the a element
                linkElement.appendChild(imgElement);

                // Add the image to the slider
                slider.appendChild(linkElement);

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
        fetchImages().then(images => {
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
        }).catch(error => {
            console.error(error);
        });
    }

    function fetchImages() {
        return new Promise((resolve, reject) => {
            let images = [];
            var dataSheet = 'home_carousel';
            var url = './php/get_data.php?table=' + encodeURIComponent(dataSheet);

            $.getJSON(url, function(sqldata) {
                sqldata.forEach(function(item) {
                    images.push({
                        url: 'images/' + item.image,
                        link: item.link || '#',
                        target: item.target || '',
                    });
                });
                resolve(images); // 解析 Promise 並返回 images
            }).fail(function() {
                reject('資料載入失敗');
            });
        });
    }

    // Initial load
    initializeCoinSlider();

    // Reinitialize Coin Slider on window resize
    $(window).resize(function() {
        initializeCoinSlider();
    });

    document.querySelectorAll('.carousel-item').forEach(item => {
        item.addEventListener('click', () => {
            console.log('Item clicked!');
        });
    });
});
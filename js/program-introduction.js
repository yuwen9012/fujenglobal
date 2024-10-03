document.addEventListener('DOMContentLoaded', (event) => {
    loadImages();
    
    const fixedTop = document.querySelector('.fixed-top');
    const content = document.querySelector('#content');
    const fixedTopHeight = fixedTop.offsetHeight;
    content.style.marginTop = fixedTopHeight + 'px';
})

// 載入圖片
function loadImages() {
    var dataSheet = 'program_introduction_image';
    var url = './php/get_data.php?table=' + encodeURIComponent(dataSheet);
    fetch(url)
        .then(response => response.json())
        .then(datas => {
            let container = document.getElementById('content-container');

            datas.forEach((data) => {
                let image = `<div class="container-fluid d-flex justify-content-center">
                                <img src="images/${data.image}" alt="Description of the image" class="img-fluid w-content">
                            </div>`;
                container.insertAdjacentHTML('beforeend', image);
            });
        })
        .catch(error => {
            console.error('Error fetching images:', error);
        });
}
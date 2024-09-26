document.addEventListener('DOMContentLoaded', (event) => {
    // 計分器動畫
    function startAnimation(scores) {
        const duration = 1000;
        let startTime = null;
        let animationFrameId = null;

        function animateScore(timestamp) {
            if (!startTime) startTime = timestamp;
            const progress = timestamp - startTime;
            const percentage = Math.min(progress / duration, 1);
    
            scores.forEach((target, index) => {
                if (Array.isArray(target)) {
                    target.forEach((value, subIndex) => {
                        const currentScore = Math.floor(percentage * value);
                        const scoreDisplays = document.querySelectorAll('.ranking-score');
    
                        if (subIndex < scoreDisplays.length) {
                            scoreDisplays[subIndex].textContent = currentScore.toLocaleString();
                        }
                    });
                }
                else {
                    const currentScore = Math.floor(percentage * target);
                    const scoreDisplays = document.querySelectorAll('.score-display');

                    if (index < scoreDisplays.length) {
                        scoreDisplays[index].textContent = currentScore.toLocaleString();
                    }
                }
            });
    
            if (percentage < 1) {
                animationFrameId = requestAnimationFrame(animateScore);
            }
            else {
                animationFrameId = null;
            }
        }
    
        // 使用 Intersection Observer API 檢測元素是否進入可視畫面
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    // 元素進入可視畫面後重新計分
                    if (!animationFrameId) {
                        startTime = null;
                        requestAnimationFrame(animateScore);
                    }
                }
                else {
                    // 元素離開可視畫面後暫停
                    if (animationFrameId) {
                        cancelAnimationFrame(animationFrameId);
                        animationFrameId = null;
                    }
                }
            });
        }, { threshold: 0 });

        observer.observe(document.querySelector('#scorer'));
    }

    // 載入介紹文字
    function loadIntroduction() {
        $.ajax({
            url: './php/get_last_data.php',
            type: 'POST',
            data: {
                dataSheet: 'study_abroad_introduction_text',
            },
            success: function(response) {
                data = JSON.parse(response);
                document.getElementById('introduction-title').innerHTML = data.title;
                document.getElementById('introduction-text').innerHTML = data.content;
            },
            error: function() {
                console.error('錯誤');
            }
        });
    }

    // 載入計分器資料
    function loadScorer() {
        $.ajax({
            url: './php/get_processed_data.php',
            type: 'POST',
            data: {
                dataSheet: 'study_abroad_scorer',
            },
            success: function(response) {
                const parsedResponse = JSON.parse(response);
                const scores = Object.values(parsedResponse.scores);
                const datas = parsedResponse.datas;

                if (Array.isArray(scores)) {
                    startAnimation(scores);
                }
                else {
                    console.error('Scores is not an array:', scores);
                }

                let scorer = document.getElementById('scorer');
                datas.forEach(data => {
                    let subscore;
                    if (typeof data.quantity === 'object') {
                        subscore = `<span class="fs-3 ranking-score"></span>
                                    <span class="fs-4">—</span>
                                    <span class="fs-3 ranking-score"></span>
                                    <span class="fs-4">th</span>`;
                    }
                    else {
                        subscore = data.quantity;
                    };

                    let score = `<div class="col-12 col-sm-6 col-lg-4 col-xxl-2 text-center my-5">
                                    <div class="image-container">
                                        <img src="images/${data.image}" class="d-block mx-auto" alt="photo">
                                    </div>
                                    <h4 class="fw-semibold py-3">${data.name}</h4>
                                    <div class="score-display fw-semibold">${subscore}</div>
                                </div>`;
                    scorer.insertAdjacentHTML('beforeend', score);
                })
            },
            error: function() {
                console.error('錯誤');
            }
        });
    }

    // 載入輪播牆圖片
    function loadCarouselImages() {
        var dataSheet = 'study_abroad_carousel';
        var url = './php/get_data.php?table=' + encodeURIComponent(dataSheet);
        fetch(url)
            .then(response => response.json())
            .then(datas => {
                const carouselInner = document.getElementById('carouselInner');
                const carouselIndicators = document.getElementById('carouselIndicators');

                datas.forEach((data, index) => {
                    const carouselItem = document.createElement('div');
                    carouselItem.className = `carousel-item ${index === 0 ? 'active' : ''}`;
                    carouselItem.innerHTML = `<img src="images/${data.image}" class="d-block w-100" alt="...">`;
                    carouselInner.appendChild(carouselItem);

                    const indicator = document.createElement('button');
                    indicator.type = 'button';
                    indicator.setAttribute('data-bs-target', '#carouselExampleIndicators');
                    indicator.setAttribute('data-bs-slide-to', index);
                    indicator.className = index === 0 ? 'active' : '';
                    indicator.setAttribute('aria-current', index === 0 ? 'true' : 'false');
                    indicator.setAttribute('aria-label', `Slide ${index + 1}`);
                    carouselIndicators.appendChild(indicator);
                });
            })
            .catch(error => {
                console.error('Error fetching images:', error);
            });
    }

    loadIntroduction();
    loadScorer();
    loadCarouselImages();
});


$(document).ready(function (e) {

    $('img#map').rwdImageMaps();
    
    $('area').on('mouseover', function (e) {
        //$(this).focus();
    });
});



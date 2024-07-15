document.addEventListener('DOMContentLoaded', function() {
    let backToTopButton = document.getElementById('back-to-top');
    let contentElement = document.querySelector('.content');

    // 當content滾動時顯示或隱藏回到頂部按鈕
    contentElement.addEventListener('scroll', function() {
        if (contentElement.scrollTop > 100) {
            backToTopButton.style.display = 'block';
        } else {
            backToTopButton.style.display = 'none';
        }
    });

    // 點擊回頂部事件監聽器
    backToTopButton.addEventListener('click', function(e) {
        e.preventDefault();
        contentElement.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });

    // 滾動到指定的內容部分
    document.querySelectorAll('.navbar-nav a[data-scroll="true"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            var targetId = this.getAttribute('href').substring(1);
            var targetElement = document.getElementById(targetId);

            if (targetElement) {
                // 計算目標元素相對於content元素的滾動位置
                var targetPosition = targetElement.offsetTop;
                contentElement.scrollTo({
                    top: targetPosition - 145,
                    behavior: 'smooth'
                });
            }
        });
    });
});
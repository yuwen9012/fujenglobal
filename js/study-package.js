document.addEventListener('DOMContentLoaded', function() {
    let backToTopButtons = document.getElementsByClassName('back-to-top');
    let contentElement = document.querySelector('.content');

    // 當content滾動時顯示或隱藏回到頂部按鈕
    contentElement.addEventListener('scroll', function() {
        if (contentElement.scrollTop > 100) {
            Array.from(backToTopButtons).forEach(button => {
                button.style.display = 'block';
            });
        } else {
            Array.from(backToTopButtons).forEach(button => {
                button.style.display = 'none';
            });
        }
    });

    // 為每個按鈕添加點擊事件
    Array.from(backToTopButtons).forEach(button => {
        button.addEventListener('click', () => {
            // 平滑滾動到頁面頂部
            contentElement.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
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

    // 點擊tab，重置content到頂部
    document.querySelectorAll('#list-tab a').forEach(tab => {
        tab.addEventListener('shown.bs.tab', () => {
            contentElement.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    });

    // Read more文字顯示
    $('#collapseExample').on('shown.bs.collapse', function () {
        $('#read-more-link').text('Hide');
    });
    $('#collapseExample').on('hidden.bs.collapse', function () {
        $('#read-more-link').text('Read more...');
    });
});
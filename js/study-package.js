// $(document).ready(function() {
//     $('a[href^="#"]').on('click', function(event) {
//         var target = $(this.getAttribute('href'));
//         if( target.length ) {
//             event.preventDefault();
//             $('.content').stop().animate({
//                 scrollTop: target.offset().top
//             }, 1000);
//         }
//     });
// });

// document.querySelector('.content').addEventListener('wheel', function(e) {
//     var deltaY = e.deltaY || e.detail || e.wheelDelta;
//     var content = document.querySelector('.content');
    
//     if ((deltaY < 0 && content.scrollTop === 0) || (deltaY > 0 && content.scrollTop >= (content.scrollHeight - content.clientHeight))) {
//         e.preventDefault();
//     }
// });

// 當網頁滾動時顯示或隱藏回到頂部按鈕
window.addEventListener('scroll', function() {
    var backToTopButton = document.getElementById('back-to-top');
    if (window.pageYOffset > 100) {
        backToTopButton.style.display = 'block';
    } else {
        backToTopButton.style.display = 'none';
    }
});

document.getElementById('back-to-top').addEventListener('click', function(e) {
    e.preventDefault();
    
    // 获取要滚动到的目标元素，这里假设 .content 是你想要滚动到的元素
    var contentElement = document.querySelector('.content');
    
    // 计算 .content 元素顶部相对于视口顶部的距离
    var contentOffset = contentElement.offsetTop;
    
    // 执行平滑滚动到 .content 元素顶部
    contentElement.scrollIntoView({
        behavior: 'smooth',
        block: 'start' // 滚动到 .content 元素的顶部
    });
});
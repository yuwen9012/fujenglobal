document.addEventListener('DOMContentLoaded', function() {
    const fixedTop = document.querySelector('.fixed-top');
    const content = document.querySelector('#content');
    const fixedTopHeight = fixedTop.offsetHeight;
    content.style.marginTop = fixedTopHeight + 'px';
})
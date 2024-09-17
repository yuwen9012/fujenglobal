document.addEventListener('DOMContentLoaded', () => {
    var collapseElement = document.getElementById('studyAbroadMenu');
    var iconDown = document.querySelector('.fa-chevron-down');
    var iconUp = document.querySelector('.fa-chevron-up');

    // 預設
    if (collapseElement.classList.contains('show')) {
        iconDown.style.display = 'none';
    } else {
        iconUp.style.display = 'none';
    }
    
    collapseElement.addEventListener('shown.bs.collapse', function () {
        iconDown.style.display = 'none';
        iconUp.style.display = 'inline';
    });

    collapseElement.addEventListener('hidden.bs.collapse', function () {
        iconDown.style.display = 'inline';
        iconUp.style.display = 'none';
    });
});
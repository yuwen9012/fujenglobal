document.addEventListener('DOMContentLoaded', function () {
    var collapseElement = document.getElementById('studyAbroadMenu');
    var toggleElement = document.querySelector('[data-bs-toggle="collapse"]');
    var iconDown = toggleElement.querySelector('.fa-chevron-down');
    var iconUp = toggleElement.querySelector('.fa-chevron-up');

    // 預設
    iconUp.style.display = 'none';
    
    collapseElement.addEventListener('shown.bs.collapse', function () {
        iconDown.style.display = 'none';
        iconUp.style.display = 'inline';
    });

    collapseElement.addEventListener('hidden.bs.collapse', function () {
        iconDown.style.display = 'inline';
        iconUp.style.display = 'none';
    });
});
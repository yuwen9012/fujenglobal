document.addEventListener('DOMContentLoaded', function () {
    // Study Abroad Menu
    var studyAbroadMenu = document.getElementById('studyAbroadMenu');
    var studyAbroadToggle = document.querySelector('[data-bs-toggle="collapse"][href="#studyAbroadMenu"]');
    var iconDownStudy = studyAbroadToggle.querySelector('.fa-chevron-down');
    var iconUpStudy = studyAbroadToggle.querySelector('.fa-chevron-up');

    // 預設
    iconUpStudy.style.display = 'none';

    studyAbroadMenu.addEventListener('shown.bs.collapse', function () {
        iconDownStudy.style.display = 'none';
        iconUpStudy.style.display = 'inline';
    });

    studyAbroadMenu.addEventListener('hidden.bs.collapse', function () {
        iconDownStudy.style.display = 'inline';
        iconUpStudy.style.display = 'none';
    });

    // Chinese Learning Menu
    var chineseLearningMenu = document.getElementById('chineseLearningMenu');
    var chineseLearningToggle = document.querySelector('[data-bs-toggle="collapse"][href="#chineseLearningMenu"]');
    var iconDownChinese = chineseLearningToggle.querySelector('.fa-chevron-down');
    var iconUpChinese = chineseLearningToggle.querySelector('.fa-chevron-up');

    // 預設
    iconUpChinese.style.display = 'none';

    chineseLearningMenu.addEventListener('shown.bs.collapse', function () {
        iconDownChinese.style.display = 'none';
        iconUpChinese.style.display = 'inline';
    });

    chineseLearningMenu.addEventListener('hidden.bs.collapse', function () {
        iconDownChinese.style.display = 'inline';
        iconUpChinese.style.display = 'none';
    });
});

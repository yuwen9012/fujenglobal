document.addEventListener('DOMContentLoaded', (event) => {
    const college_score = document.getElementById('college-score');
    const college_target = 12;

    const degree_score = document.getElementById('degree-score');
    const degree_target = 53;

    const partner_score = document.getElementById('partner-score');
    const partner_target = 463;

    const student_score = document.getElementById('student-score');
    const student_target = 83;

    const ranking1_score = document.getElementById('ranking-score1');
    const ranking1_target = 301;
    const ranking2_score = document.getElementById('ranking-score2');
    const ranking2_target = 350;

    const association_score = document.getElementById('association-score');
    const association_target = 49;

    const duration = 1000;

    let startTime = null;
    let animationFrameId = null;

    function animateScore(timestamp) {
        if (!startTime) startTime = timestamp;
        const progress = timestamp - startTime;
        const percentage = Math.min(progress / duration, 1);

        const college_current_score = Math.floor(percentage * college_target);
        const degree_current_score = Math.floor(percentage * degree_target);
        const partner_current_score = Math.floor(percentage * partner_target);
        const student_current_score = Math.floor(percentage * student_target);
        const ranking1_current_score = Math.floor(percentage * ranking1_target);
        const ranking2_current_score = Math.floor(percentage * ranking2_target);
        const association_current_score = Math.floor(percentage * association_target);

        college_score.textContent = college_current_score.toLocaleString();
        degree_score.textContent = degree_current_score.toLocaleString();
        partner_score.textContent = partner_current_score.toLocaleString();
        student_score.textContent = student_current_score.toLocaleString();
        ranking1_score.textContent = ranking1_current_score.toLocaleString();
        ranking2_score.textContent = ranking2_current_score.toLocaleString();
        association_score.textContent = association_current_score.toLocaleString();

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
    }, { threshold: 0.5 });

    observer.observe(document.querySelector('#scorer'));
});
document.addEventListener('DOMContentLoaded', (event) => {
    const partner_score = document.getElementById('partner-score');
    const partner_target = 153589;

    const student_score = document.getElementById('student-score');
    const student_target = 14531242;

    const ranking_score = document.getElementById('ranking-score');
    const ranking_target = 45621;

    const duration = 2000;

    let startTime = null;

    function animateScore(timestamp) {
        if (!startTime) startTime = timestamp;
        const progress = timestamp - startTime;
        const percentage = Math.min(progress / duration, 1);

        const partner_current_score = Math.floor(percentage * partner_target);
        const student_current_score = Math.floor(percentage * student_target);
        const ranking_current_score = Math.floor(percentage * ranking_target);

        partner_score.textContent = partner_current_score.toLocaleString();
        student_score.textContent = student_current_score.toLocaleString();
        ranking_score.textContent = ranking_current_score.toLocaleString();

        if (percentage < 1) {
            requestAnimationFrame(animateScore);
        }
    }

    requestAnimationFrame(animateScore);
});
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

    // Define an array of collapse IDs and corresponding link IDs
    const collapses = [
        // Liberal art
        { collapseId: '#collapseLiberIntro', linkId: '#read-more-link-liber-intro' },
        { collapseId: '#collapseLiberFeatu', linkId: '#read-more-link-liber-featu' },
        // Communication
        { collapseId: '#collapseCommuIntro', linkId: '#read-more-link-commu-intro' },
        { collapseId: '#collapseCommuFeatu', linkId: '#read-more-link-commu-featu' },
        { collapseId: '#collapseCommuAmsp', linkId: '#read-more-link-commu-amsp' },
        { collapseId: '#collapseCommuCsd', linkId: '#read-more-link-commu-csd' },
        { collapseId: '#collapseCommuRf', linkId: '#read-more-link-commu-rf' },
        // Education
        { collapseId: '#collapseEduIntro', linkId: '#read-more-link-edu-intro' },
        { collapseId: '#collapseEduFeatu', linkId: '#read-more-link-edu-featu' },
    ];

    // Function to handle the collapse events
    function handleCollapse(collapseId, linkId) {
        $(collapseId).on('shown.bs.collapse', function () {
            $(linkId).text('Hide');
        });
        $(collapseId).on('hidden.bs.collapse', function () {
            $(linkId).text('Read more...');
        });
    }

    // Iterate over the array and apply the event handlers
    collapses.forEach(({ collapseId, linkId }) => {
        handleCollapse(collapseId, linkId);
    });
});
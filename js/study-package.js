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

    // 點擊選單隱藏回到頂部按鈕
    document.querySelector('.fa-bars').addEventListener('click', function() {
        Array.from(backToTopButtons).forEach(button => {
            button.style.display = 'none';
        });
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
                const windowWidth = window.innerWidth;
                if (windowWidth < 992) {
                    shift = 180;
                }
                else {
                    shift = 145;
                }

                contentElement.scrollTo({
                    top: targetPosition - shift,
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

    // offcanvas點擊後關閉
    var offcanvasElement = document.getElementById('offcanvasNavbar');
            var offcanvas = new bootstrap.Offcanvas(offcanvasElement);

            // Add event listeners to close the offcanvas when an item is clicked
            var links = offcanvasElement.querySelectorAll('.list-group-item');
            links.forEach(function(link) {
                link.addEventListener('click', function () {
                    offcanvas.hide(); // Hide the offcanvas menu
                });
            });

    // Define an array of collapse IDs and corresponding link IDs
    const collapses = [
        // Liberal art
        { collapseId: '#collapseLiberIntro', linkId: '#read-more-link-liber-intro' },
        { collapseId: '#collapseLiberFeatu', linkId: '#read-more-link-liber-featu' },
        //Art
        { collapseId: '#collapseArtAmsp', linkId: '#read-more-link-Art-Amsp' },
        { collapseId: '#collapseArtLo', linkId: '#read-more-link-Art-lo' },
        { collapseId: '#collapseArtFF', linkId: '#read-more-link-Art-ff' },
        // Communication
        { collapseId: '#collapseCommuIntro', linkId: '#read-more-link-commu-intro' },
        { collapseId: '#collapseCommuFeatu', linkId: '#read-more-link-commu-featu' },
        { collapseId: '#collapseCommuAmsp', linkId: '#read-more-link-commu-amsp' },
        { collapseId: '#collapseCommuCsd', linkId: '#read-more-link-commu-csd' },
        { collapseId: '#collapseCommuRf', linkId: '#read-more-link-commu-rf' },
        // Education
        { collapseId: '#collapseEduIntro', linkId: '#read-more-link-edu-intro' },
        { collapseId: '#collapseEduFeatu', linkId: '#read-more-link-edu-featu' },
        // Medicine
        { collapseId: '#collapseMedIntro', linkId: '#read-more-link-Med-intro' },
        { collapseId: '#collapseMedFeatu', linkId: '#read-more-link-Med-featu' },
        { collapseId: '#collapseMedAmsp', linkId: '#read-more-link-Med-amsp' },
        { collapseId: '#collapseMedCsd', linkId: '#read-more-link-Med-csd' },
        { collapseId: '#collapseMedLo', linkId: '#read-more-link-Med-lo' },
        // Engineering
        { collapseId: '#collapseEngiAmsp', linkId: '#read-more-link-Engi-amsp' },
        // Foreign languages
        { collapseId: '#collapseForeiIntro', linkId: '#read-more-link-forei-intro' },
        { collapseId: '.collapseForeiFeatu', linkId: '#read-more-link-forei-featu' },
        { collapseId: '.collapseForeiAmsp', linkId: '#read-more-link-forei-amsp' },
        { collapseId: '#collapseForeiCsd', linkId: '#read-more-link-forei-csd' },
        { collapseId: '#collapseForeiRf', linkId: '#read-more-link-forei-rf' },
        // Human ecology
        { collapseId: '#collapseEcoIntro', linkId: '#read-more-link-eco-intro' },
        { collapseId: '#collapseEcoLo', linkId: '#read-more-link-eco-lo' },
        //Law
        { collapseId: '#collapseLawFeatu', linkId: '#read-more-link-Law-featu' },
        { collapseId: '#collapseLawAmsp', linkId: '#read-more-link-Law-amsp' },
        { collapseId: '#collapseLawLo', linkId: '#read-more-link-Law-lo' },
        { collapseId: '#collapseLawRf', linkId: '#read-more-link-Law-rf' },
        //Social
        { collapseId: '#collapseSoIntro', linkId: '#read-more-link-So-intro' },
        { collapseId: '#collapseSoFeatu', linkId: '#read-more-link-So-featu' },
        { collapseId: '#collapseSoAmsp', linkId: '#read-more-link-So-amsp' },
        { collapseId: '#collapseSoCsd', linkId: '#read-more-link-So-csd' },
        { collapseId: '#collapseSoLo', linkId: '#read-more-link-So-lo' },
        { collapseId: '#collapseSoRf', linkId: '#read-more-link-So-rf' },
        //Management
        { collapseId: '#collapseMaIntro', linkId: '#read-more-link-Ma-intro' },
        { collapseId: '#collapseMaFeatu', linkId: '#read-more-link-Ma-featu' },
        { collapseId: '#collapseMaAmsp', linkId: '#read-more-link-Ma-amsp' },
        { collapseId: '#collapseMaCsd', linkId: '#read-more-link-Ma-csd' },
        { collapseId: '#collapseMaLo', linkId: '#read-more-link-Ma-lo' },
        { collapseId: '#collapseMaFi', linkId: '#read-more-link-Ma-Fi' },
        { collapseId: '#collapseMaRf', linkId: '#read-more-link-Ma-rf' },
        //Fashion & Textiles
        { collapseId: '#collapseFtIntro', linkId: '#read-more-link-Ft-intro' },
        { collapseId: '#collapseFtFeatu', linkId: '#read-more-link-Ft-featu' },
        { collapseId: '#collapseFtCsd', linkId: '#read-more-link-Ft-csd' },
        // { collapseId: '#collapseCommuAmsp', linkId: '#read-more-link-commu-amsp' },
        // { collapseId: '#collapseCommuCsd', linkId: '#read-more-link-commu-csd' },
        // { collapseId: '#collapseCommuRf', linkId: '#read-more-link-commu-rf' },
        
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

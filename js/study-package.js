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

    // Function to update list counters
    function updateCounters() {
        const lists = document.querySelectorAll('.continueDecimal');
        let counter = 1; // Initialize counter

        lists.forEach((list) => {
            // Update each direct child list item with the current counter value
            const items = list.querySelectorAll(':scope > li'); // Correctly select direct children
            items.forEach((item) => {
                item.style.counterIncrement = `list-counter ${counter++}`;
                item.dataset.counter = counter;
            });

            // Update the list's pseudo-element
            items.forEach((item) => {
                item.style.listStyleType = 'none'; // Remove default list styling
                item.style.position = 'relative';
                item.style.paddingLeft = '2em'; // Adjust padding for numbering
                item.style.counterReset = 'list-counter'; // Reset counter at start of each list
                item.insertAdjacentHTML('beforebegin', `<span style="position:absolute;left:0">${item.dataset.counter}. </span>`);
            });
        });
    }

    function updateAlphaCounters() {
        const lists = document.querySelectorAll('.continueAlpha');
        let counter = 0; // Initialize counter for letters

        lists.forEach((list) => {
            // Update each direct child list item with the current counter value
            const items = list.querySelectorAll(':scope > li'); // Correctly select direct children
            items.forEach((item) => {
                item.style.counterIncrement = `list-counter ${String.fromCharCode(97 + counter++)}`; // Increment using letters
                item.dataset.counter = counter;
            });

            // Update the list's pseudo-element
            items.forEach((item) => {
                item.style.listStyleType = 'none'; // Remove default list styling
                item.style.position = 'relative';
                item.style.paddingLeft = '1em'; // Adjust padding for numbering
                item.style.counterReset = 'list-counter'; // Reset counter at start of each list
                item.insertAdjacentHTML('beforebegin', `<span style="position:absolute;left:0">${String.fromCharCode(96 + parseInt(item.dataset.counter))}. </span>`);
            });
        });
    }

    // function updateCounters() {
    //     const lists = document.querySelectorAll('.continueDecimal');
    //     lists.forEach((list) => {
    //         let counter = 1; // Initialize counter
    
    //         list.querySelectorAll('> li').forEach((item) => {
    //             item.style.counterIncrement = `decimal-counter ${counter++}`;
    //             item.style.counterReset = 'decimal-counter'; // Reset counter at start of each list
    //         });
    //     });
    // }
    
    // function updateAlphaCounters() {
    //     const lists = document.querySelectorAll('.continueAlpha');
    //     lists.forEach((list) => {
    //         let counter = 0; // Initialize counter for letters
    
    //         list.querySelectorAll('> li').forEach((item) => {
    //             item.style.counterIncrement = `alpha-counter ${String.fromCharCode(97 + counter)}`; // Increment using letters
    //             counter++;
    //         });
    //     });
    // }

    updateCounters();
    updateAlphaCounters();
});

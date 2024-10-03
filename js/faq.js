document.addEventListener('DOMContentLoaded', function() {
    initResult();

    const fixedTop = document.querySelector('.fixed-top');
    const content = document.querySelector('#content');
    const fixedTopHeight = fixedTop.offsetHeight;
    content.style.marginTop = fixedTopHeight + 'px';

    document.getElementById('searchButton').addEventListener('click', function() {
        performSearch();
    });

    // Add keydown event listener for the input field to detect Enter key press
    document.getElementById('searchInput').addEventListener('keydown', function(event) {
        if (event.key === 'Enter') {
            event.preventDefault(); // Prevent the default form submission behavior
            performSearch();
        }
    });

    // Attach event listener to the clear button
    document.getElementById('clearButton').addEventListener('click', clearInput);

    function initResult() {
        $.ajax({
            url: 'php/fetch-faqs.php',
            type: 'POST',
            dataType: 'json',
            data: {
                para: 'init',
            },
            success: function(response) {
                renderFAQs(response);
                setupScrollListener(); // 在渲染完成後設置滾動監聽事件
            },
            error: function(xhr, status, error) {
                console.error('Ajax request failed: ' + status);
            }
        });
    }

    // Function to perform search
    function performSearch() {
        const keyword = document.getElementById('searchInput').value;
        $.ajax({
            url: 'php/fetch-faqs.php',
            type: 'POST',
            dataType: 'json',
            data: {
                para: 'search',
                keyword: keyword,
            },
            success: function(response) {
                renderFAQs(response);
                setupScrollListener(); // Set up scroll listener after rendering
            },
            error: function(xhr, status, error) {
                console.error('Ajax request failed: ' + status);
            }
        });
    }

    // Function to clear the input field
    function clearInput() {
        searchInput.value = '';
        initResult(); // Reload initial results
        searchInput.focus(); // Focus the input field
    }

    function renderFAQs(response) {
        const faqs = response.data;
        // 使用物件來儲存分組後的結果
        const groupedData = {};

        // 將資料按照 type 欄位進行分組
        faqs.forEach(item => {
            const { type } = item;
            if (!groupedData[type]) {
                groupedData[type] = [];
            }
            groupedData[type].push(item);
        });

        // 指定類型的順序
        const typeOrder = response.types;
        // const typeOrder = ['Choose your units', 'Application', 'Before Enter Taiwan', 'Live in Taiwan', 'Contact us'];

        var link_block = $('#ul-link');
        link_block.empty();
        // 創建對應的 <ul> 元素
        const navbarElement = document.createElement('ul');
        navbarElement.className = 'navbar-nav d-flex flex-row flex-wrap';

        typeOrder.forEach(type => {
            if (groupedData[type]) {
                const liItem = document.createElement('li');
                liItem.className = 'nav-item m-1';
                liItem.innerHTML = `<a class="nav-link btn fs-5" href="#${type.toLowerCase().replace(/\s/g, '-')}" data-scroll="true">${type}</a>`;
                navbarElement.appendChild(liItem);
            }
        });

        const topElement = document.createElement('li');
        topElement.className = 'nav-item ml-auto';
        topElement.innerHTML = `<a class="nav-link top back-to-top" href="#"><i class="fas fa-arrow-up"></i></a>`;
        navbarElement.appendChild(topElement);

        link_block.append(navbarElement);

        var faqs_block = $('#faqs');
        faqs_block.empty();

        // 按照指定順序遍歷
        typeOrder.forEach(type => {
            if (groupedData[type]) {
                // 創建對應的 <div> 元素
                const accordionElement = document.createElement('div');
                accordionElement.className = 'accordion accordion-flush my-3';
                accordionElement.id = type.toLowerCase().replace(/\s/g, '-'); // 將類型轉換為小寫並替換空格為連字符

                // 添加類型標題
                const titleElement = document.createElement('p');
                titleElement.className = 'title fs-2 fw-bolder';
                titleElement.textContent = type;
                accordionElement.appendChild(titleElement);

                groupedData[type].forEach(item => {
                    const accordionItem = document.createElement('div');
                    accordionItem.className = 'accordion-item';

                    accordionItem.innerHTML = `<h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" 
                                                        data-bs-target="#flush-collapse-${item.id}" aria-expanded="false" 
                                                        aria-controls="flush-collapse-${item.id}">
                                                        ${item.question}
                                                    </button>
                                                </h2>
                                                <div id="flush-collapse-${item.id}" class="accordion-collapse collapse" 
                                                    data-bs-parent="#${accordionElement.id}">
                                                    <div class="accordion-body">
                                                        ${item.reply}
                                                    </div>
                                                </div>`;

                    accordionElement.appendChild(accordionItem);
                });
                faqs_block.append(accordionElement);
            }
        });
    }

    function setupScrollListener() {
        document.querySelectorAll('.navbar-nav a[data-scroll="true"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                var targetId = this.getAttribute('href').substring(1);
                var targetElement = document.getElementById(targetId);
    
                if (targetElement) {
                    targetElement.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        const bodyElement = document.body;
        bodyElement.addEventListener('scroll', function() {
            var backToTopButton = document.querySelector('.back-to-top');
            
            if (bodyElement.scrollTop > 200) {
                backToTopButton.style.display = 'block';
            } else {
                backToTopButton.style.display = 'none';
            }
        });

        document.querySelector('.back-to-top').addEventListener('click', function(e) {
            e.preventDefault();
            
            bodyElement.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    }
})
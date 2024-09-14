$(document).ready(function() {
    fetchDepartments();

    $('.sidebar').on('click', '.list-group-item', function() {
        var collegeId = $(this).data('college'); 
        loadContent(collegeId); 
    });

    $('.offcanvas-body').on('click', '.list-group-item', function() {
        var collegeId = $(this).data('college'); 
        loadContent(collegeId);
        var offcanvas = bootstrap.Offcanvas.getInstance($('.offcanvas')[0]);
        if (offcanvas) {
            offcanvas.hide();
        }
    });
});

function fetchDepartments() {
    $.ajax({
        url: './php/get-college.php',
        method: 'GET',
        dataType: 'json',
        success: function(data) {
            if (Array.isArray(data)) {
                var $sidebar = $('.sidebar .list-group');
                $sidebar.empty(); 

                $.each(data, function(index, college) {
                    var $link = $('<a>')
                        .addClass('list-group-item list-group-item-action py-3')
                        .attr('id', `${college.id}-tab`)
                        .attr('data-bs-toggle', 'list')
                        .attr('href', `#college-${college.id}`)
                        .attr('role', 'tab')
                        .attr('aria-controls', `college-${college.id}`)
                        .attr('data-college', college.id)
                        .text(college.name);
                
                    if (index === 0) {
                        $link.addClass('active'); 
                        $link.attr('aria-selected', 'true');
                    }
                
                    $sidebar.append($link);
                });

                var $offcanvasList = $('.offcanvas-body .list-group');
                $offcanvasList.empty();

                var $ul = $('<ul>').addClass('navbar-nav justify-content-end');
                
                $.each(data, function(index, college) {
                    var $li = $('<li>').addClass('nav-item fs-5');
                    var $link = $('<a>')
                        .addClass('list-group-item list-group-item-action py-3')
                        .attr('id', `${college.id}-tab-sm`)
                        .attr('data-bs-toggle', 'list')
                        .attr('href', `#college-${college.id}`)
                        .attr('role', 'tab')
                        .attr('aria-controls', `college-${college.id}`)
                        .attr('data-college', college.id)
                        .text(college.name);
                
                    if (index === 0) {
                        $link.addClass('active'); 
                        $link.attr('aria-selected', 'true');
                        loadContent(college.id)
                    }
                
                    $li.append($link);
                    $ul.append($li);
                });

                $offcanvasList.append($ul);

            } else {
                console.error('Invalid data format received:', data);
            }
        },
        error: function(jqXHR, textStatus, errorThrown) {
            console.error('Error fetching departments:', textStatus, errorThrown);
        }
    });
}
function loadContent(college_id) {
    if (typeof college_id !== 'string') {
        college_id = String(college_id);
    }

    $.ajax({
        url: './php/get-content.php',
        method: 'POST',
        data: { id: college_id },
        dataType: 'json',
        success: function(data) {
            var $contentDiv = $('.content .tab-content');
            $contentDiv.empty(); 
            
            // 提取 college_name 作為標題
            var college_name = data.college_name; 
            
            // 插入標題
            $contentDiv.append(`<h3 class="my-3 fw-bolder">${college_name}</h3>`);
            
            // 插入導航欄
            var navigation = '<ul class="navbar-nav d-flex flex-row flex-wrap mb-4">';
            $.each(data.contents, function(index, item) {
                var id = item.title_name.toLowerCase().replace(/ /g, '-') + '-' + college_id.toLowerCase();
                navigation += `
                    <li class="nav-item m-1">
                        <a class="nav-link btn fs-5" href="#${item.title_id}" data-scroll="true">${item.title_name}</a>
                    </li>
                `;
            });
            navigation += `
                <li class="nav-item ml-auto">
                    <a class="nav-link top back-to-top" href="#"><i class="fas fa-arrow-up"></i></a>
                </li>
            </ul>`;
            
            $contentDiv.append(navigation);
            
            // 插入內容區塊
            $.each(data.contents, function(index, item) {
                var content = item.content; // 不進行編碼，避免問題
                $contentDiv.append(`
                    <div id="content-container-${item.title_id}">
                        <div id="${item.title_id}">
                            ${content}
                        </div>
                        <div>
                            <button class="button button-edit mb-5 mt-3" onclick="showEditor('${item.title_id}', '${encodeURIComponent(content)}')">編輯內容</button>
                        </div>
                    </div>
                    <div id="editor-container-${item.title_id}" style="display: none;">
                        <textarea id="editor-${item.title_id}"></textarea> <!-- CKEditor 會綁定到這裡 -->
                        <button class="button button-save mb-5" onclick="saveContent('${college_id}', '${item.title_id}','${encodeURIComponent(content)}')">儲存內容</button>
                    </div>
                `);
            });
            
            // 更新側邊欄的選中狀態
            $('.sidebar .list-group-item').removeClass('active');
            $('.sidebar .list-group-item').filter('[data-college="' + college_id + '"]').addClass('active');
        },
        error: function(jqXHR, textStatus, errorThrown) {
            console.error('Error fetching content:', textStatus, errorThrown);
        }
    });
}

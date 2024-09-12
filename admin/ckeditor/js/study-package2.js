
$(document).ready(function() {
    // 獲取部門列表並生成側邊欄
    fetchDepartments();

    // 監聽點擊事件以加載內容
    $('#nav-tabContent').on('click', '.list-group-item', function() {
        var departmentId = $(this).data('department');
        loadContent(departmentId);
    });
});

// 獲取部門列表
function fetchDepartments() {
    $.ajax({
        url: './php/get-department.php',
        method: 'GET',
        dataType: 'json',
        success: function(data) {
            // 確保返回的是一個部門數組
            if (Array.isArray(data)) {
                var $sidebar = $('.sidebar .list-group');
                $sidebar.empty();

                $.each(data, function(index, department) {
                    var $link = $('<a>')
                        .addClass('list-group-item list-group-item-action py-3 fs-5')
                        .attr('id', `department-tab-${department.id}`)
                        .attr('data-bs-toggle', 'list')
                        .attr('href', `#department-${department.id}`)
                        .attr('role', 'tab')
                        .attr('aria-controls', `department-${department.id}`)
                        .text(department);
                    $sidebar.append($link);
                });
                

            }
        },
        error: function(jqXHR, textStatus, errorThrown) {
            console.error('Error fetching departments:', textStatus, errorThrown);
        }
    });
}


// 根據部門ID加載內容
function loadContent(departmentId) {
    $.ajax({
        url: './php/get-content.php',
        method: 'GET',
        data: { id: departmentId },
        dataType: 'json',
        success: function(data) {
			console.log(data)
            // 確保返回的是一個對象
            if (data && data.title && data.content) {
                // 更新內容
                var $contentDiv = $('.content .tab-content');
                $contentDiv.html(`
                    <div class="tab-pane fade show active" id="${departmentId}">
                        <h1>${data.title}</h1>
                        <p>${data.content}</p>
                    </div>
                `);

                // 更新側邊欄的選中狀態
                $('.sidebar .list-group-item').removeClass('active');
                $('.sidebar .list-group-item').filter('[data-department="' + departmentId + '"]').addClass('active');
            }
        },
        error: function(jqXHR, textStatus, errorThrown) {
            console.error('Error fetching content:', textStatus, errorThrown);
        }
    });
}

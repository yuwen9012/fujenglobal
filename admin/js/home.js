window.onload = function() {
    var dataSheet = 'home_carousel';
    var url = './php/get_data.php?table=' + encodeURIComponent(dataSheet);
    if ($('#table').data('bootstrap.table')) {
        $('#table').bootstrapTable('destroy');
    }

    $.getJSON(url, function(sqldata) {
        var columns = [ 
            {
                field: 'id',
                title: '編號',
                // sortable: true,
                // visible: false,
                // filterControl: 'input'
            },
            {
                field: 'name',
                title: '名稱',
            },
            {
                field: 'image',
                title: '圖片',
            },
            {
                field: 'hidden',
                title: '隱藏',
            },
            {
                field: 'num_order',
                title: '排序',
            },
            {
                field: 'manage',
                title: '操作',
                formatter: function (value, row) {
                    var id = row.id;
                    var button = '<a data-id="' + id + '" data-bs-toggle="modal" data-bs-target="#checkModal" class="checkbtn">編輯</a><br><a data-id="' + id + '" class="deleteBtn" ">刪除</a>';

                    return button;
                }
            },
        ];

        $('#table').bootstrapTable({
            // buttonsAlign: 'right',
            columns: columns,
            // filterControl: true,
            data: sqldata,
        });
    }).fail(function() {
        console.error('Failed to load data');
    });
}

document.addEventListener('DOMContentLoaded', () => {
    // const navItems = document.querySelectorAll('.nav-item');

    // navItems.forEach(item => {
    //     const link = item.querySelector('.nav-link');

    //     if (link) {
    //         link.addEventListener('click', function(event) {
    //             event.preventDefault(); // Prevent default anchor click behavior
                
    //             // Remove 'active' class from all nav items
    //             navItems.forEach(item => item.classList.remove('active'));
                
    //             // Add 'active' class to the clicked nav item
    //             item.classList.add('active');
    //         });
    //     }
    // });


    var collapseElement = document.getElementById('studyAbroadMenu');
    var iconDown = document.querySelector('.fa-chevron-down');
    var iconUp = document.querySelector('.fa-chevron-up');

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
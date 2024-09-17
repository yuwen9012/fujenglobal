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
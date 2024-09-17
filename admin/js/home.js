window.onload = function() {
    function btncellStyle(value, row, index) {
        return {
            css: {
                width: value + '%',
            }
        };
    }

    var dataSheet = 'home_carousel';
    var url = './php/get_data.php?table=' + encodeURIComponent(dataSheet);

    $.getJSON(url, function(sqldata) {
        var columns = [ 
            {
                field: 'id',
                title: '編號',
                sortable: true,
                cellStyle: function(value, row, index) {
                    return btncellStyle(5);
                }
            },
            {
                field: 'name',
                title: '名稱',
                sortable: true,
                cellStyle: function(value, row, index) {
                    return btncellStyle(20);
                }
            },
            {
                field: 'image',
                title: '圖片',
            },
            {
                field: 'hidden',
                title: '隱藏',
                sortable: true,
                cellStyle: function(value, row, index) {
                    return btncellStyle(10);
                }
            },
            {
                field: 'num_order',
                title: '排序',
                cellStyle: function(value, row, index) {
                    return btncellStyle(10);
                }
            },
            {
                field: 'manage',
                title: '操作',
                formatter: function (value, row) {
                    var id = row.id;
                    var button = '<a data-id="' + id + '" data-bs-toggle="modal" data-bs-target="#editModal" class="editBtn">編輯</a><br><a data-id="' + id + '" class="deleteBtn" ">刪除</a>';
                    return button;
                },
                cellStyle: function(value, row, index) {
                    return btncellStyle(10);
                }
            },
        ];

        $('#table').bootstrapTable('destroy').bootstrapTable({
            buttonsAlign: 'right',
            columns: columns,
            filterControl: true,
            data: sqldata,
        });
    }).fail(function() {
        console.error('Failed to load data');
    });
}
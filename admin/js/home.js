window.onload = function() {
    function btncellStyle(value, row, index) {
        return {
            css: {
                width: value + '%',
            }
        };
    }

    function loadTableData() {
        $.getJSON(url, function(sqldata) {
            var maxNumOrder = Math.max(...sqldata.map(item => item.num_order));
            var columns = [ 
                {
                    field: 'id',
                    title: '編號',
                    sortable: true,
                    formatter: function(value, row, index) {
                        return index + 1;
                    },
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
                    formatter: function (value, row) {
                        var image = row.image;
                        var img = '<img class="img-thumbnail" src="../images/' + image + '">';
                        return img;
                    },
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
                    formatter: function (value, row) {
                        var seq = row.num_order;
                        var up = '<i class="fa-solid fa-caret-up" data-action="up" data-id="' + row.id + '"></i>';
                        var down = '<i class="fa-solid fa-caret-down" data-action="down" data-id="' + row.id + '"></i>';

                        if (seq == 1) {
                            return down;
                        }
                        else if (seq == maxNumOrder) {
                            return up;
                        }
                        else {
                            return up + down;
                        }
                    },
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

            // 事件監聽
            $('#table').off('click', '.fa-caret-up, .fa-caret-down').on('click', '.fa-caret-up, .fa-caret-down', function(event) {
                var id = $(this).data('id');
                var action = $(this).data('action');
                var currentRow = sqldata.find(item => item.id == id);
                var currentOrder = Number(currentRow.num_order);

                if (action === 'up' && currentOrder > 1) {
                    // 上移
                    updateOrder(id, currentOrder - 1);
                } else if (action === 'down' && currentOrder < maxNumOrder) {
                    // 下移
                    updateOrder(id, currentOrder + 1);
                }
            });

        }).fail(function() {
            console.error('Failed to load data');
        });
    }

    function updateOrder(id, newOrder) {
        console.log('Sending update request for ID:', id, 'New Order:', newOrder);
        $.ajax({
            url: './php/update_order.php',
            type: 'POST',
            data: { id: id, newOrder: newOrder },
            success: function(response) {
                response = JSON.parse(response);
                if (response.success) {
                    loadTableData();
                }
                else {
                    console.error('更新排序失敗:', response.message);
                }
            },
            error: function() {
                console.error('更新排序時發生錯誤');
            }
        });
    }

    var dataSheet = 'home_carousel';
    var url = './php/get_data.php?table=' + encodeURIComponent(dataSheet);
    
    loadTableData();
}
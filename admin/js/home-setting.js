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
                        var button = '<a data-id="' + id + '" class="editBtn">編輯</a><br><a data-id="' + id + '" class="deleteBtn" ">刪除</a>';
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
    var url = './php/get_sheet_data.php?table=' + encodeURIComponent(dataSheet);

    loadTableData();

    // 新增資料
    $('#add-carousel').on('click', function(event) {
        const name = document.getElementById('addName').value;
        const image = document.getElementById('addImage').files[0];
        const hidden = document.querySelector('input[name="hidden"]:checked').value;

        const form_data = new FormData();
        form_data.append('name', name);
        form_data.append('image', image);
        form_data.append('hidden', hidden);

        $.ajax({
            url: './php/addHomeCarouselImage.php',
            type: 'POST',
            contentType: false,
            processData: false,
            data: form_data,
            
            success: function(response) {
                if (response == 'success') {
                    window.location.href = 'home-setting.php';
                }
                else {
                    alert(response);
                }
            },
            error: function() {
                console.error('錯誤');
            }
        });
    });

    // 點擊編輯
    $(document).on('click', '.editBtn ', function(event) {
        event.preventDefault();
        var id = $(this).data('id');
        $('#editModal').modal('show');

        $.ajax({
            url: './php/get_row_data.php',
            type: 'POST',
            data: {
                id: id,
                dataSheet: 'home_carousel',
            },
            success: function(data) {
                var json = JSON.parse(data);

                $('#id').val(json.id);
                $('#editName').val(json.name);

                if (json.image) {
                    $('#fileLabel').text('當前圖片: ' + json.image);
                }

                if (json.hidden === 'Y') {
                    $('#editYOption').prop('checked', true);
                }
                else {
                    $('#editNOption').prop('checked', true);
                }
            },
            error: function() {
                console.error('錯誤');
            }
        })
    });

    // 儲存編輯
    $('#edit-carousel').on('click', function(event) {
        const id = document.getElementById('id').value;
        const name = document.getElementById('editName').value;
        const image = document.getElementById('editImage').files[0];
        const hidden = document.querySelector('input[name="hidden"]:checked').value;
        
        const form_data = new FormData();
        form_data.append('id', id);
        form_data.append('name', name);
        form_data.append('hidden', hidden);

        if (image !== undefined) {
            form_data.append('image', image);
        }
        
        $.ajax({
            url: './php/editHomeCarouselImage.php',
            type: 'POST',
            contentType: false,
            processData: false,
            data: form_data,
            
            success: function(response) {
                if (response == 'success') {
                    window.location.href = 'home-setting.php';
                }
                else {
                    alert(response);
                }
            },
            error: function() {
                console.error('錯誤');
            }
        });
    });

    // 點擊刪除
    $(document).on('click', '.deleteBtn', function(event) {
        event.preventDefault();
        var id = $(this).data('id');

        if (confirm('確定刪除？')) {
            $.ajax({
                url: './php/delete_row_data.php',
                type: 'POST',
                data: {
                    id: id,
                    dataSheet: 'home_carousel',
                },
                success: function(response) {
                    if (response == 'success') {
                        alert("已成功刪除！");
                        window.location.href = 'home-setting.php';
                    }
                    else {
                        alert('Failed');
                        return;
                    }
                },
                error: function() {
                    console.error('錯誤');
                }
            });
        } 
        else {
            return null;
        }
    });
}
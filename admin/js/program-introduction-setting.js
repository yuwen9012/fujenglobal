import { btncellStyle } from './function.js';

window.onload = function() {
    loadTableData('program_introduction_image');
}

document.addEventListener('DOMContentLoaded', function() {
    // 新增圖片
    $('#add-image').on('click', function(event) {
        const name = document.getElementById('addImaName').value;
        const image = document.getElementById('addImaImage').files[0];
        const hidden = document.querySelector('input[name="addImaHidden"]:checked').value;

        const form_data = new FormData();
        form_data.append('dataSheet', 'program_introduction_image');
        form_data.append('name', name);
        form_data.append('image', image);
        form_data.append('hidden', hidden);

        $.ajax({
            url: './php/add_image.php',
            type: 'POST',
            contentType: false,
            processData: false,
            data: form_data,
            
            success: function(response) {
                if (response == 'success') {
                    $('#addImageModal').modal('hide');
                    loadTableData('program_introduction_image');
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
    $(document).on('click', '.editImageBtn', function(event) {
        event.preventDefault();
        var id = $(this).data('id');
        $('#editImageModal').modal('show');

        $.ajax({
            url: './php/get_row_data.php',
            type: 'POST',
            data: {
                id: id,
                dataSheet: 'program_introduction_image',
            },
            success: function(data) {
                var json = JSON.parse(data);

                $('#iid').val(json.id);
                $('#editImaName').val(json.name);

                if (json.image) {
                    $('#fileImaLabel').text('當前圖片: ' + json.image);
                }

                if (json.hidden === 'Y') {
                    $('#editImaYOption').prop('checked', true);
                }
                else {
                    $('#editImaNOption').prop('checked', true);
                }
            },
            error: function() {
                console.error('錯誤');
            }
        })
    });

    // 儲存編輯
    $('#edit-image').on('click', function(event) {
        const id = document.getElementById('iid').value;
        const name = document.getElementById('editImaName').value;
        const image = document.getElementById('editImaImage').files[0];
        const hidden = document.querySelector('input[name="editImaHidden"]:checked').value;

        const form_data = new FormData();
        form_data.append('dataSheet', 'program_introduction_image');
        form_data.append('id', id);
        form_data.append('name', name);
        form_data.append('hidden', hidden);

        if (image !== undefined) {
            form_data.append('image', image);
        }
        
        $.ajax({
            url: './php/edit_image.php',
            type: 'POST',
            contentType: false,
            processData: false,
            data: form_data,
            
            success: function(response) {
                if (response == 'success') {
                    $('#editImageModal').modal('hide');
                    loadTableData('program_introduction_image');
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
    $(document).on('click', '.deleteImageBtn', function(event) {
        event.preventDefault();
        var id = $(this).data('id');

        if (confirm('確定刪除？')) {
            $.ajax({
                url: './php/delete_row_data.php',
                type: 'POST',
                data: {
                    id: id,
                    dataSheet: 'program_introduction_image',
                },
                success: function(response) {
                    if (response == 'success') {
                        alert("已成功刪除！");
                        loadTableData('program_introduction_image');
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
})

// 載入表格資料
function loadTableData(dataSheet) {
    var url = './php/get_sheet_data.php?table=' + encodeURIComponent(dataSheet);

    $.getJSON(url, function(sqldata) {
        var maxNumOrder = Math.max(...sqldata.map(item => item.num_order));

        var columns = [ 
            {
                field: 'id',
                title: '編號',
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
                cellStyle: function(value, row, index) {
                    return btncellStyle(20);
                }
            },
            {
                field: 'image',
                title: '圖片',
                formatter: function (value, row) {
                    var image = row.image;
                    var img = `<img class="img-thumbnail" src="../images/${image}">`;
                    return img;
                },
            },
            {
                field: 'hidden',
                title: '隱藏',
                formatter: function (value, row) {
                    var hidden = row.hidden;
                    if (hidden == 'Y') {
                        return '是';
                    }
                    else {
                        return '否';
                    }
                },
                cellStyle: function(value, row, index) {
                    return btncellStyle(5);
                }
            },
            {
                field: 'num_order',
                title: '排序',
                formatter: function (value, row) {
                    var seq = row.num_order;
                    var up = `<i class="fa-solid fa-caret-up" data-action="up" data-sheet="${dataSheet}" data-id="${row.id}"></i>`;
                    var down = `<i class="fa-solid fa-caret-down" data-action="down" data-sheet="${dataSheet}" data-id="${row.id}"></i>`;

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
                    return btncellStyle(8);
                }
            },
            {
                field: 'update_user',
                title: '更新人員',
                visible: false,
                cellStyle: function(value, row, index) {
                    return btncellStyle(10);
                }
            },
            {
                field: 'update_time',
                title: '更新時間',
                visible: false,
                cellStyle: function(value, row, index) {
                    return btncellStyle(20);
                }
            },
            {
                field: 'manage',
                title: '操作',
                formatter: function (value, row) {
                    var id = row.id;
                    var button = `<a data-id="${id}" class="editImageBtn d-block fw-semibold text-decoration-none" role="button">編輯</a>
                                  <a data-id="${id}" class="deleteImageBtn d-block text-danger fw-semibold text-decoration-none" role="button">刪除</a>`;
                    return button;
                },
                cellStyle: function(value, row, index) {
                    return btncellStyle(8);
                }
            },
        ];

        var tableID = '#imageTable';
        
        $(tableID).bootstrapTable('destroy').bootstrapTable({
            buttonsAlign: 'right',
            columns: columns,
            filterControl: true,
            data: sqldata,
        });

        // 事件監聽
        $(tableID).off('click', '.fa-caret-up, .fa-caret-down').on('click', '.fa-caret-up, .fa-caret-down', function(event) {
            var id = $(this).data('id');
            var action = $(this).data('action');
            var dataSheet = $(this).data('sheet');
            var currentRow = sqldata.find(item => item.id == id);
            var currentOrder = Number(currentRow.num_order);

            if (action === 'up' && currentOrder > 1) {
                // 上移
                updateOrder(id, currentOrder - 1, dataSheet);
            } else if (action === 'down' && currentOrder < maxNumOrder) {
                // 下移
                updateOrder(id, currentOrder + 1, dataSheet);
            }
        });

    }).fail(function() {
        console.error('Failed to load data');
    });
}

function updateOrder(id, newOrder, dataSheet) {
    $.ajax({
        url: './php/update_order.php',
        type: 'POST',
        data: {
            id: id,
            dataSheet: dataSheet,
            newOrder: newOrder,
        },
        success: function(response) {
            response = JSON.parse(response);
            if (response.success) {
                loadTableData(dataSheet);
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
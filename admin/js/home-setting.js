import { btncellStyle } from './function.js';

window.onload = function() {
    loadTableData('home_carousel');
    loadTableData('home_introduction_image');
}

document.addEventListener('DOMContentLoaded', function() {
    // 新增連結監聽事件
    document.getElementById('addCarLink').addEventListener('input', function() {
        const requiredIndicator = document.getElementById('addTargetRequired');
        const selfOption = document.getElementById('addCarSelfOption');
        const blankOption = document.getElementById('addCarBlankOption');
        
        if (this.value.trim()) {
            requiredIndicator.style.display = 'inline';
            selfOption.checked = true;
            selfOption.disabled = false;
            blankOption.disabled = false;
        }
        else {
            requiredIndicator.style.display = 'none';
            selfOption.checked = false;
            selfOption.disabled = true;
            blankOption.checked = false;
            blankOption.disabled = true;
        }
    });

    // 新增資料
    $('#add-carousel').on('click', function(event) {
        const name = document.getElementById('addCarName').value;
        const image = document.getElementById('addCarImage').files[0];
        const hidden = document.querySelector('input[name="addCarHidden"]:checked').value;
        const link = document.getElementById('addCarLink').value;

        const form_data = new FormData();
        form_data.append('dataSheet', 'home_carousel');
        form_data.append('name', name);
        form_data.append('image', image);
        form_data.append('hidden', hidden);
        if (link != '') {
            const target = document.querySelector('input[name="addCarTarget"]:checked').value;
            form_data.append('link', link);
            form_data.append('target', target);
        }

        $.ajax({
            url: './php/add_image.php',
            type: 'POST',
            contentType: false,
            processData: false,
            data: form_data,
            
            success: function(response) {
                if (response == 'success') {
                    $('#addCarouselModal').modal('hide');
                    loadTableData('home_carousel');
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

    // 編輯連結監聽事件
    document.getElementById('editCarLink').addEventListener('input', function() {
        const requiredIndicator = document.getElementById('editTargetRequired');
        const selfOption = document.getElementById('editCarSelfOption');
        const blankOption = document.getElementById('editCarBlankOption');
        
        if (this.value.trim()) {
            requiredIndicator.style.display = 'inline';
            selfOption.checked = true;
            selfOption.disabled = false;
            blankOption.disabled = false;
        }
        else {
            requiredIndicator.style.display = 'none';
            selfOption.checked = false;
            selfOption.disabled = true;
            blankOption.checked = false;
            blankOption.disabled = true;
        }
    });

    // 點擊編輯
    $(document).on('click', '.editCarBtn', function(event) {
        event.preventDefault();
        var id = $(this).data('id');
        $('#editCarouselModal').modal('show');

        $.ajax({
            url: './php/get_row_data.php',
            type: 'POST',
            data: {
                id: id,
                dataSheet: 'home_carousel',
            },
            success: function(data) {
                var json = JSON.parse(data);

                $('#cid').val(json.id);
                $('#editCarName').val(json.name);

                if (json.image) {
                    $('#fileCarLabel').text('當前圖片: ' + json.image);
                }

                if (json.link) {
                    $('#editCarBlankOption').prop('disabled', false);
                    $('#editCarSelfOption').prop('disabled', false);
                    if (json.link.trim() !== '') {
                        $('#editCarLink').val(json.link);
                        document.getElementById('editTargetRequired').style.display = 'inline';
                    }
                }

                if (json.target === 'blank') {
                    $('#editCarBlankOption').prop('checked', true);
                }
                else if (json.target === 'self') {
                    $('#editCarSelfOption').prop('checked', true);
                }

                if (json.hidden === 'Y') {
                    $('#editCarYOption').prop('checked', true);
                }
                else {
                    $('#editCarNOption').prop('checked', true);
                }
            },
            error: function() {
                console.error('錯誤');
            }
        })
    });

    // 儲存編輯
    $('#edit-carousel').on('click', function(event) {
        const id = document.getElementById('cid').value;
        const name = document.getElementById('editCarName').value;
        const image = document.getElementById('editCarImage').files[0];
        const hidden = document.querySelector('input[name="editCarHidden"]:checked').value;
        const link = document.getElementById('editCarLink').value;

        const form_data = new FormData();
        form_data.append('dataSheet', 'home_carousel');
        form_data.append('id', id);
        form_data.append('name', name);
        form_data.append('hidden', hidden);

        if (link) {
            form_data.append('link', link);
        }
        else {
            form_data.append('link', null);
        }
        
        if (link.trim() !== '') {
            const target = document.querySelector('input[name="editCarTarget"]:checked').value;
            form_data.append('target', target);
        }
        else {
            form_data.append('target', null);
        }

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
                    $('#editCarouselModal').modal('hide');
                    loadTableData('home_carousel');
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
    $(document).on('click', '.deleteCarBtn', function(event) {
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
                        loadTableData('home_carousel');
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

    // 介紹文字代入
    $.ajax({
        url: './php/get_last_data.php',
        type: 'POST',
        data: {
            dataSheet: 'home_introduction_text',
        },
        success: function(response) {
            let data = JSON.parse(response);
            document.getElementById('title').value = data.title;
            document.getElementById('writing').innerHTML = data.content;
            document.getElementById('lastUpdatedTime').innerHTML = data.update_time;
            document.getElementById('lastUpdatedBy').innerHTML = data.update_user;
        },
        error: function() {
            console.error('錯誤');
        }
    });
    
    // 點擊編輯
    $(document).on('click', '.editImaBtn ', function(event) {
        event.preventDefault();
        var id = $(this).data('id');
        $('#editImageModal').modal('show');

        $.ajax({
            url: './php/get_row_data.php',
            type: 'POST',
            data: {
                id: id,
                dataSheet: 'home_introduction_image',
            },
            success: function(data) {
                var json = JSON.parse(data);

                $('#iid').val(json.id);
                $('#editImaPosition').val(json.position);

                if (json.image) {
                    $('#fileImaLabel').text('當前圖片: ' + json.image);
                }
            },
            error: function() {
                console.error('錯誤');
            }
        })
    });

    // 儲存編輯
    $('#edit-image').on('click', function(event) {
        const image = document.getElementById('editImaImage').files[0];

        if (image === undefined) {
            alert('請選擇欲更換的圖檔');
            return;
        }
        else {
            const form_data = new FormData();
            const id = document.getElementById('iid').value;
            
            form_data.append('id', id);
            form_data.append('image', image);

            $.ajax({
                url: './php/editHomeIntroductionImage.php',
                type: 'POST',
                contentType: false,
                processData: false,
                data: form_data,
                
                success: function(response) {
                    if (response == 'success') {
                        $('#editImageModal').modal('hide');
                        loadTableData('home_introduction_image');
                    }
                    else {
                        alert(response);
                    }
                },
                error: function() {
                    console.error('錯誤');
                }
            });
        }
    });

    $('#introductionSave').on('click', function(event) {
        const title = document.getElementById('title').value;
        const writing = document.getElementById('writing').value;
        
        $.ajax({
            url: './php/action.php',
            type: 'POST',
            data: {
                'action': 'add',
                'dataSheet': 'home_introduction_text',
                'is_order': false,
                'is_status': false,
                'title': title,
                'writing': writing,
            },
            success: function(response) {
                if (response == 'success') {
                    $('#editTextModal').modal('hide');
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
})

function loadTableData(dataSheet) {
    var url = './php/get_sheet_data.php?table=' + encodeURIComponent(dataSheet);

    $.getJSON(url, function(sqldata) {
        var columns;
        var tableID;

        if (dataSheet == 'home_carousel') {
            var maxNumOrder = Math.max(...sqldata.map(item => item.num_order));

            columns = [ 
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
                    field: 'link',
                    title: '連結',
                    formatter: function (value, row) {
                        var link = row.link;
                        if (link) {
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
                        var button = `<a data-id="${id}" class="editCarBtn d-block fw-semibold text-decoration-none" role="button">編輯</a>
                                      <a data-id="${id}" class="deleteCarBtn d-block text-danger fw-semibold text-decoration-none" role="button">刪除</a>`;
                        return button;
                    },
                    cellStyle: function(value, row, index) {
                        return btncellStyle(8);
                    }
                },
            ];

            tableID = '#carouselTable';
        }
        else if (dataSheet == 'home_introduction_image') {
            columns = [ 
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
                    field: 'position',
                    title: '位置',
                    cellStyle: function(value, row, index) {
                        return btncellStyle(20);
                    }
                },
                {
                    field: 'image',
                    title: '圖片',
                    formatter: function (value, row) {
                        var image = row.image;
                        var img = `<img class="img-fixed-height" src="../images/${image}">`;
                        return img;
                    },
                },
                {
                    field: 'update_user',
                    title: '更新人員',
                    cellStyle: function(value, row, index) {
                        return btncellStyle(10);
                    }
                },
                {
                    field: 'update_time',
                    title: '更新時間',
                    cellStyle: function(value, row, index) {
                        return btncellStyle(20);
                    }
                },
                {
                    field: 'manage',
                    title: '操作',
                    formatter: function (value, row) {
                        var id = row.id;
                        var button = `<a data-id="${id}" class="editImaBtn fw-semibold text-decoration-none" role="button">編輯</a>`;
                        return button;
                    },
                    cellStyle: function(value, row, index) {
                        return btncellStyle(8);
                    }
                },
            ];

            tableID = '#introductionTable';
        }
        
        $(tableID).bootstrapTable('destroy').bootstrapTable({
            buttonsAlign: 'right',
            columns: columns,
            filterControl: true,
            data: sqldata,
        });

        if (dataSheet == 'home_carousel') {
            // 事件監聽
            $(tableID).off('click', '.fa-caret-up, .fa-caret-down').on('click', '.fa-caret-up, .fa-caret-down', function(event) {
                var id = $(this).data('id');
                var dataSheet = $(this).data('sheet');
                var action = $(this).data('action');
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
        }

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
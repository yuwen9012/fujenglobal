window.onload = function() {
    function btncellStyle(value, row, index) {
        return {
            css: {
                width: value + '%',
            }
        };
    }

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
                        field: 'manage',
                        title: '操作',
                        formatter: function (value, row) {
                            var id = row.id;
                            var button = `<a data-id="${id}" class="editBtn d-block fw-semibold text-decoration-none" role="button">編輯</a>
                                          <a data-id="${id}" class="deleteBtn d-block text-danger fw-semibold text-decoration-none" role="button">刪除</a>`;
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
                            var button = `<a data-id="${id}" class="editImageBtn fw-semibold text-decoration-none" role="button">編輯</a>`;
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

    loadTableData('home_carousel');
    loadTableData('home_introduction_image');

    // 新增連結監聽事件
    document.getElementById('addLink').addEventListener('input', function() {
        const requiredIndicator = document.getElementById('target-required');
        const selfOption = document.getElementById('addSelfOption');
        const blankOption = document.getElementById('addBlankOption');
        
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
        const name = document.getElementById('addName').value;
        const image = document.getElementById('addImage').files[0];
        const hidden = document.querySelector('input[name="addHidden"]:checked').value;
        const link = document.getElementById('addLink').value;

        const form_data = new FormData();
        form_data.append('dataSheet', 'home_carousel');
        form_data.append('name', name);
        form_data.append('image', image);
        form_data.append('hidden', hidden);
        if (link != '') {
            const target = document.querySelector('input[name="addTarget"]:checked').value;
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

    // 編輯連結監聽事件
    document.getElementById('editLink').addEventListener('input', function() {
        const requiredIndicator = document.getElementById('target-required');
        const selfOption = document.getElementById('editSelfOption');
        const blankOption = document.getElementById('editBlankOption');
        
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
    $(document).on('click', '.editBtn', function(event) {
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

                $('#cid').val(json.id);
                $('#editName').val(json.name);
                $('#editLink').val(json.link);

                if (json.image) {
                    $('#fileLabel').text('當前圖片: ' + json.image);
                }

                if (json.target === 'blank') {
                    $('#editBlankOption').prop('checked', true);
                }
                else if (json.target === 'self') {
                    $('#editSelfOption').prop('checked', true);
                }

                if (json.hidden === 'Y') {
                    $('#editYOption').prop('checked', true);
                }
                else {
                    $('#editNOption').prop('checked', true);
                }

                if (json.link) {
                    $('#editBlankOption').prop('disabled', false);
                    $('#editSelfOption').prop('disabled', false);
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
        const name = document.getElementById('editName').value;
        const image = document.getElementById('editImage').files[0];
        const hidden = document.querySelector('input[name="editHidden"]:checked').value;
        const link = document.getElementById('editLink').value;

        const form_data = new FormData();
        form_data.append('dataSheet', 'home_carousel');
        form_data.append('id', id);
        form_data.append('name', name);
        form_data.append('hidden', hidden);

        if (link != '') {
            const target = document.querySelector('input[name="editTarget"]:checked').value;
            form_data.append('link', link);
            form_data.append('target', target);
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

    // 介紹文字代入
    $.ajax({
        url: './php/get_last_data.php',
        type: 'POST',
        data: {
            dataSheet: 'home_introduction_text',
        },
        success: function(response) {
            data = JSON.parse(response);
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
    $(document).on('click', '.editImageBtn ', function(event) {
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
                $('#editPosition').val(json.position);

                if (json.image) {
                    $('#imageLabel').text('當前圖片: ' + json.image);
                }
            },
            error: function() {
                console.error('錯誤');
            }
        })
    });

    // 儲存編輯
    $('#edit-image').on('click', function(event) {
        const image = document.getElementById('editIntroductionImage').files[0];

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
        }
    });

    $('#introductionSave').on('click', function(event) {
        const title = document.getElementById('title').value;
        const writing = document.getElementById('writing').value;
        
        $.ajax({
            url: './php/update.php',
            type: 'POST',
            data: {
                'dataSheet': 'home_introduction_text',
                'title': title,
                'writing': writing,
            },
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
}
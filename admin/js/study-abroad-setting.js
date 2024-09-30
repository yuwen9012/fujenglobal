window.onload = function() {
    loadIntroduction();
    loadTableData('study_abroad_scorer');
    loadTableData('study_abroad_carousel');
}

document.addEventListener('DOMContentLoaded', function() {
    // 文字編輯儲存
    $('#introductionSave').on('click', function(event) {
        if (window.confirm('確定編輯?')) {
            const title = document.getElementById('title').value;
            const writing = document.getElementById('writing').value;
            
            $.ajax({
                url: './php/update.php',
                type: 'POST',
                data: {
                    'dataSheet': 'study_abroad_introduction_text',
                    'title': title,
                    'writing': writing,
                },
                success: function(response) {
                    if (response == 'success') {
                        alert('已成功儲存!');
                        loadIntroduction();
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

    // 新增計分器資料
    $('#add-scorer').on('click', function(event) {
        const $table = $('#scorerTable');
        const currentPage = $table.bootstrapTable('getOptions').pageNumber;
        
        const name = document.getElementById('addScoName').value;
        const image = document.getElementById('addScoImage').files[0];
        const number = document.getElementById('addScoNumber').value;
        const hidden = document.querySelector('input[name="addScoHidden"]:checked').value;

        const checkbox = document.getElementById('addIntervalCheckbox');
        let quantity;
        if (checkbox.checked) {
            const number2 = document.getElementById('addScoNumber2').value;
            quantity = String(number) + '-' + String(number2);
        }
        else {
            quantity = String(number);
        }

        const form_data = new FormData();
        form_data.append('dataSheet', 'study_abroad_scorer');
        form_data.append('name', name);
        form_data.append('image', image);
        form_data.append('quantity', quantity);
        form_data.append('hidden', hidden);

        $.ajax({
            url: './php/add_image.php',
            type: 'POST',
            contentType: false,
            processData: false,
            data: form_data,
            
            success: function(response) {
                if (response == 'success') {
                    $('#addScorerModal').modal('hide');
                    loadTableData('study_abroad_scorer');
                    $table.bootstrapTable('selectPage', currentPage);
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

    // 點擊計分器編輯
    $(document).on('click', '.editScorerBtn', function(event) {
        event.preventDefault();
        var id = $(this).data('id');
        $('#editScorerModal').modal('show');

        $.ajax({
            url: './php/get_row_data.php',
            type: 'POST',
            data: {
                id: id,
                dataSheet: 'study_abroad_scorer',
            },
            success: function(data) {
                var json = JSON.parse(data);

                $('#sid').val(json.id);
                $('#editScoName').val(json.name);

                const number1 = document.getElementById('editNumber1');
                const number2 = document.getElementById('editNumber2');

                if (json.quantity.includes('-')) {
                    const parts = json.quantity.split('-');
                
                    $('#editScoNumber').val(parseFloat(parts[0]));
                    $('#editScoNumber2').val(parseFloat(parts[1]));

                    number1.classList.remove('col-md-10');
                    number1.classList.add('col-md-5');
                    number2.classList.remove('d-none');

                    document.getElementById('editIntervalCheckbox').checked = true;
                }
                else {
                    $('#editScoNumber').val(json.quantity);

                    number1.classList.remove('col-md-5');
                    number1.classList.add('col-md-10');
                    number2.classList.add('d-none');

                    document.getElementById('editIntervalCheckbox').checked = false;
                }

                if (json.image) {
                    $('#fileScoLabel').text('當前圖片: ' + json.image);
                }

                if (json.hidden === 'Y') {
                    $('#editScoYOption').prop('checked', true);
                }
                else {
                    $('#editScoNOption').prop('checked', true);
                }
            },
            error: function() {
                console.error('錯誤');
            }
        })
    });

    // 儲存計分器編輯
    $('#edit-scorer').on('click', function(event) {
        const id = document.getElementById('sid').value;
        const name = document.getElementById('editScoName').value;
        const image = document.getElementById('editScoImage').files[0];
        const number = document.getElementById('editScoNumber').value;
        const hidden = document.querySelector('input[name="editScoHidden"]:checked').value;

        const checkbox = document.getElementById('editIntervalCheckbox');
        let quantity;
        if (checkbox.checked) {
            const number2 = document.getElementById('editScoNumber2').value;
            quantity = String(number) + '-' + String(number2);
        }
        else {
            quantity = String(number);
        }

        const form_data = new FormData();
        form_data.append('dataSheet', 'study_abroad_scorer');
        form_data.append('id', id);
        form_data.append('name', name);
        form_data.append('quantity', quantity);
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
                    $('#editScorerModal').modal('hide');
                    loadTableData('study_abroad_scorer');
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

    // 點擊計分器刪除
    $(document).on('click', '.deleteScorerBtn', function(event) {
        event.preventDefault();
        var id = $(this).data('id');

        if (confirm('確定刪除？')) {
            $.ajax({
                url: './php/delete_row_data.php',
                type: 'POST',
                data: {
                    id: id,
                    dataSheet: 'study_abroad_scorer',
                },
                success: function(response) {
                    if (response == 'success') {
                        alert("已成功刪除！");
                        loadTableData('study_abroad_scorer');
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

    document.getElementById('addIntervalCheckbox').addEventListener('change', function() {
        const number1 = document.getElementById('addNumber1');
        const number2 = document.getElementById('addNumber2');
        if (this.checked) {
            number1.classList.remove('col-md-10');
            number1.classList.add('col-md-5');
            number2.classList.remove('d-none');
        }
        else {
            number1.classList.remove('col-md-5');
            number1.classList.add('col-md-10');
            number2.classList.add('d-none');
        }
    });

    document.getElementById('editIntervalCheckbox').addEventListener('change', function() {
        const number1 = document.getElementById('editNumber1');
        const number2 = document.getElementById('editNumber2');
        if (this.checked) {
            number1.classList.remove('col-md-10');
            number1.classList.add('col-md-5');
            number2.classList.remove('d-none');
        }
        else {
            number1.classList.remove('col-md-5');
            number1.classList.add('col-md-10');
            number2.classList.add('d-none');
        }
    });

    // 新增輪播牆圖片
    $('#add-carousel').on('click', function(event) {
        const name = document.getElementById('addCarName').value;
        const image = document.getElementById('addCarImage').files[0];
        const hidden = document.querySelector('input[name="addCarHidden"]:checked').value;

        const form_data = new FormData();
        form_data.append('dataSheet', 'study_abroad_carousel');
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
                    $('#addCarouselModal').modal('hide');
                    loadTableData('study_abroad_carousel');
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

    // 點擊輪播牆編輯
    $(document).on('click', '.editCarouselBtn', function(event) {
        event.preventDefault();
        var id = $(this).data('id');
        $('#editCarouselModal').modal('show');

        $.ajax({
            url: './php/get_row_data.php',
            type: 'POST',
            data: {
                id: id,
                dataSheet: 'study_abroad_carousel',
            },
            success: function(data) {
                var json = JSON.parse(data);

                $('#cid').val(json.id);
                $('#editCarName').val(json.name);

                if (json.image) {
                    $('#fileCarLabel').text('當前圖片: ' + json.image);
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

    // 儲存輪播牆編輯
    $('#edit-carousel').on('click', function(event) {
        const id = document.getElementById('cid').value;
        const name = document.getElementById('editCarName').value;
        const image = document.getElementById('editCarImage').files[0];
        const hidden = document.querySelector('input[name="editCarHidden"]:checked').value;

        const form_data = new FormData();
        form_data.append('dataSheet', 'study_abroad_carousel');
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
                    $('#editCarouselModal').modal('hide');
                    loadTableData('study_abroad_carousel');
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

    // 點擊輪播牆刪除
    $(document).on('click', '.deleteCarouselBtn', function(event) {
        event.preventDefault();
        var id = $(this).data('id');

        if (confirm('確定刪除？')) {
            $.ajax({
                url: './php/delete_row_data.php',
                type: 'POST',
                data: {
                    id: id,
                    dataSheet: 'study_abroad_carousel',
                },
                success: function(response) {
                    if (response == 'success') {
                        alert("已成功刪除！");
                        loadTableData('study_abroad_carousel');
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

function loadIntroduction() {
    $.ajax({
        url: './php/get_last_data.php',
        type: 'POST',
        data: {
            dataSheet: 'study_abroad_introduction_text',
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
}

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

        var maxNumOrder = Math.max(...sqldata.map(item => item.num_order));

        if (dataSheet == 'study_abroad_carousel') {
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
                        var button = `<a data-id="${id}" class="editCarouselBtn d-block fw-semibold text-decoration-none" role="button">編輯</a>
                                      <a data-id="${id}" class="deleteCarouselBtn d-block text-danger fw-semibold text-decoration-none" role="button">刪除</a>`;
                        return button;
                    },
                    cellStyle: function(value, row, index) {
                        return btncellStyle(8);
                    }
                },
            ];

            tableID = '#carouselTable';
        }
        else if (dataSheet == 'study_abroad_scorer') {
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
                    field: 'quantity',
                    title: '數字',
                    cellStyle: function(value, row, index) {
                        return btncellStyle(20);
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
                        var button = `<a data-id="${id}" class="editScorerBtn d-block fw-semibold text-decoration-none" role="button">編輯</a>
                                      <a data-id="${id}" class="deleteScorerBtn d-block text-danger fw-semibold text-decoration-none" role="button">刪除</a>`;
                        return button;
                    },
                    cellStyle: function(value, row, index) {
                        return btncellStyle(8);
                    }
                },
            ];

            tableID = '#scorerTable';
        }
        
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

            // alert(currentPage);
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
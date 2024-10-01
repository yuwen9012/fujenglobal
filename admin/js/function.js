// 載入表格資料
export function loadTableData(dataSheet) {
    var url = './php/get_sheet_data.php?table=' + encodeURIComponent(dataSheet);

    $.getJSON(url, function(sqldata) {
        var maxNumOrder = Math.max(...sqldata.map(item => item.num_order));
        var columns;
        var tableID;

        if (dataSheet == 'home_carousel') {
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
        else if (dataSheet == 'study_abroad_carousel') {
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
        else if (['how2apply_timeline', 'how2apply_qualification', 'how2apply_checklist'].includes(dataSheet)) {
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
                    field: 'item',
                    title: '項目',
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
            ];
    
            if (dataSheet == 'how2apply_timeline') {
                columns.push(
                    {
                        field: 'manage',
                        title: '操作',
                        formatter: function (value, row) {
                            var id = row.id;
                            var button = `<a data-id="${id}" class="editTimelineBtn d-block fw-semibold text-decoration-none" role="button">編輯</a>
                                          <a data-id="${id}" class="deleteTimelineBtn d-block text-danger fw-semibold text-decoration-none" role="button">刪除</a>`;
                            return button;
                        },
                        cellStyle: function(value, row, index) {
                            return btncellStyle(8);
                        }
                    }
                );
    
                tableID = '#timelineTable';
            }
            else if (dataSheet == 'how2apply_qualification') {
                columns.push(
                    {
                        field: 'manage',
                        title: '操作',
                        formatter: function (value, row) {
                            var id = row.id;
                            var button = `<a data-id="${id}" class="editQualificationBtn d-block fw-semibold text-decoration-none" role="button">編輯</a>
                                          <a data-id="${id}" class="deleteQualificationBtn d-block text-danger fw-semibold text-decoration-none" role="button">刪除</a>`;
                            return button;
                        },
                        cellStyle: function(value, row, index) {
                            return btncellStyle(8);
                        }
                    }
                );
    
                tableID = '#qualificationTable';
            }
            else if (dataSheet == 'how2apply_checklist') {
                columns.push(
                    {
                        field: 'manage',
                        title: '操作',
                        formatter: function (value, row) {
                            var id = row.id;
                            var button = `<a data-id="${id}" class="editChecklistBtn d-block fw-semibold text-decoration-none" role="button">編輯</a>
                                          <a data-id="${id}" class="deleteChecklistBtn d-block text-danger fw-semibold text-decoration-none" role="button">刪除</a>`;
                            return button;
                        },
                        cellStyle: function(value, row, index) {
                            return btncellStyle(8);
                        }
                    },
                );
    
                tableID = '#checklistTable';
            }
        }
        else if (dataSheet == 'program_introduction_image') {
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
                        var button = `<a data-id="${id}" class="editImageBtn d-block fw-semibold text-decoration-none" role="button">編輯</a>
                                      <a data-id="${id}" class="deleteImageBtn d-block text-danger fw-semibold text-decoration-none" role="button">刪除</a>`;
                        return button;
                    },
                    cellStyle: function(value, row, index) {
                        return btncellStyle(8);
                    }
                },
            ];

            tableID = '#imageTable';
        }
        else if (dataSheet == 'faq_type') {
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
                    field: 'type',
                    title: '題組名稱',
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
                        var button = `<a data-id="${id}" class="editQtypeBtn d-block fw-semibold text-decoration-none" role="button">編輯</a>
                                      <a data-id="${id}" class="deleteQtypeBtn d-block text-danger fw-semibold text-decoration-none" role="button">刪除</a>`;
                        return button;
                    },
                    cellStyle: function(value, row, index) {
                        return btncellStyle(8);
                    }
                },
            ];
    
            tableID = '#qtypeTable';
        }
        else if (dataSheet == 'faq_qa') {
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
                    field: 'type',
                    title: '題組',
                    cellStyle: function(value, row, index) {
                        return btncellStyle(15);
                    }
                },
                {
                    field: 'question',
                    title: '題目',
                    cellStyle: function(value, row, index) {
                        return btncellStyle(20);
                    }
                },
                {
                    field: 'reply',
                    title: '回覆',
                    formatter: function(value, row, index) {
                        return `<div class="reply-cell">${value}</div>`;
                    },
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
                        return btncellStyle(15);
                    }
                },
                {
                    field: 'manage',
                    title: '操作',
                    formatter: function (value, row) {
                        var id = row.id;
                        var button = `<a data-id="${id}" class="editQnaBtn d-block fw-semibold text-decoration-none" role="button">編輯</a>
                                      <a data-id="${id}" class="deleteQnaBtn d-block text-danger fw-semibold text-decoration-none" role="button">刪除</a>`;
                        return button;
                    },
                    cellStyle: function(value, row, index) {
                        return btncellStyle(8);
                    }
                },
            ];
    
            tableID = '#qnaTable';
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

function btncellStyle(value, row, index) {
    return {
        css: {
            width: value + '%',
        }
    };
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

export function loadIntroduction(dataSheet) {
    $.ajax({
        url: './php/get_last_data.php',
        type: 'POST',
        data: {
            dataSheet: dataSheet,
        },
        success: function(response) {
            let data = JSON.parse(response);
            document.getElementById('title').value = data.title;
            document.getElementById('writing').innerHTML = data.content;
            document.getElementById('lastUpdatedTime').innerHTML = data.update_time;
            document.getElementById('lastUpdatedBy').innerHTML = data.update_user;
        },
        error: function(jqXHR, textStatus, errorThrown) {
            console.error('錯誤代碼: ' + jqXHR.status);
            console.error('錯誤訊息: ' + errorThrown);
            console.error('回應文本: ' + jqXHR.responseText);
            console.error('狀態: ' + textStatus);
        }
    });
}

export function processImage(file, dataSheet, formData, operatedModal){
    $.ajax({
        url: `./php/${file}`,
        type: 'POST',
        contentType: false,
        processData: false,
        data: formData,
        success: function(response) {
            if (response == 'success') {
                $(operatedModal).modal('hide');
                loadTableData(dataSheet);
            }
            else {
                alert(response);
            }
        },
        error: function(jqXHR, textStatus, errorThrown) {
            console.error('錯誤代碼: ' + jqXHR.status);
            console.error('錯誤訊息: ' + errorThrown);
            console.error('回應文本: ' + jqXHR.responseText);
            console.error('狀態: ' + textStatus);
        }
    });
}

export function processAction(action, dataSheet, is_order, is_status, inputData, operatedModal, reload) {
    $.ajax({
        url: './php/action.php',
        type: 'POST',
        data: {
            action: action,
            dataSheet: dataSheet,
            is_order: is_order,
            is_status: is_status,
            ...(inputData || {}) // 使用展開運算符將 inputData 物件的所有屬性添加進去
        },
        success: function(response) {
            if (response == 'success') {
                if (operatedModal === null) {
                    if (dataSheet == 'study_abroad_introduction_text') {
                        alert('已成功儲存!');
                    }
                    else {
                        alert('已成功刪除！');
                    }
                }
                else {
                    $(operatedModal).modal('hide');
                }
                if (reload) {
                    if (dataSheet == 'study_abroad_introduction_text') {
                        loadIntroduction(dataSheet);
                    }
                    else {
                        loadTableData(dataSheet);
                        if (dataSheet == 'faq_type') {
                            loadOptions();
                        }
                    }
                }
            }
            else {
                alert(response);
            }
        },
        error: function(jqXHR, textStatus, errorThrown) {
            console.error('錯誤代碼: ' + jqXHR.status);
            console.error('錯誤訊息: ' + errorThrown);
            console.error('回應文本: ' + jqXHR.responseText);
            console.error('狀態: ' + textStatus);
        }
    });
}

export function deleteTableEvent(dataSheet, clicked) {
    $(document).on('click', clicked, function(event) {
        event.preventDefault();
        var id = $(this).data('id');

        if (confirm('確定刪除？')) {
            $.ajax({
                url: './php/delete_row_data.php',
                type: 'POST',
                data: {
                    id: id,
                    dataSheet: dataSheet,
                },
                success: function(response) {
                    if (response == 'success') {
                        alert("已成功刪除！");
                        loadTableData(dataSheet);
                        if (dataSheet == 'faq_type') {
                            loadOptions();
                        }
                    }
                    else {
                        alert('Failed');
                        return;
                    }
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.error('錯誤代碼: ' + jqXHR.status);
                    console.error('錯誤訊息: ' + errorThrown);
                    console.error('回應文本: ' + jqXHR.responseText);
                    console.error('狀態: ' + textStatus);
                }
            });
        } 
        else {
            return;
        }
    });
}

// 添加題組選項
export function loadOptions() {
    $.ajax({
        url: './php/get_options.php',
        type: 'POST',
        data: {
            dataSheet: 'faq_type',
        },
        success: function(response) {
            var data = JSON.parse(response);
            var $addSelect = $('#addQnaType');
            $addSelect.empty();

            var $editSelect = $('#editQnaType');
            $editSelect.empty();
            
            $.each(data, function(index, item) {
                $addSelect.append($('<option>', {
                    value: item.id,
                    text: item.type,
                }));
                $editSelect.append($('<option>', {
                    value: item.id,
                    text: item.type,
                }));
            });
        },
        error: function(jqXHR, textStatus, errorThrown) {
            console.error('Error fetching options:', textStatus, errorThrown);
        }
    });
}
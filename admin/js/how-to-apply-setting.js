import { btncellStyle } from './function.js';
import { updateOrder } from './function.js';
import { deleteTableEvent } from './function.js';

window.onload = function() {
    loadTableData('how2apply_timeline');
    loadTableData('how2apply_qualification');
    loadTableData('how2apply_checklist');
}

document.addEventListener('DOMContentLoaded', function() {
    // 點擊申請資格編輯
    $(document).on('click', '.editQualificationBtn', function(event) {
        event.preventDefault();
        var id = $(this).data('id');
        $('#editQualificationModal').modal('show');

        $.ajax({
            url: './php/get_row_data.php',
            type: 'POST',
            data: {
                id: id,
                dataSheet: 'how2apply_qualification',
            },
            success: function(data) {
                var json = JSON.parse(data);

                $('#qid').val(json.id);
                document.getElementById('editQuaItem').value = json.item;

                if (json.hidden === 'Y') {
                    $('#editQuaYOption').prop('checked', true);
                }
                else {
                    $('#editQuaNOption').prop('checked', true);
                }
            },
            error: function() {
                console.error('錯誤');
            }
        })
    });

    // 點擊文件清單編輯
    $(document).on('click', '.editChecklistBtn', function(event) {
        event.preventDefault();

        var id = $(this).data('id');
        $('#editChecklistModal').modal('show');

        $.ajax({
            url: './php/get_row_data.php',
            type: 'POST',
            data: {
                id: id,
                dataSheet: 'how2apply_checklist',
            },
            success: function(data) {
                var json = JSON.parse(data);

                $('#cid').val(json.id);
                document.getElementById('editCheItem').value = json.item;

                if (json.hidden === 'Y') {
                    $('#editCheYOption').prop('checked', true);
                }
                else {
                    $('#editCheNOption').prop('checked', true);
                }
            },
            error: function() {
                console.error('錯誤');
            }
        })
    });

    // 新增申請資格
    modifyTableEvent('add', null, '#add-qualification', '#addQualificationModal', 'addQuaItem', 'addQuaHidden');

    // 儲存申請資格編輯
    modifyTableEvent('edit', 'qid', '#edit-qualification', '#editQualificationModal', 'editQuaItem', 'editQuaHidden');

    // 點擊申請資格刪除
    deleteTableEvent('how2apply_qualification', '.deleteQualificationBtn');

    // 新增文件清單
    modifyTableEvent('add', null, '#add-checklist', '#addChecklistModal', 'addCheItem', 'addCheHidden');

    // 儲存文件清單編輯
    modifyTableEvent('edit', 'cid', '#edit-checklist', '#editChecklistModal', 'editCheItem', 'editCheHidden');

    // 點擊文件清單刪除
    deleteTableEvent('how2apply_checklist', '.deleteChecklistBtn');
})

// 載入表格資料
export function loadTableData(dataSheet) {
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

        var tableID;

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

// 修改表格內容監聽事件
function modifyTableEvent(action, idId = null, clicked, operatedModal, itemId, hiddenName) {
    $(clicked).on('click', function(event) {
        event.preventDefault();
        let id;
        if (action == 'edit' & idId != null) {
            id = document.getElementById(idId).value;
        }
        const dataSheet = $(this).data('sheet');
        const item = document.getElementById(itemId).value;
        const hidden = document.querySelector(`input[name="${hiddenName}"]:checked`).value;

        $.ajax({
            url: './php/change_item_data.php',
            type: 'POST',
            data: (function() {
                let data = {
                    'dataSheet': dataSheet,
                    'item': item,
                    'hidden': hidden,
                    'type': action,
                };
                
                if (idId != null) {
                    data.id = id;
                }
                
                return data;
            })(),
            success: function(response) {
                if (response == 'success') {
                    $(operatedModal).modal('hide');
                    loadTableData(dataSheet);
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
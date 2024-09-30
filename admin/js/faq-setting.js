import { btncellStyle } from './function.js';

window.onload = function() {
    loadTableData('faq_type');
    loadTableData('faq_qa');
}

$(document).ready(function() {
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
});

document.addEventListener('DOMContentLoaded', function() {
    // 新增題組資料
    $('#add-qtype').on('click', function(event) {
        const qtype = document.getElementById('addQtyType').value;

        $.ajax({
            url: './php/action.php',
            type: 'POST',
            data: {
                action: 'add',
                dataSheet: 'faq_type',
                is_order: true,
                is_status: true,
                type: qtype,
            },
            success: function(response) {
                if (response == 'success') {
                    $('#addQtypeModal').modal('hide');
                    loadTableData('faq_type');
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

    // 點擊題組編輯
    $(document).on('click', '.editQtypeBtn ', function(event) {
        event.preventDefault();
        var id = $(this).data('id');
        $('#editQtypeModal').modal('show');

        $.ajax({
            url: './php/get_row_data.php',
            type: 'POST',
            data: {
                id: id,
                dataSheet: 'faq_type',
            },
            success: function(data) {
                var json = JSON.parse(data);

                $('#qid').val(json.id);
                $('#editQtyType').val(json.type);
            },
            error: function() {
                console.error('錯誤');
            }
        })
    });

    // 儲存題組編輯
    $('#edit-qtype').on('click', function(event) {
        const id = document.getElementById('qid').value;
        const qtype = document.getElementById('editQtyType').value;

        $.ajax({
            url: './php/action.php',
            type: 'POST',
            data: {
                action: 'edit',
                dataSheet: 'faq_type',
                id: id,
                is_order: false,
                is_status: false,
                type: qtype,
            },
            success: function(response) {
                if (response == 'success') {
                    $('#editQtypeModal').modal('hide');
                    loadTableData('faq_type');
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

    // 點擊題組刪除
    $(document).on('click', '.deleteQtypeBtn', function(event) {
        event.preventDefault();
        var id = $(this).data('id');

        if (confirm('確定刪除？')) {
            $.ajax({
                url: './php/delete_row_data.php',
                type: 'POST',
                data: {
                    id: id,
                    dataSheet: 'faq_type',
                },
                success: function(response) {
                    if (response == 'success') {
                        alert('已成功刪除！');
                        loadTableData('faq_type');
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

    // 新增題目資料
    $('#add-qna').on('click', function(event) {
        const qtype = document.getElementById('addQnaType').value;
        const question = document.getElementById('addQnaQuestion').value;
        const reply = document.getElementById('addQnaReply').value;

        $.ajax({
            url: './php/action.php',
            type: 'POST',
            data: {
                action: 'add',
                dataSheet: 'faq_qa',
                is_order: false,
                is_status: true,
                type: qtype,
                question: question,
                reply: reply,
            },
            success: function(response) {
                if (response == 'success') {
                    $('#addQnaModal').modal('hide');
                    loadTableData('faq_qa');
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

    // 點擊題目編輯
    $(document).on('click', '.editQnaBtn ', function(event) {
        event.preventDefault();
        var id = $(this).data('id');
        $('#editQnaModal').modal('show');

        $.ajax({
            url: './php/get_row_data.php',
            type: 'POST',
            data: {
                id: id,
                dataSheet: 'faq_qa',
            },
            success: function(data) {
                var json = JSON.parse(data);

                $('#aid').val(json.id);
                $('#editQnaType').val(json.tid);
                $('#editQnaQuestion').text(json.question);
                $('#editQnaReply').html(json.reply);
            },
            error: function() {
                console.error('錯誤');
            }
        })
    });

    // 儲存題目編輯
    $('#edit-qna').on('click', function(event) {
        const id = document.getElementById('aid').value;
        const qtype = document.getElementById('editQnaType').value;
        const question = document.getElementById('editQnaQuestion').value;
        const reply = document.getElementById('editQnaReply').value;

        $.ajax({
            url: './php/action.php',
            type: 'POST',
            data: {
                action: 'edit',
                dataSheet: 'faq_qa',
                id: id,
                is_order: false,
                is_status: false,
                type: qtype,
                question: question,
                reply: reply,
            },
            success: function(response) {
                if (response == 'success') {
                    $('#editQnaModal').modal('hide');
                    loadTableData('faq_qa');
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

    // 點擊題目刪除
    $(document).on('click', '.deleteQnaBtn', function(event) {
        event.preventDefault();
        var id = $(this).data('id');

        if (confirm('確定刪除？')) {
            $.ajax({
                url: './php/action.php',
                type: 'POST',
                data: {
                    action: 'delete',
                    dataSheet: 'faq_qa',
                    id: id,
                    is_order: false,
                    is_status: false,
                },
                success: function(response) {
                    if (response == 'success') {
                        alert('已成功刪除！');
                        loadTableData('faq_qa');
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

function loadTableData(dataSheet) {
    var url = './php/get_sheet_data.php?table=' + encodeURIComponent(dataSheet);

    $.getJSON(url, function(sqldata) {
        var maxNumOrder = Math.max(...sqldata.map(item => item.num_order));

        var columns;
        var tableID;

        if (dataSheet == 'faq_type') {
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

        if (dataSheet == 'faq_type') {
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
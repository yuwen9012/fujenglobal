window.onload = function() {
    loadIntroduction();
    loadTableData('study_abroad_scorer');
    loadTableData('study_abroad_carousel');

    $('#introductionSave').on('click', function(event) {
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
                    window.location.href = 'study-abroad-setting.php';
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
    $(document).on('click', '.editScorerBtn ', function(event) {
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

                $('#cid').val(json.id);
                $('#editName').val(json.name);
                $('#editNumber').val(json.quantity);

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
}

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
                        var img = '<img class="img-thumbnail" src="../images/' + image + '">';
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
                        return btncellStyle(8);
                    }
                },
                {
                    field: 'manage',
                    title: '操作',
                    formatter: function (value, row) {
                        var id = row.id;
                        var button = `<a data-id="` + id + `" class="editBtn fw-semibold text-decoration-none" role="button">編輯</a>
                                    <br><a data-id="` + id + `" class="deleteBtn text-danger fw-semibold text-decoration-none" role="button">刪除</a>`;
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
                        var img = '<img class="img-thumbnail" src="../images/' + image + '">';
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
                        return btncellStyle(8);
                    }
                },
                {
                    field: 'manage',
                    title: '操作',
                    formatter: function (value, row) {
                        var id = row.id;
                        var button = `<a data-id="` + id + `" class="editScorerBtn fw-semibold text-decoration-none" role="button">編輯</a>
                                    <br><a data-id="` + id + `" class="deleteScorerBtn text-danger fw-semibold text-decoration-none" role="button">刪除</a>`;
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

        // if (dataSheet == 'home_carousel') {
        //     // 事件監聽
        //     $(tableID).off('click', '.fa-caret-up, .fa-caret-down').on('click', '.fa-caret-up, .fa-caret-down', function(event) {
        //         var id = $(this).data('id');
        //         var action = $(this).data('action');
        //         var currentRow = sqldata.find(item => item.id == id);
        //         var currentOrder = Number(currentRow.num_order);

        //         if (action === 'up' && currentOrder > 1) {
        //             // 上移
        //             updateOrder(id, currentOrder - 1);
        //         } else if (action === 'down' && currentOrder < maxNumOrder) {
        //             // 下移
        //             updateOrder(id, currentOrder + 1);
        //         }
        //     });
        // }

    }).fail(function() {
        console.error('Failed to load data');
    });
}
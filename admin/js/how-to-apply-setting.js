import { loadTableData, deleteTableEvent } from './function.js';

window.onload = function() {
    loadTableData('how2apply_timeline');
    loadTableData('how2apply_qualification');
    loadTableData('how2apply_checklist');
}

document.addEventListener('DOMContentLoaded', function() {
    // 新增申請資格
    modifyTableEvent('add', null, '#add-qualification', '#addQualificationModal', 'addQuaItem', 'addQuaHidden');

    // 點擊申請資格編輯
    clickedEditEvent('how2apply_qualification', '.editQualificationBtn', '#editQualificationModal', '#qid', 'editQuaItem', '#editQuaYOption', '#editQuaNOption');
    // 儲存申請資格編輯
    modifyTableEvent('edit', 'qid', '#edit-qualification', '#editQualificationModal', 'editQuaItem', 'editQuaHidden');

    // 點擊申請資格刪除
    deleteTableEvent('how2apply_qualification', '.deleteQualificationBtn');

    // 新增文件清單
    modifyTableEvent('add', null, '#add-checklist', '#addChecklistModal', 'addCheItem', 'addCheHidden');

    // 點擊文件清單編輯
    clickedEditEvent('how2apply_checklist', '.editChecklistBtn', '#editChecklistModal', '#cid', 'editCheItem', '#editCheYOption', '#editCheNOption');
    // 儲存文件清單編輯
    modifyTableEvent('edit', 'cid', '#edit-checklist', '#editChecklistModal', 'editCheItem', 'editCheHidden');

    // 點擊文件清單刪除
    deleteTableEvent('how2apply_checklist', '.deleteChecklistBtn');
})

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
            error: function(jqXHR, textStatus, errorThrown) {
                console.error('錯誤代碼: ' + jqXHR.status);
                console.error('錯誤訊息: ' + errorThrown);
                console.error('回應文本: ' + jqXHR.responseText);
                console.error('狀態: ' + textStatus);
            }
        });
    });
}

// 點擊編輯監聽事件
function clickedEditEvent(dataSheet, clicked, operatedModal, idId, itemId, yoptionId, noptionId) {
    $(document).on('click', clicked, function(event) {
        event.preventDefault();
        var id = $(this).data('id');
        $(operatedModal).modal('show');
    
        $.ajax({
            url: './php/get_row_data.php',
            type: 'POST',
            data: {
                id: id,
                dataSheet: dataSheet,
            },
            success: function(data) {
                var json = JSON.parse(data);
    
                $(idId).val(json.id);
                document.getElementById(itemId).value = json.item;
    
                if (json.hidden === 'Y') {
                    $(yoptionId).prop('checked', true);
                }
                else {
                    $(noptionId).prop('checked', true);
                }
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.error('錯誤代碼: ' + jqXHR.status);
                console.error('錯誤訊息: ' + errorThrown);
                console.error('回應文本: ' + jqXHR.responseText);
                console.error('狀態: ' + textStatus);
            }
        })
    });
}
import { loadTableData, processAction, deleteTableEvent, loadOptions } from './function.js';

window.onload = function() {
    loadTableData('faq_type');
    loadTableData('faq_qa');
    loadOptions();
}

document.addEventListener('DOMContentLoaded', function() {
    // 新增題組資料
    $('#add-qtype').on('click', function(event) {
        const qtype = document.getElementById('addQtyType').value;

        const data = {
            type: qtype,
        };

        processAction('add', 'faq_type', true, true, data, '#addQtypeModal', true);
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
            error: function(jqXHR, textStatus, errorThrown) {
                console.error('錯誤代碼: ' + jqXHR.status);
                console.error('錯誤訊息: ' + errorThrown);
                console.error('回應文本: ' + jqXHR.responseText);
                console.error('狀態: ' + textStatus);
            }
        })
    });

    // 儲存題組編輯
    $('#edit-qtype').on('click', function(event) {
        const id = document.getElementById('qid').value;
        const qtype = document.getElementById('editQtyType').value;

        const data = {
            id: id,
            type: qtype,
        };

        processAction('edit', 'faq_type', false, false, data, '#editQtypeModal', true);
    });

    // 點擊題組刪除
    deleteTableEvent('faq_type', '.deleteQtypeBtn');

    // 新增題目資料
    $('#add-qna').on('click', function(event) {
        const qtype = document.getElementById('addQnaType').value;
        const question = document.getElementById('addQnaQuestion').value;
        const reply = document.getElementById('addQnaReply').value;

        const data = {
            type: qtype,
            question: question,
            reply: reply,
        };

        processAction('add', 'faq_qa', false, true, data, '#addQnaModal', true);
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
            error: function(jqXHR, textStatus, errorThrown) {
                console.error('錯誤代碼: ' + jqXHR.status);
                console.error('錯誤訊息: ' + errorThrown);
                console.error('回應文本: ' + jqXHR.responseText);
                console.error('狀態: ' + textStatus);
            }
        })
    });

    // 儲存題目編輯
    $('#edit-qna').on('click', function(event) {
        const id = document.getElementById('aid').value;
        const qtype = document.getElementById('editQnaType').value;
        const question = document.getElementById('editQnaQuestion').value;
        const reply = document.getElementById('editQnaReply').value;

        const data = {
            id: id,
            type: qtype,
            question: question,
            reply: reply,
        };

        processAction('edit', 'faq_qa', false, false, data, '#editQnaModal', true);
    });

    // 點擊題目刪除
    $(document).on('click', '.deleteQnaBtn', function(event) {
        event.preventDefault();
        var id = $(this).data('id');

        if (confirm('確定刪除？')) {
            const data = {
                id: id,
            };
            processAction('delete', 'faq_qa', false, false, data, null, true);
        } 
        else {
            return null;
        }
    });
})
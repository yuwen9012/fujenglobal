import { loadTableData, loadIntroduction, processImage, processAction, deleteTableEvent } from './function.js';

window.onload = function() {
    loadTableData('study_package_subtitle');
    loadTableData('study_package_college');
}

document.addEventListener('DOMContentLoaded', function() {
    // 新增標題資料
    $('#add-subtitle').on('click', function(event) {
        const name = document.getElementById('addSubName').value;

        const data = {
            name: name,
        };

        processAction('add', 'study_package_subtitle', false, true, data, '#addSubtitleModal', true);
    });

    // 點擊標題編輯
    $(document).on('click', '.editSubtitleBtn ', function(event) {
        event.preventDefault();
        var id = $(this).data('id');
        $('#editSubtitleModal').modal('show');

        $.ajax({
            url: './php/get_row_data.php',
            type: 'POST',
            data: {
                id: id,
                dataSheet: 'study_package_subtitle',
            },
            success: function(data) {
                var json = JSON.parse(data);

                $('#sid').val(json.id);
                $('#editSubName').val(json.name);
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.error('錯誤代碼: ' + jqXHR.status);
                console.error('錯誤訊息: ' + errorThrown);
                console.error('回應文本: ' + jqXHR.responseText);
                console.error('狀態: ' + textStatus);
            }
        })
    });

    // 儲存標題編輯
    $('#edit-subtitle').on('click', function(event) {
        const id = document.getElementById('sid').value;
        const name = document.getElementById('editSubName').value;

        const data = {
            id: id, 
            name: name,
        };

        processAction('edit', 'study_package_subtitle', false, false, data, '#editSubtitleModal', true);
    });

    // 點擊標題刪除
    $(document).on('click', '.deleteSubtitleBtn', function(event) {
        event.preventDefault();
        var id = $(this).data('id');

        if (confirm('確定刪除？')) {
            const data = {
                id: id,
            };
            processAction('delete', 'study_package_subtitle', false, false, data, null, true);
        } 
        else {
            return null;
        }
    });

    // 新增學院資料
    $('#add-college').on('click', function(event) {
        const name_en = document.getElementById('addColEnname').value;
        const name_ch = document.getElementById('addColChname').value;
        const hidden = document.querySelector(`input[name="addColHidden"]:checked`).value;

        const data = {
            name_en: name_en,
            name_ch: name_ch,
            hidden: hidden,
        };

        processAction('add', 'study_package_college', true, true, data, '#addCollegeModal', true);
    });

    // 點擊學院編輯
    $(document).on('click', '.editCollegeBtn ', function(event) {
        event.preventDefault();
        var id = $(this).data('id');
        $('#editCollegeModal').modal('show');

        $.ajax({
            url: './php/get_row_data.php',
            type: 'POST',
            data: {
                id: id,
                dataSheet: 'study_package_college',
            },
            success: function(data) {
                var json = JSON.parse(data);

                $('#cid').val(json.id);
                $('#editColEnname').val(json.name_en);
                $('#editColChname').val(json.name_ch);

                if (json.hidden === 'Y') {
                    $('#editColYOption').prop('checked', true);
                }
                else {
                    $('#editColNOption').prop('checked', true);
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

    // 儲存學院編輯
    $('#edit-college').on('click', function(event) {
        const id = document.getElementById('cid').value;
        const name_en = document.getElementById('editColEnname').value;
        const name_ch = document.getElementById('editColChname').value;
        const hidden = document.querySelector(`input[name="editColHidden"]:checked`).value;

        const data = {
            id: id, 
            name_en: name_en,
            name_ch: name_ch,
            hidden: hidden,
        };

        processAction('edit', 'study_package_college', false, false, data, '#editCollegeModal', true);
    });

    // 點擊學院刪除
    $(document).on('click', '.deleteCollegeBtn', function(event) {
        event.preventDefault();
        var id = $(this).data('id');

        if (confirm('確定刪除？')) {
            const data = {
                id: id,
            };
            processAction('delete', 'study_package_college', false, false, data, null, true);
        } 
        else {
            return null;
        }
    });
})
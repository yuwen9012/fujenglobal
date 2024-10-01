import { loadTableData, processImage, deleteTableEvent } from './function.js';

window.onload = function() {
    loadTableData('program_introduction_image');
}

document.addEventListener('DOMContentLoaded', function() {
    // 新增圖片
    $('#add-image').on('click', function(event) {
        const name = document.getElementById('addImaName').value;
        const image = document.getElementById('addImaImage').files[0];
        const hidden = document.querySelector('input[name="addImaHidden"]:checked').value;
        const dataSheet = 'program_introduction_image';

        const form_data = new FormData();
        form_data.append('dataSheet', dataSheet);
        form_data.append('name', name);
        form_data.append('image', image);
        form_data.append('hidden', hidden);

        processImage('add_image.php', dataSheet, form_data, '#addImageModal');
    });

    // 點擊編輯
    $(document).on('click', '.editImageBtn', function(event) {
        event.preventDefault();
        var id = $(this).data('id');
        $('#editImageModal').modal('show');

        $.ajax({
            url: './php/get_row_data.php',
            type: 'POST',
            data: {
                id: id,
                dataSheet: 'program_introduction_image',
            },
            success: function(data) {
                var json = JSON.parse(data);

                $('#iid').val(json.id);
                $('#editImaName').val(json.name);

                if (json.image) {
                    $('#fileImaLabel').text('當前圖片: ' + json.image);
                }

                if (json.hidden === 'Y') {
                    $('#editImaYOption').prop('checked', true);
                }
                else {
                    $('#editImaNOption').prop('checked', true);
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

    // 儲存編輯
    $('#edit-image').on('click', function(event) {
        const id = document.getElementById('iid').value;
        const name = document.getElementById('editImaName').value;
        const image = document.getElementById('editImaImage').files[0];
        const hidden = document.querySelector('input[name="editImaHidden"]:checked').value;
        const dataSheet = 'program_introduction_image';

        const form_data = new FormData();
        form_data.append('dataSheet', dataSheet);
        form_data.append('id', id);
        form_data.append('name', name);
        form_data.append('hidden', hidden);

        if (image !== undefined) {
            form_data.append('image', image);
        }
        
        processImage('edit_image.php', dataSheet, form_data, '#editImageModal');
    });

    // 點擊刪除
    deleteTableEvent('program_introduction_image', '.deleteImageBtn');
})
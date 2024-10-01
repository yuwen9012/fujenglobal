import { loadTableData, loadIntroduction, processImage, processAction, deleteTableEvent } from './function.js';

window.onload = function() {
    loadTableData('home_carousel');
    loadIntroduction('home_introduction_text');
    loadTableData('home_introduction_image');
}

document.addEventListener('DOMContentLoaded', function() {
    // 新增連結監聽事件
    document.getElementById('addCarLink').addEventListener('input', function() {
        const requiredIndicator = document.getElementById('addTargetRequired');
        const selfOption = document.getElementById('addCarSelfOption');
        const blankOption = document.getElementById('addCarBlankOption');
        
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

    // 編輯連結監聽事件
    document.getElementById('editCarLink').addEventListener('input', function() {
        const requiredIndicator = document.getElementById('editTargetRequired');
        const selfOption = document.getElementById('editCarSelfOption');
        const blankOption = document.getElementById('editCarBlankOption');
        
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

    // 新增輪播牆資料
    $('#add-carousel').on('click', function(event) {
        const name = document.getElementById('addCarName').value;
        const image = document.getElementById('addCarImage').files[0];
        const hidden = document.querySelector('input[name="addCarHidden"]:checked').value;
        const link = document.getElementById('addCarLink').value;
        const dataSheet = 'home_carousel';

        const form_data = new FormData();
        form_data.append('dataSheet', dataSheet);
        form_data.append('name', name);
        form_data.append('image', image);
        form_data.append('hidden', hidden);
        if (link != '') {
            const target = document.querySelector('input[name="addCarTarget"]:checked').value;
            form_data.append('link', link);
            form_data.append('target', target);
        }

        processImage('add_image.php', dataSheet, form_data, '#addCarouselModal');
    });

    // 點擊輪播牆編輯
    $(document).on('click', '.editCarBtn', function(event) {
        event.preventDefault();
        var id = $(this).data('id');
        $('#editCarouselModal').modal('show');

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
                $('#editCarName').val(json.name);

                if (json.image) {
                    $('#fileCarLabel').text('當前圖片: ' + json.image);
                }

                if (json.link) {
                    $('#editCarBlankOption').prop('disabled', false);
                    $('#editCarSelfOption').prop('disabled', false);
                    if (json.link.trim() !== '') {
                        $('#editCarLink').val(json.link);
                        document.getElementById('editTargetRequired').style.display = 'inline';
                    }
                }

                if (json.target === 'blank') {
                    $('#editCarBlankOption').prop('checked', true);
                }
                else if (json.target === 'self') {
                    $('#editCarSelfOption').prop('checked', true);
                }

                if (json.hidden === 'Y') {
                    $('#editCarYOption').prop('checked', true);
                }
                else {
                    $('#editCarNOption').prop('checked', true);
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

    // 儲存輪播牆編輯
    $('#edit-carousel').on('click', function(event) {
        const id = document.getElementById('cid').value;
        const name = document.getElementById('editCarName').value;
        const image = document.getElementById('editCarImage').files[0];
        const hidden = document.querySelector('input[name="editCarHidden"]:checked').value;
        const link = document.getElementById('editCarLink').value;
        const dataSheet = 'home_carousel';

        const form_data = new FormData();
        form_data.append('dataSheet', dataSheet);
        form_data.append('id', id);
        form_data.append('name', name);
        form_data.append('hidden', hidden);

        if (link) {
            form_data.append('link', link);
        }
        else {
            form_data.append('link', null);
        }
        
        if (link.trim() !== '') {
            const target = document.querySelector('input[name="editCarTarget"]:checked').value;
            form_data.append('target', target);
        }
        else {
            form_data.append('target', null);
        }

        if (image !== undefined) {
            form_data.append('image', image);
        }
        
        processImage('edit_image.php', dataSheet, form_data, '#editCarouselModal');
    });

    // 點擊輪播牆刪除
    deleteTableEvent('home_carousel', '.deleteCarBtn');
    
    // 點擊圖檔編輯
    $(document).on('click', '.editImaBtn ', function(event) {
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
                $('#editImaPosition').val(json.position);

                if (json.image) {
                    $('#fileImaLabel').text('當前圖片: ' + json.image);
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

    // 儲存圖檔編輯
    $('#edit-image').on('click', function(event) {
        const image = document.getElementById('editImaImage').files[0];

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
                        $('#editImageModal').modal('hide');
                        loadTableData('home_introduction_image');
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
    });

    $('#introductionSave').on('click', function(event) {
        const title = document.getElementById('title').value;
        const writing = document.getElementById('writing').value;
        
        const data = {
            title: title,
            writing: writing,
        };

        processAction('add', 'home_introduction_text', false, false, data, '#editTextModal', false);
    });
})
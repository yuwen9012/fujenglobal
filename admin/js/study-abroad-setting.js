import { loadTableData, loadIntroduction, processImage, processAction, deleteTableEvent } from './function.js';

window.onload = function() {
    loadIntroduction('study_abroad_introduction_text');
    loadTableData('study_abroad_scorer');
    loadTableData('study_abroad_carousel');
}

document.addEventListener('DOMContentLoaded', function() {
    // 分數區間監聽事件
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

    // 文字編輯儲存
    $('#introductionSave').on('click', function(event) {
        if (window.confirm('確定編輯?')) {
            const title = document.getElementById('title').value;
            const writing = document.getElementById('writing').value;
            
            const data = {
                title: title,
                writing: writing,
            };
    
            processAction('add', 'study_abroad_introduction_text', false, false, data, null, true);
        }
    });

    // 新增計分器資料
    $('#add-scorer').on('click', function(event) {
        // const $table = $('#scorerTable');
        // const currentPage = $table.bootstrapTable('getOptions').pageNumber;
        
        const name = document.getElementById('addScoName').value;
        const image = document.getElementById('addScoImage').files[0];
        const number = document.getElementById('addScoNumber').value;
        const hidden = document.querySelector('input[name="addScoHidden"]:checked').value;
        const dataSheet = 'study_abroad_scorer';

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
        form_data.append('dataSheet', dataSheet);
        form_data.append('name', name);
        form_data.append('image', image);
        form_data.append('quantity', quantity);
        form_data.append('hidden', hidden);

        processImage('add_image.php', dataSheet, form_data, '#addScorerModal');
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
            error: function(jqXHR, textStatus, errorThrown) {
                console.error('錯誤代碼: ' + jqXHR.status);
                console.error('錯誤訊息: ' + errorThrown);
                console.error('回應文本: ' + jqXHR.responseText);
                console.error('狀態: ' + textStatus);
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
        const dataSheet = 'study_abroad_scorer';
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
        form_data.append('dataSheet', dataSheet);
        form_data.append('id', id);
        form_data.append('name', name);
        form_data.append('quantity', quantity);
        form_data.append('hidden', hidden);

        if (image !== undefined) {
            form_data.append('image', image);
        }
        
        processImage('edit_image.php', dataSheet, form_data, '#editScorerModal');
    });

    // 點擊計分器刪除
    deleteTableEvent('study_abroad_scorer', '.deleteScorerBtn');

    // 新增輪播牆圖片
    $('#add-carousel').on('click', function(event) {
        const name = document.getElementById('addCarName').value;
        const image = document.getElementById('addCarImage').files[0];
        const hidden = document.querySelector('input[name="addCarHidden"]:checked').value;
        const dataSheet = 'study_abroad_carousel';

        const form_data = new FormData();
        form_data.append('dataSheet', dataSheet);
        form_data.append('name', name);
        form_data.append('image', image);
        form_data.append('hidden', hidden);

        processImage('add_image.php', dataSheet, form_data, '#addCarouselModal');
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
        const dataSheet = 'study_abroad_carousel';

        const form_data = new FormData();
        form_data.append('dataSheet', dataSheet);
        form_data.append('id', id);
        form_data.append('name', name);
        form_data.append('hidden', hidden);

        if (image !== undefined) {
            form_data.append('image', image);
        }
        
        processImage('edit_image.php', dataSheet, form_data, '#editCarouselModal');
    });

    // 點擊輪播牆刪除
    deleteTableEvent('study_abroad_carousel', '.deleteCarouselBtn');
})
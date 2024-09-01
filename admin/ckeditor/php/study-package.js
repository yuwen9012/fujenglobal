import ImageResize from '@ckeditor/ckeditor5-image/src/imageresize';
import ImageToolbar from '@ckeditor/ckeditor5-image/src/imagetoolbar';
import ImageStyle from '@ckeditor/ckeditor5-image/src/imagestyle';
import ImageUpload from '@ckeditor/ckeditor5-image/src/imageupload';

let editorInstances = {};

ClassicEditor
    .create(document.querySelector('#editor-introduction'), {
        ckfinder: {
            uploadUrl: './php/upload.php' // 設定圖片上傳的後端處理腳本
        },
        toolbar: {
            items: [
                'heading', '|',
                'bold', 'italic', 'link', 'bulletedList', 'numberedList', 'blockQuote', '|',
                'insertTable', 'mediaEmbed', 'undo', 'redo', '|',
                'imageUpload' // 加入圖片上傳按鈕
            ]
        },
        image: {
            toolbar: [
                'imageTextAlternative', // 編輯替代文字
                'imageStyle:full', 'imageStyle:side', // 圖片樣式：全寬、側邊
                'imageStyle:inline', // 圖片樣式：行內
                'imageResize', // 圖片縮放工具
                'imageResize:50', 'imageResize:75', 'imageResize:original', // 縮放選項：50%、75%、原始大小
                'imageCaption' // 編輯圖片標題
            ]
        }
    })
    .then(editor => {
        editorInstances['introduction'] = editor;
        loadContent('introduction', editor); // 頁面載入時載入內容
    })
    .catch(error => {
        console.error(error);
    });

ClassicEditor
    .create(document.querySelector('#editor-features'), {
        ckfinder: {
            uploadUrl: './php/upload.php' // 設定圖片上傳的後端處理腳本
        },
        toolbar: {
            items: [
                'heading', '|',
                'bold', 'italic', 'link', 'bulletedList', 'numberedList', 'blockQuote', '|',
                'insertTable', 'mediaEmbed', 'undo', 'redo', '|',
                'imageUpload' // 加入圖片上傳按鈕
            ]
        },
        image: {
            toolbar: [
                'imageTextAlternative', // 編輯替代文字
                'imageStyle:full', 'imageStyle:side', // 圖片樣式：全寬、側邊
                'imageStyle:inline', // 圖片樣式：行內
                'imageResize', // 圖片縮放工具
                'imageResize:50', 'imageResize:75', 'imageResize:original', // 縮放選項：50%、75%、原始大小
                'imageCaption' // 編輯圖片標題
            ]
        }
    })
    .then(editor => {
        editorInstances['features'] = editor;
        loadContent('features', editor); // 頁面載入時載入內容
    })
    .catch(error => {
        console.error(error);
    });

function saveContent(section) {
    var editor = editorInstances[section];
    var content = editor.getData(); // 從編輯器獲取內容
    $.ajax({
        url: './php/save-content.php', // 確保路徑正確
        method: 'POST',
        data: { section: section, content: content },
        success: function(response) {
            // 儲存成功後直接載入內容更新顯示
            loadContent(section);
            document.getElementById(`editor-container-${section}`).style.display = 'none'; // 隱藏編輯器
            document.getElementById(`content-container-${section}`).style.display = 'block'; // 顯示內容區塊
        },
        error: function(xhr, status, error) {
            console.error('儲存內容錯誤:', error);
        }
    });
}

function loadContent(section, editor = null) {
    $.ajax({
        url: './php/load-content.php', // 確保路徑正確
        method: 'GET',
        data: { section: section },
        success: function(response) {
            const contentContainer = document.getElementById(`content-${section}`);
            contentContainer.innerHTML = response;
/* 
            // 判斷內容是否超過100字
            if (response.length > 100) {
                document.getElementById(`read-more-btn-${section}`).style.display = 'block';
            } else {
                document.getElementById(`read-more-btn-${section}`).style.display = 'none';
            }
*/
            // 如果提供了編輯器實例，將內容設定到編輯器中
            if (editor) {
                editor.setData(response);
            }
        },
        error: function(xhr, status, error) {
            console.error('讀取內容錯誤:', error);
        }
    });
}

function showEditor(section) {
    document.getElementById(`editor-container-${section}`).style.display = 'block'; // 顯示編輯器
    document.getElementById(`content-container-${section}`).style.display = 'none'; // 隱藏內容區塊
    var editor = editorInstances[section];
    loadContent(section, editor); // 載入內容到編輯器
}
/*
function toggleReadMore(section) {
    const content = document.getElementById(`content-${section}`);
    const button = document.getElementById(`read-more-btn-${section}`);
    
    if (content.classList.contains('expanded')) {
        content.classList.remove('expanded');
        button.textContent = 'Read more...';
    } else {
        content.classList.add('expanded');
        button.textContent = 'Read less...';
    }
}
*/
document.addEventListener('DOMContentLoaded', function() {
    loadContent('introduction'); // 頁面載入時載入內容
    loadContent('features'); // 頁面載入時載入內容
});
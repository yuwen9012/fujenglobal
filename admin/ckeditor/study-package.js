const editorInstances = {};
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
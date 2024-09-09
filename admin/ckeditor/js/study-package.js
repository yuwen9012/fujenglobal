import {
	ClassicEditor,
	AccessibilityHelp,
	Alignment,
	Autoformat,
	AutoImage,
	Autosave,
	BlockQuote,
	Bold,
	Essentials,
	GeneralHtmlSupport,
	Heading,
	HorizontalLine,
	ImageBlock,
	ImageCaption,
	ImageInline,
	ImageInsert,
	ImageInsertViaUrl,
	ImageResize,
	ImageStyle,
	ImageTextAlternative,
	ImageToolbar,
	ImageUpload,
	Indent,
	IndentBlock,
	Italic,
	Link,
	LinkImage,
	List,
	ListProperties,
	MediaEmbed,
	Paragraph,
	PasteFromOffice,
	SelectAll,
	SimpleUploadAdapter,
	Table,
	TableCaption,
	TableCellProperties,
	TableColumnResize,
	TableProperties,
	TableToolbar,
	TextTransformation,
	TodoList,
	Underline,
	Undo
} from 'ckeditor5';

import translations from 'ckeditor5/translations/zh.js';

const editorConfig = {
	toolbar: {
		items: [
			'undo',
			'redo',
			'|',
			'selectAll',
			'|',
			'heading',
			'|',
			'bold',
			'italic',
			'underline',
			'|',
			'horizontalLine',
			'link',
			'insertImage',
			'mediaEmbed',
			'insertTable',
			'blockQuote',
			'|',
			'alignment',
			'|',
			'bulletedList',
			'numberedList',
			'todoList',
			'outdent',
			'indent',
			'|',
			'accessibilityHelp'
		],
		shouldNotGroupWhenFull: false
	},
	plugins: [
		AccessibilityHelp,
		Alignment,
		Autoformat,
		AutoImage,
		Autosave,
		BlockQuote,
		Bold,
		Essentials,
		GeneralHtmlSupport,
		Heading,
		HorizontalLine,
		ImageBlock,
		ImageCaption,
		ImageInline,
		ImageInsert,
		ImageInsertViaUrl,
		ImageResize,
		ImageStyle,
		ImageTextAlternative,
		ImageToolbar,
		ImageUpload,
		Indent,
		IndentBlock,
		Italic,
		Link,
		LinkImage,
		List,
		ListProperties,
		MediaEmbed,
		Paragraph,
		PasteFromOffice,
		SelectAll,
		SimpleUploadAdapter,
		Table,
		TableCaption,
		TableCellProperties,
		TableColumnResize,
		TableProperties,
		TableToolbar,
		TextTransformation,
		TodoList,
		Underline,
		Undo
	],
	heading: {
		options: [
			{
				model: 'paragraph',
				title: 'Paragraph',
				class: 'ck-heading_paragraph'
			},
			{
				model: 'heading1',
				view: 'h1',
				title: 'Heading 1',
				class: 'ck-heading_heading1'
			},
			{
				model: 'heading2',
				view: 'h2',
				title: 'Heading 2',
				class: 'ck-heading_heading2'
			},
			{
				model: 'heading3',
				view: 'h3',
				title: 'Heading 3',
				class: 'ck-heading_heading3'
			},
			{
				model: 'heading4',
				view: 'h4',
				title: 'Heading 4',
				class: 'ck-heading_heading4'
			},
			{
				model: 'heading5',
				view: 'h5',
				title: 'Heading 5',
				class: 'ck-heading_heading5'
			},
			{
				model: 'heading6',
				view: 'h6',
				title: 'Heading 6',
				class: 'ck-heading_heading6'
			}
		]
	},
	htmlSupport: {
		allow: [
			{
				name: /^.*$/,
				styles: true,
				attributes: true,
				classes: true
			}
		]
	},
	image: {
		toolbar: [
			'toggleImageCaption',
			'imageTextAlternative',
			'|',
			'imageStyle:inline',
			'imageStyle:wrapText',
			'imageStyle:breakText',
			'|',
			'resizeImage'
		]
	},
	language: 'zh',
	link: {
		addTargetToExternalLinks: true,
		defaultProtocol: 'https://',
		decorators: {
			toggleDownloadable: {
				mode: 'manual',
				label: 'Downloadable',
				attributes: {
					download: 'file'
				}
			}
		}
	},
	list: {
		properties: {
			styles: true,
			startIndex: true,
			reversed: true
		}
	},
	placeholder: 'Type or paste your content here!',
	table: {
		contentToolbar: ['tableColumn', 'tableRow', 'mergeTableCells', 'tableProperties', 'tableCellProperties']
	},
	simpleUpload: {
		// The URL that the images are uploaded to.
		uploadUrl: './php/upload.php',

		// Enable the XMLHttpRequest.withCredentials property.
		withCredentials: true,

		// Headers sent along with the XMLHttpRequest to the upload server.
		headers: {
			'X-CSRF-TOKEN': 'CSRF-Token',
			Authorization: 'Bearer <JSON Web Token>'
		}
	},
	translations: [translations]
};

// 定義並初始化 editorInstances
const editorInstances = {};

const editorSections = ['introduction', 'features']; // 假設有這些區段

editorSections.forEach(section => {
    ClassicEditor.create(document.querySelector(`#editor-${section}`), editorConfig)
        .then(editor => {
            editorInstances[section] = editor; // 將實例存儲到 editorInstances
        })
        .catch(error => {
            console.error('初始化編輯器錯誤:', error);
        });
});
window.saveContent = function(department, title) {
    var editor = editorInstances[title];
    var content = editor.getData();
    $.ajax({
        url: './php/save-content.php', 
        method: 'POST',
        data: {
            department: department, 
            title: title,          
            content: content      
        },
        success: function(response) {
            loadContent(department, title);
            document.getElementById(`editor-container-${title}`).style.display = 'none'; // 隱藏編輯器
            document.getElementById(`content-container-${title}`).style.display = 'block'; // 顯示內容區塊
        },
        error: function(xhr, status, error) {
            console.error('儲存內容錯誤:', error);
        }
    });
};

window.loadContent = function(department, title, editor = null) {
    $.ajax({
        url: './php/load-content.php', 
        method: 'GET',
        data: {
            department: department, 
            title: title            
        },
        success: function(response) {
            const contentContainer = document.getElementById(`content-${title}`);
            contentContainer.innerHTML = response;
            if (editor) {
                editor.setData(response);
            }
        },
        error: function(xhr, status, error) {
            console.error('讀取內容錯誤:', error);
        }
    });
};


window.showEditor = function(department, title) {
    document.getElementById(`editor-container-${title}`).style.display = 'block'; // 顯示編輯器
    document.getElementById(`content-container-${title}`).style.display = 'none'; // 隱藏內容區塊
    var editor = editorInstances[title];
    loadContent(department, title, editor); // 載入內容到編輯器
};
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
    loadContent('law','introduction'); // 頁面載入時載入內容
    loadContent('law','features'); // 頁面載入時載入內容
});
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


window.saveContent = function(college_id, title_id,content) {
	content = decodeURIComponent(content);
    var editor = editorInstances[title_id];
    var newContent = editor.getData();
    
    if (newContent === content) {
		document.getElementById(`editor-container-${title_id}`).style.display = 'none'; // 隱藏編輯器
        loadContent(college_id);
        document.getElementById(`content-container-${title_id}`).style.display = 'block'; // 顯示內容區塊
        return; 
    }

    $.ajax({
        url: './php/save-content.php',
        method: 'POST',
        data: {
            college_id: college_id,
            title_id: title_id,
            content: newContent
        },
        success: function(response) {
            document.getElementById(`editor-container-${title_id}`).style.display = 'none'; // 隱藏編輯器
            loadContent(college_id);
            document.getElementById(`content-container-${title_id}`).style.display = 'block'; // 顯示內容區塊
        },
        error: function(xhr, status, error) {
            console.error('儲存內容錯誤:', error);
        }
    });
};

window.showEditor = function(title, content) {
    content = decodeURIComponent(content);
    var editorContainer = document.getElementById(`editor-container-${title}`);
    var contentContainer = document.getElementById(`content-container-${title}`);
    var editorElement = document.getElementById(`editor-${title}`); // 假設你有一個textarea或div，這裡是其ID

    if (editorContainer) {
        editorContainer.style.display = 'block'; // 顯示編輯器
    } else {
        console.error(`Element with id "editor-container-${title}" not found.`);
    }

    if (contentContainer) {
        contentContainer.style.display = 'none'; // 隱藏內容區塊
    } else {
        console.error(`Element with id "content-container-${title}" not found.`);
    }


	ClassicEditor
		.create(editorElement, editorConfig)
		.then(editor => {
			editorInstances[title] = editor; // 保存編輯器實例
			editor.setData(content);

		})
		.catch(error => {
			console.error('Error initializing the editor:', error);
		});

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

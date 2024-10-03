document.addEventListener('DOMContentLoaded', () => {
    const fixedTop = document.querySelector('.fixed-top');
    const content = document.querySelector('#content');
    const fixedTopHeight = fixedTop.offsetHeight;
    content.style.marginTop = fixedTopHeight + 'px';
    
    // 複製文本功能
    const copyTexts = document.querySelectorAll('.copy-text');
    const copySuccess = document.getElementById('copy-success');
    
    copyTexts.forEach(copyText => {
        copyText.addEventListener('click', () => {
            const textToCopy = copyText.getAttribute('data-text');
            navigator.clipboard.writeText(textToCopy).then(() => {
                // 顯示複製成功動畫
                copySuccess.classList.add('show');
                setTimeout(() => {
                    copySuccess.classList.remove('show');
                }, 1000); // 動畫持續 1 秒
            }).catch(err => {
                console.error('Failed to copy: ', err);
            });
        });
    });

    // 表單提交處理
    const contactForm = document.getElementById('contactForm');
    const responseMessage = document.getElementById('responseMessage'); // 確保這裡獲取到了正確的元素
    
    if (contactForm && responseMessage) {
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault(); // 阻止表單的默認提交行為

            var formData = new FormData(this);

            fetch('php/mail.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.text())
            .then(data => {
                responseMessage.innerHTML = '<p id="send">Message has been sent</p>';
                responseMessage.classList.add('show'); // 顯示動畫
                contactForm.reset(); // 重置表單
                
                setTimeout(() => {
                    responseMessage.classList.remove('show'); // 隱藏動畫
                }, 3000); // 動畫持續 5 秒
            })
            .catch(error => {
                responseMessage.innerHTML = '<p id="send">Error sending message. Please try again.</p>';
                responseMessage.classList.add('show');
                
                setTimeout(() => {
                    responseMessage.classList.remove('show');
                }, 3000); // 動畫持續 5 秒
            });
        });
    } else {
        console.error('contactForm or responseMessage element not found.');
    }
});

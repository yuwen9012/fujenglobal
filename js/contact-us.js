document.addEventListener('DOMContentLoaded', () => {
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
});

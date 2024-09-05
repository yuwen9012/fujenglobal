 const togglePassword = document.getElementById('togglePassword');
 const password = document.getElementById('password');

 togglePassword.addEventListener('click', function () {
     const type = password.type === 'password' ? 'text' : 'password';
     password.type = type;
     
     this.classList.toggle('fa-eye');
     this.classList.toggle('fa-eye-slash');
 });


 document.getElementById('loginForm').addEventListener('submit', function(event) {
    event.preventDefault(); //阻止預設

    // 取得用戶輸入的帳號和密碼
    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;
    
    verify(username,password)

    function verify(username,password) {
        $.ajax({
            url: './php/signin.php',
            method: 'POST',
            contentType: 'application/json',
            data: JSON.stringify({ 
                username: username, 
                password: password 
            }),
            dataType: 'json',
            success: function(data) {
                if (data.success) {
                    window.location.href = './home.php';
                } else {
                    $('#errorMessage').text(data.message);
                }
            },
            error: function(xhr, status, error) {
                console.error('Error:', error);
                $('#errorMessage').text('發生錯誤，請稍後再試。');
            }
        });
    }
});
const passwordFields = [
    { password: document.getElementById('oldPassword'), toggle: document.getElementById('togglePassword1') },
    { password: document.getElementById('newPassword'), toggle: document.getElementById('togglePassword2') },
    { password: document.getElementById('confirmPassword'), toggle: document.getElementById('togglePassword3') }
  ];
  
  passwordFields.forEach(({ password, toggle }) => {
    toggle.addEventListener('click', function () {
      const type = password.type === 'password' ? 'text' : 'password';
      password.type = type;
  
      this.classList.toggle('fa-eye');
      this.classList.toggle('fa-eye-slash');
    });
  });

function changePassword() {
    var newPassword = document.getElementById("newPassword").value;
    var confirmPassword = document.getElementById("confirmPassword").value;

    // 檢查新密碼和確認新密碼是否相同
    if (newPassword === confirmPassword) {
        // 發送 Ajax 請求
        $.ajax({
            type: "POST",
            url: "php/changepassword.php",
            data: {
                "oldPassword": document.getElementById("oldPassword").value,
                "newPassword": document.getElementById("newPassword").value,
            },
            success: function (data) {
                console.log("data:", data); // 打印响应内容
                alert(data);
                if (data=="密碼修改成功!請重新登入") {
                    // 將用戶重新導向到登入頁面
                    window.location.href="./login.php";
                }
            },
            error: function (jqXHR) {
                alert("發生錯誤狀態:" + jqXHR.readyState + "     " + jqXHR.status);
            }
        });
    } else {
        alert("新密碼與確認密碼不一致");
    }
}




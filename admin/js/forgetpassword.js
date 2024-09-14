function forgetpassword(){
    var account = document.getElementById("account").value;
    var email = document.getElementById("email").value;

    if (!account || !email) {
        alert("請輸入帳號和信箱");
        return;
    }
	alert("信件寄件中!");
	$.ajax({
		type:"POST",
		url:"./php/forgetpassword.php",
		data:{
			"account":document.getElementById("account").value,
			"email":document.getElementById("email").value,
		},
		success: function (data) {
            console.log("data:", data);
            alert(data);
            if (data=="新密碼已成功寄送至您的信箱!") {
                // 將用戶重新導向到登入頁面
                window.location.href="./login.php";
            }
        },
		error:function(){
			alert("發生錯誤狀態:"+jqXHR.readyState+ "     "+jqXHR.status);
		},
	});
}

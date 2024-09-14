<!DOCTYPE html>
<html lang="zh-Hant">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- icon -->
    <link href="../images/logo.ico" rel="shortcut icon" />

    <!-- 引入 Poppins 字體 -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- CSS -->
    <link rel="stylesheet" href="css/login.css">

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <title>登入頁面</title>

</head>
<body>
    <button class="back-button" onclick="window.history.back();">
        <i class="fa fa-arrow-left"></i>
    </button>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mt-5">
                <img src="../images/05-校徽-英文組合排列.png" alt="校徽" class="logo">
                <div class="login-title">後臺管理系統</div>
            </div>
            <div class="container d-flex justify-content-center align-items-center">
                <div class="login-container">
                    <div class="mac-buttons">
                        <div class="circle circle-red"></div>
                        <div class="circle circle-yellow"></div>
                        <div class="circle circle-green"></div>
                    </div>
                    <form id='loginForm'>
                        <div class="my-2 form-group position-relative">
                            <label for="username">帳號：</label>
                            <input type="text" class="mt-1 form-control" id="username">
                        </div>
                        <div class="my-2 form-group position-relative">
                            <label for="password">密碼：</label>
                            <input type="password" class="mt-1 form-control" id="password">
                            <i class="fa fa-eye-slash eye-icon" id="togglePassword"></i>
                        </div>
                        <button type="submit">登入</button>
                        <a href="forgetpassword.php" class="btn btn-link" style="color:#132548">忘記密碼</a>
                        <div id="errorMessage" class="text-danger mt-2"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- JS -->
    <script type="text/javascript" src="js/login.js"></script>
</body>
</html>

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

    <title>登入頁面</title>

    <style>
        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
            background: linear-gradient(to top right, #132548 20%, #3C5077 80%);
            background-size: cover;
            background-repeat: no-repeat; 
        }

        .login-container {
            position: relative; /* 設定容器為相對定位 */
            background-color: #FFF9E6;
            padding: 40px;
            width: 320px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .mac-buttons {
            position: absolute; 
            top: 0;
            left: 0;
            right: 0;
            display: flex;
            background-color: #ECE1BF;
            height: 30px;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            padding: 10px;
            z-index: 1000;
        }

        .mac-buttons .circle {
            width: 10px;
            height: 10px;
            border-radius: 50%;
            margin-right: 5px;
        }

        .circle-red {
            background-color: #E79A89;
        }

        .circle-yellow {
            background-color: #898D94;
        }

        .circle-green {
            background-color: #AFCBAB;
        }

        .logo {
            display: block;
            margin: 0 auto 10px;
            width: 100px;
            height: 100px;
        }

        .login-title {
            font-size: 20px;
            font-weight: bold;
            color: white;
            margin-bottom: 20px;
        }

        .form-group label {
            font-weight: bold;
            color: #333;
        }
        
        .form-group {
            text-align: left;
            position: relative;
        }

        .form-control {
            border-radius: 5px;
            border: 0px;
            box-shadow: none;
            transition: all 0.3s ease-in-out;
        }

        .form-control:focus {
            box-shadow: 0 0 8px #b8c4de;
        }

        .login-container button {
            width: 100%;
            padding: 8px;
            border: none;
            font-weight: bold;
            border-radius: 5px;
            background-color: #26385B;
            color: white !important;
            font-size: 16px;
            cursor: pointer;
            margin-top: 20px;
            transition: background-color 0.3s ease-in-out;
        }

        .login-container button:hover {
            background-color: #435475;
        }

        .login-container button:active {
            background-color: #8090B1;
        }

        .back-button {
            position: fixed;
            top: 10px;
            left: 10px;
            font-size: 20px;
            color: white;
            cursor: pointer;
            background: none;
            border: none;
            outline: none;
            transition: color 0.3s ease;
            z-index: 1000;
        }

        .back-button:hover {
            color: #ECE1BF;
        }

        .eye-icon {
            position: absolute;
            top: 72%;
            right: 10px;
            transform: translateY(-50%);
            cursor: pointer;
        }
        
        .fa-eye-slash {
            color: #898D94;
            right: 9px;
        }

        .fa-eye {
            color: #AFCBAB;
        }
    </style>
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
                    <form>
                        <div class="my-2 form-group position-relative">
                            <label for="username">帳號：</label>
                            <input type="text" class="mt-1 form-control" id="username">
                        </div>
                        <div class="my-2 form-group position-relative">
                            <label for="password">密碼：</label>
                            <input type="password" class="mt-1 form-control" id="password">
                            <i class="fa fa-eye-slash eye-icon" id="togglePassword"></i>
                        </div>
                        <button type="submit" class="btn">登入</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // 顯示/隱藏密碼功能
        const togglePassword = document.getElementById('togglePassword');
        const password = document.getElementById('password');

        togglePassword.addEventListener('click', function () {
            const type = password.type === 'password' ? 'text' : 'password';
            password.type = type;
            
            this.classList.toggle('fa-eye');
            this.classList.toggle('fa-eye-slash');
        });
    </script>
</body>
</html>

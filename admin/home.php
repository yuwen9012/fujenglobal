<!DOCTYPE html>
<html lang="en">
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
    <link rel="stylesheet" href="css/home.css">

    <title>後台系統</title>
</head>
<body>
    <div class="container-fluid vh-100 p-0">
        <div class="row h-100 g-0">
            <div class="col-2 d-flex flex-column p-0">
                <nav id="sidebar" class="d-flex flex-column p-3">
                    <div class="logo d-flex justify-content-center mb-3">
                        <img src="../images/05-校徽-英文組合排列.png" alt="Logo">
                    </div>

                    <div class="position-sticky py-3 flex-grow-1">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link text-white active" href="#">
                                    主面板
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="#submenu1" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="submenu1">
                                    Home
                                </a>
                                <div class="collapse" id="submenu1">
                                    <ul class="nav flex-column ms-3">
                                        <li class="nav-item">
                                            <a class="nav-link text-white" href="#">輪播牆(3:1圖片) 設定</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-white" href="#">介紹(文字+圖片) 設定</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="#submenu2" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="submenu2">
                                    Study-Abroad
                                </a>
                                <div class="collapse" id="submenu2">
                                    <ul class="nav flex-column ms-3">
                                        <li class="nav-item">
                                            <a class="nav-link text-white" href="#">學院 設定</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-white" href="#">介紹 設定</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-white" href="#">計分器 設定</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-white" href="#">流程圖 設定</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>

            <div class="col-md-10 ms-sm-auto px-4 d-flex justify-content-center align-items-center">
                <div class="container" style="width: 95%; height: 90%; background-color: #FFF9E6;">
                </div>
            </div>
        </div>
    </div>
</body>
</html>
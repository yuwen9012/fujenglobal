<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- icon -->
    <link href="../images/logo.ico" rel="shortcut icon" />

    <!-- 引入 Poppins 字體 -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap">

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!-- Bootstrap Table -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-table@1.23.2/dist/bootstrap-table.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-table@1.23.2/dist/bootstrap-table.min.js"></script>

    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- CSS -->
    <link rel="stylesheet" href="css/home.css">

    <!-- JS -->
    <script type="text/javascript" src="js/home.js"></script>

    <title>後台系統</title>
</head>
<body>
    <div class="container-fluid vh-100 p-0">
        <div class="row h-100 g-0">
            <div id="nav" class="col position-fixed d-flex flex-column">
                <nav id="sidebar" class="d-flex flex-column vh-100 pt-3 pb-3">
                    <div class="logo d-flex justify-content-center mb-3">
                        <img src="../images/05-校徽-英文組合排列.png" alt="Logo">
                    </div>
                    <div class="d-flex flex-column py-3 flex-grow-1">
                        <ul class="nav flex-column flex-grow-1" id="menu">
                            <li class="nav-item">
                                <a class="nav-link d-flex justify-content-center fw-bolder m-menu" href="home.php">
                                    Home
                                </a>
                            </li>
                            <li class="nav-item active">
                                <div class="row m-menu">
                                    <div class="col-10 pe-0">
                                        <a class="nav-link d-flex justify-content-center fw-bolder cursor-pointer m-menu-color" href="study-abroad.php">
                                            Study-Abroad
                                        </a>
                                    </div>
                                    <div class="col-2 ps-0 d-flex align-items-end">
                                        <a class="nav-link w-100 d-flex justify-content-end m-menu-color" data-bs-toggle="collapse" href="#studyAbroadMenu" role="button" aria-expanded="false" aria-controls="studyAbroadMenu">
                                            <i class="fa fa-chevron-down"></i>
                                            <i class="fa fa-chevron-up"></i>
                                        </a>
                                    </div>
                                </div>

                                <div class="collapse" id="studyAbroadMenu" data-bs-parent="#menu">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link d-flex justify-content-center fw-bolder s-menu" href="#">How to Apply</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link d-flex justify-content-center fw-bolder s-menu" href="#">Program Introduction</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link d-flex justify-content-center fw-bolder s-menu" href="#">Study Package</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link d-flex justify-content-center fw-bolder s-menu" href="#">Taiwanese Culture</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link d-flex justify-content-center fw-bolder s-menu" href="#">Enterprise Visit</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link d-flex justify-content-center fw-bolder s-menu" href="#">Mandarin Learning</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link d-flex justify-content-center fw-bolder s-menu" href="#">Accommodation</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link d-flex justify-content-center fw-bolder s-menu" href="#">FAQ</a>
                                        </li>
                                        <!-- <li class="nav-item">
                                            <a class="nav-link d-flex justify-content-center fw-bolder s-menu" href="#">學院 設定</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link d-flex justify-content-center fw-bolder s-menu" href="#">介紹 設定</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link d-flex justify-content-center fw-bolder s-menu" href="#">計分器 設定</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link d-flex justify-content-center fw-bolder s-menu" href="#">流程圖 設定</a>
                                        </li> -->
                                    </ul>
                                </div>
                            </li>

                            <li class="nav-item mt-auto">
                                <a class="nav-link d-flex justify-content-center fw-bolder m-menu" href="#">
                                    帳號管理
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>

            <div id="setting" class="col p-0 d-flex justify-content-center align-items-center">
                <div id="content" class="container rounded">
                    <ul class="nav nav-tabs mt-2">
                        <li class="nav-item">
                            <a class="nav-link active" id="introduction-tab" data-bs-toggle="tab" href="#introduction" role="tab" aria-controls="introduction" aria-selected="true">介紹文字</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="scorer-tab" data-bs-toggle="tab" href="#scorer" role="tab" aria-controls="scorer" aria-selected="false">計分器</a>
                        </li>
                    </ul>

                    <div class="tab-content mt-3">
                        <div class="tab-pane fade show active" id="introduction" role="tabpanel" aria-labelledby="introduction-tab">
                            介紹文字編輯
                        </div>
                        <div class="tab-pane fade" id="scorer" role="tabpanel" aria-labelledby="scorer-tab">
                            計分器表格
                        </div>
                    </div>
                <div>
            </div>
        </div>
    </div>
</body>
</html>